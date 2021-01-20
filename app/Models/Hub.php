<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//use JustBetter\PaginationWithHavings\PaginationWithHavings;

/**
 * Класс-модель для сущности "хаб"
 * Class Hub
 * @package App\Models
 *
 * @property string $title
 */
class Hub extends Model
{
    use HasFactory;
//    use PaginationWithHavings;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'hub_post');
    }
}
