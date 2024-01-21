<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // need to add


class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'category_id', 'tags','image'];


    public function category(): BelongsTo{ // function name ('category') will be called in resources/views/backend/product/index.blade.php like "<td>{{$cat->category->name}}</td>"
        return $this->belongsTo(Category::class);
    }

    public function setTagsAttribute($value)
    {
        $this->attributes['tags'] = json_encode($value); // encode converts array to string
    }

    public function getTagsAttribute($value)  // decode converts string to array
    {
         return $this->attributes['tags'] = json_decode($value);
        // return is_array($value) ? $value : json_decode($value, true);
    }
}
