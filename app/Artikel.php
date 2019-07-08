<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = ['judul', 'slug', 'konten', 'foto', 'id_user', 'id_kategori'];
    public $timestamps = true;

    public function kategori(){
        return $this->belongsTo('App\Kategori', 'id_kategori');
    }

    public function user(){
        return $this->belongsTo('App\User', 'id_user');
    }

    public function tag(){
        return $this->belongsToMany('App\Tag', 'artikel_tags', 'id_artikel', 'id_tag');
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
