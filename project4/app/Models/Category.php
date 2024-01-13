<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany; // need to add


class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function product(): HasMany{ // for making relationship
        return $this->hasMany(Product::class);
    }

}
