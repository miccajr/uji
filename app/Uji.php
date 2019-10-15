<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uji extends Model
{
    protected $table = 'perusahaan';
    protected $fillable = ['nama','departement','date'];
}
