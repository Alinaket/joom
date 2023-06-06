<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static orderBy(\Illuminate\Contracts\Database\Query\Expression $raw)
 * @method static get()
 * @method static where(string $string, $category)
 */
class Category extends Model
{
    use HasFactory;
}
