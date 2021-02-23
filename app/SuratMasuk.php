<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    //
    protected $table="suratmasuk";
    protected $guarded=['id'];
    protected $fillable = [
        'AlamatPengirim',
        'NomorSurat',
        'Perihal',
        'Foto',
    ];

    public function getImages(){
        if(!$this->Foto){
            return asset('lte/dist/images/NF.png');
        }
    
        return asset('lte/dist/images/'.$this->Foto);
    }
}
