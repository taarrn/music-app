<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Album extends Model {
    protected $table = 'album';
    protected $fillable = ['artis_id', 'judul', 'tahun'];

    public function artis() {
        return $this->belongsTo(Artis::class, 'artis_id');
    }
    public function lagu() {
        return $this->hasMany(Lagu::class, 'album_id');
    }
}