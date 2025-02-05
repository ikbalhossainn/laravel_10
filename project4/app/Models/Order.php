<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['order_number', 'user_id', 'sub_total', 'total_amount', 'quantity', 'first_name', 'last_name', 'email', 'phone', 'country', 'address1' ];
}
