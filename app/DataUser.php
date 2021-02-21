<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataUser extends Model
{
    //
    protected $table="datauser";
    protected $primarykey = 'id';
    protected $guarded=['id'];
}
