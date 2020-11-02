<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function list()
    {
        return (object) [
            'nome'=>'Thais',
            'tel'=>'87382738237'
        ];
    }
}
