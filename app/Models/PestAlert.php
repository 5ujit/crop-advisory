<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PestAlert extends Model
{
use HasFactory;

protected $fillable = [
'title',
'description',
'crop_type',
'region',
'severity',
'date',
'location',
'crop'
];
}
