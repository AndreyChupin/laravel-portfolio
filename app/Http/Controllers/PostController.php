<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

/**
 * Класс контроллер страницы поста
 * Class PostController
 * @package App\Http\Controllers
 */
class PostController extends Controller
{
    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function index($id)
    {
        $post = Post::query()->selectRaw('posts.id, user_id, posts.title, img, description, body, rating_up, rating_down, (rating_up - rating_down) as rating, (rating_up + rating_down) as rating_sum, bookmarks,views, comments, posts.created_at')->findOrFail($id);

        return view('pages.post', compact('post'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request)
    {
        // Валидация
        Validator::make($request->all(), [
            'rating_update' => 'required|filled|integer',
            'data-action' => [
                'required',
                'filled',
                'string',
                Rule::in(['up', 'down'])
            ]
        ])->validate();

        // Id поста
        $id = $request->input('rating_update');
        // Тип изменения
        $type = $request->input('data-action');
        // Пост
        $post = Post::findOrFail($id);
        if ($type === 'up') {
            // Изменение рейтинга на +1
            $post->rating_up++;
            $post->save();
        } elseif ($type === 'down') {
            // Изменение рейтинга на -1
            $post->rating_down++;
            $post->save();
        }
        // Данные, возвращаемые по ajax
        $res = [
            'rating_up' => $post->rating_up,
            'rating_down' => $post->rating_down,
            'rating' => $post->rating_up - $post->rating_down,
            'rating_sum' => $post->rating_up + $post->rating_down
        ];
        return response()->json($res);
    }
}
