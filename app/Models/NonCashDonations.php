<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonCashDonations extends Model
{
    use HasFactory;

    protected $fillable = [
        'items_id',
        'donation_id',
        'donation_id',
        'quantity',
        'amount',

    ];
}
