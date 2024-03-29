<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationItems extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_name',
        'amount_per_item'
    ];
}
