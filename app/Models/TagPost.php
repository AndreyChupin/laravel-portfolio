<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Класс-модель для связи "tag-post"
 * Class TagPost
 * @package App\Models
 *
 * @property int $tag_id
 * @property int $post_id
 */
class TagPost extends Model
{
    use HasFactory;

    /**
     * @var string - название таблицы
     */
    protected $table = 'tag_post';
}
