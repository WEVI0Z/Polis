<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        "exp_date",
        "user_id",
        "manager_id",
        "accepted",
        "type"
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function manager() {
        return $this->belongsTo(User::class, "id", "manager_id");
    }

    use HasFactory;
}
