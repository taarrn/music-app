<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Artis extends Model {
    protected $table = 'artis';
    protected $fillable = ['nama', 'genre', 'negara'];

    public function album() {
        return $this->hasMany(Album::class, 'artis_id');
    }
    public function lagu() {
        return $this->hasMany(Lagu::class, 'artis_id');
    }
}
