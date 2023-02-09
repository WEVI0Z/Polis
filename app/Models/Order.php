<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        "ext_date",
        "user",
        "manager",
        "accepted",
        "type"
    ];

    use HasFactory;
}
