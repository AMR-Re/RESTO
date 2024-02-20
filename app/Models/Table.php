<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'guest_number', 'status', 'location'];

    // protected $casts = [
    //     'status' => \App\Helpers\Constant::TABLE_STATUS,
    //     'location' => \App\Helpers\Constant::TABLE_LOCATION
    // ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
