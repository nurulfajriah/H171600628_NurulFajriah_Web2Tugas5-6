<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class BeritaController extends Controller
{ 
    public function index(){
        
        $Berita=Berita::all(); 

        return view ('berita.index',compact('Berita'));
        //return view ('berita.index'->with('data',$Berita);
    }

    public function show($id) {

        //$Artikel=Berita::where('id',$id)->first();
        $Artikel=Berita::find($id);

        return view ('berita.show', compact('Berita'));
        
    }

    public function create(){
        return view('berita.create');
    }

    public function store(Request $request) {
        $input=$request->all();

        Berita::create($input);

        return redirect(route('berita.index'));
    }
}