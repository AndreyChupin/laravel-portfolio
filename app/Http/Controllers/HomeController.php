<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Hub;
use Illuminate\Database\Eloquent\Builder;

/**
 * Класс контроллер для страцицы списка постов
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Метод вывода постов с фильтром по рейтингу
     * @param $hub
     * @param null $rating
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function index($hub, $rating = null)
    {
        // Значения для фильра по рейтингу
        $ratings = ['all', 10, 25, 50, 100];

        // Хаб
        $hub = Hub::query()->select('id', 'title')->where('title', $hub)->firstOrFail();

        // Заготовка запроса для 'posts'
        $posts_blank = Post::query()->whereHas('hubs', function (Builder $query) use ($hub) {
            $query->where('title', '=', $hub->title);
        })->selectRaw('posts.id, user_id, posts.title, img, description, rating_up, rating_down, (rating_up - rating_down) as rating, (rating_up + rating_down) as rating_sum, bookmarks, views, comments, posts.created_at')
            ->orderBy(
                'posts.created_at',
                'DESC'
            );

        // Получение постов с фильтром по рейтингу
        if ($rating && $rating !== 'all') {
            $rating = $this->render_rating($rating);
            $posts = $posts_blank->having('rating', '>=', $rating)->paginate(20);
        } else {
            $posts = $posts_blank->paginate(20);
        }

        return view('pages.home', compact('posts', 'hub', 'rating', 'ratings'));
    }

    /**
     * Метод обработки {rating}, получаемого из uri
     * @param $rating
     * @return int|string
     */
    protected function render_rating($rating)
    {
        if ($rating !== 'all') {
            return (int)substr($rating, 3);
        } else {
            return $rating;
        }
    }
}
