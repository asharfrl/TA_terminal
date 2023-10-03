<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Berita extends Model
{
    protected $table = 'berita';
    protected $fillable = ['judul', 'tgl', 'foto'];

    protected $dates = ['tgl'];
    // Define the relationships, if any, here
}

