<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @method static insert(array[] $movies)
 */
class Movie extends Model {
    protected $guarded = [];

    public function movie(): HasOne
    {
        return $this->hasOne(Movie::class, 'foreign_key');
    }
}
