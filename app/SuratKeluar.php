<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    //
    protected $table="suratkeluar";
    protected $primarykey = 'id';
    protected $guarded=['id'];

    public function getImages(){
        if(!$this->Foto){
            return asset('lte/dist/images/NF.png');
        }
    
        return asset('lte/dist/images/'.$this->Foto);
    }
}
