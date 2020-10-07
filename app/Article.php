<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected  $guarded =[];
    function path(){
        return route('articles.show',$this);
    }

}

