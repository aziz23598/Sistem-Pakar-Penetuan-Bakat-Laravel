<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bakat extends Model
{
    use HasFactory;
    protected $table = "bakats";
    protected $guarded = "id";
}