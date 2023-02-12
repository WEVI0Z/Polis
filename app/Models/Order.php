<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        "exp_date",
        "user_id",
        "manager",
        "accepted",
        "type"
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    use HasFactory;
}
