<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    //
    protected $table="suratkeluar";
    protected $primarykey = 'id';
    protected $guarded=['id'];
}
