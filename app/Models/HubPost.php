<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Класс-модель для связи "hub-post"
 * Class HubPost
 * @package App\Models
 *
 * @property int $hub_id
 * @property int $post_id
 */
class HubPost extends Model
{
    use HasFactory;

    /**
     * @var string - название таблицы
     */
    protected $table = 'hub_post';
}
