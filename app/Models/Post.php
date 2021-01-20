<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//use JustBetter\PaginationWithHavings\PaginationWithHavings;

/**
 * Класс-модель для сущности "пост"
 * Class Post
 * @package App\Models
 *
 * @property int $user_id
 * @property string $title
 * @property string $img
 * @property string $description
 * @property string $body
 * @property int $rating_up
 * @property int $rating_down
 * @property int $bookmarks
 * @property int $views
 * @property int $comments
 *
 *
 */
class Post extends Model
{
    use HasFactory;
//    use PaginationWithHavings;
    protected $fillable = ['rating_up', 'rating_down'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_post');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function hubs()
    {
        return $this->belongsToMany(Hub::class, 'hub_post');
    }
}
