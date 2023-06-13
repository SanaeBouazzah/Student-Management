<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  protected $table = 'students';
  protected $primarykey = 'id';
  protected $fillable = [
    'image',
    'name',
    'address',
    'mobile',
  ];
    use HasFactory;

}
