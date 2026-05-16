<?php
namespace App\Http\Controllers;
use App\Models\Artis;
use App\Models\Album;
use App\Models\Lagu;
use App\Models\Playlist;

class MusikController extends Controller {

    public function index() {
        $artis = Artis::all();
        $album = Album::with('artis')->get();
        $lagu = Lagu::with(['artis', 'album'])->get();
        $playlist = Playlist::with('lagu')->get();

        return view('musik.index', compact('artis', 'album', 'lagu', 'playlist'));
    }
}