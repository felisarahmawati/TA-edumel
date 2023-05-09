<?php

namespace App\Models\Admin\Tampilan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $fillable = [
        'image', 'teks1', 'teks2',
    ];
}
