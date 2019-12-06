<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //protected $fillable = ['name','on_menu'];
    protected $guarded = [];


    public function products(){
        return $this->hasMany("App\Product");
    }

    public function badgeOnMenu(){
        return $this->attributes['on_menu'] ? '<span class="badge badge-primary">Affiché sur menu</span>':'' ;
    }
}
