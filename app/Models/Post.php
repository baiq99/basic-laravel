<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title',
    //     'author',
    //     'description'
    // ];

    protected $guarded = ['id'];
}
