<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Kategori extends Model
{
    protected $fillable = ['nama_kategori', 'slug'];
    public $timestamps = true;

    public function artikel(){
        return $this->hasMany('App\Artikel', 'id_kategori');
    }
    public static function boot(){
        parent::boot();
        self::deleting(function($kategori){
            //mengecek apakah kategori masih digunakan oleh artikel
            if ($kategori->artikel->count() > 0){
                //menyimpan pesan error
                $html = 'Kategori tidak bisa dihapus karena masih digunakan oleh Artikel';
                $html .= '<ul>';
                foreach ($kategori->artikel as $data){
                    $html .= "<li>$data->judul</li>";
                }
                $html .= '</ul>';
                Session::flash('flash_notification', [
                    "level" => "danger", 
                    "message" => $html
                ]);
                //membatalkan proses penghapusan
                return false;
            }
        });
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
