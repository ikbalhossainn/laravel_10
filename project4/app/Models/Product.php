<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // need to add


class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'category_id'];


    public function category(): BelongsTo{ // function name ('category') will be called in resources/views/backend/product/index.blade.php like "<td>{{$cat->category->name}}</td>"
        return $this->belongsTo(Category::class);
    }
}
