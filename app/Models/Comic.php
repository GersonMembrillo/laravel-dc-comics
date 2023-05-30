<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    // se lo uso come esempio:
    // protected $table = 'example'

    protected $fillable = ['title', 'description', 'image', 'type', 'series', 'price', 'sale_date'];
    // protected $guarded [qua ci metto i campi che non voglio salvare, contrario di $fillable];
}
