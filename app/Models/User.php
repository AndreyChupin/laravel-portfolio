<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * @package App\Models
 *
 * @property string $first_name
 * @property string $last_name
 * @property string $nickname
 * @property string $password
 * @property string $specialization
 * @property string $avatar
 * @property float $karma
 * @property float $rating
 */
class User extends Model
{
    use HasFactory;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
