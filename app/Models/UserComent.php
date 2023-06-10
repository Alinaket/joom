<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, int $int)
 * @method static orderBy(\Illuminate\Contracts\Database\Query\Expression $raw)
 */
class UserComent extends Model
{
    protected $table = 'user_coment';
    use HasFactory;
}
