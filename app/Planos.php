<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Planos extends Model
{
    protected $fillable = [
        'id','titulo','descricao','valor'
    ];

    // public function usuario(){
    //     return $this->hasMany(User::class, 'id_user', 'id');
    // }    

}
