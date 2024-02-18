<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_ref',
        'donation_type',
        'total_amount',
        'frequency',
        'donation_interval',
        'payment_method',
        'narration',
    ];
}
