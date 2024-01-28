<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // need to add
use Laravel\Scout\Searchable; // need to add for search


class Product extends Model
{
    use HasFactory, Searchable;
    protected $fillable = ['name', 'description', 'price', 'category_id', 'tags','image'];


    public function category(): BelongsTo{ // function name ('category') will be called in resources/views/backend/product/index.blade.php like "<td>{{$cat->category->name}}</td>"
        return $this->belongsTo(Category::class);
    }

    public function setTagsAttribute($value)
    {
        $this->attributes['tags'] = json_encode($value); // encode converts string to array 
    }

    public function getTagsAttribute($value)  // decode converts array to string 
    {
        // return $this->attributes['tags'] = json_decode($value);
         return is_array($value) ? $value : json_decode($value, true);
    }

    public function toSearchableArray(){
        return[ // left side database
            'name' => $this->name,
            'description' => $this->description,
        ];
    }
}
