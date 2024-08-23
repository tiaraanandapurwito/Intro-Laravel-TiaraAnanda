<?php

namespace App\Http\Controllers;
use App\Models\Cast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        // Retrieve all cast records from the database
        $casts = DB::table('cast')->get();
        
        // Pass the data to the index view
        return view('cast/index', compact('casts'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        // Return the create view
        return view('cast.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $req)
    {
        $nama = $req->input('nama');
        $umur = $req->input('umur');
        $bio = $req->input('bio');

        DB::table('cast')->insert([
            'nama' => $nama,
            'umur' => $umur,
            'bio' => $bio,
        ]);

        return redirect('/cast');
    }

    
    public function show($cast_id)
    {
    $cast = DB::table('cast')->where('id', $cast_id)->first();
    if (!$cast) {
        abort(404);
    }
    return view('cast/show', ['cast'=> $cast]);
    }

    public function edit($cast_id)
    {
    $cast = DB::table('cast')->where('id', $cast_id)->first();
    if (!$cast) {
        abort(404);
    }
    return view('cast/edit', ['cast'=> $cast]);
    }

    public function update(Request $req, $cast_id)
    { 
        $nama = $req->input('nama');
        $umur = $req->input('umur');
        $bio = $req->input('bio');

        DB::table('cast')->where('id', $cast_id)->update([
            'nama' => $nama,
            'umur' => $umur,
            'bio' => $bio,
        ]);

        return redirect('/cast');
    }
    
    public function destroy($cast_id)
    {
        DB::table('cast')->where('id', $cast_id)->delete();

        return redirect('/cast');
    }
}