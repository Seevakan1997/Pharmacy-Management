<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quaotation extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function Medicine()
    {
        return $this->belongsTo(Medicine::class, 'drugs', 'id');
    }

    public function Prescription()
    {
        return $this->belongsTo(Prescription::class, 'order_id', 'id');
    }
}
