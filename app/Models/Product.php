<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static get()
 * @method static limit(int $int)
 * @method static orderBy(\Illuminate\Contracts\Database\Query\Expression $raw)
 * @method static where()
 * @method static whereIn(string $string, array $data)
 */
class Product extends Model
{
    use HasFactory;
}
