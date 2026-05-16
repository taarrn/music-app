<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model {
    protected $table = 'playlist';
    protected $fillable = ['nama', 'deskripsi'];

    public function lagu() {
        return $this->belongsToMany(Lagu::class, 'playlist_lagu', 'playlist_id', 'lagu_id')
                    ->withPivot('urutan');
    }
}