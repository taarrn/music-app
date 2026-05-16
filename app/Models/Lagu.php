<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Lagu extends Model {
    protected $table = 'lagu';
    protected $fillable = ['album_id', 'artis_id', 'judul', 'durasi', 'track_number'];

    public function artis() {
        return $this->belongsTo(Artis::class, 'artis_id');
    }
    public function album() {
        return $this->belongsTo(Album::class, 'album_id');
    }
}