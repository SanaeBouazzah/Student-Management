<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
  protected $table = 'payments';
  protected $fillable =[
    'enrollment_id',
    'paid_data',
    'amount',
  ];
    use HasFactory;
}
