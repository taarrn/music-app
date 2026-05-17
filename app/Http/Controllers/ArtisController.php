<?php
namespace App\Http\Controllers;
use App\Models\Artis;
use Illuminate\Http\Request;

class ArtisController extends Controller {

    public function index() {
        $artis = Artis::all();
       return view('musik.artis', compact('artis'));
    }

    public function create() {
        return view('musik.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required',
            'genre' => 'required',
            'negara' => 'required',
        ]);
        Artis::create($request->all());
        return redirect('/artis')->with('success', 'Artis berhasil ditambahkan!');
    }

    public function edit($id) {
        $artis = Artis::findOrFail($id);
        return view('musik.edit', compact('artis'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nama' => 'required',
            'genre' => 'required',
            'negara' => 'required',
        ]);
        Artis::findOrFail($id)->update($request->all());
        return redirect('/artis')->with('success', 'Artis berhasil diupdate!');
    }

    public function destroy($id) {
        Artis::findOrFail($id)->delete();
        return redirect('/artis')->with('success', 'Artis berhasil dihapus!');
    }
}