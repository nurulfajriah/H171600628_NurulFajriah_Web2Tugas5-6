<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class ArtikelController extends Controller
{ 
    public function index(){
        
        $Artikel=Artikel::all(); 

        return view ('artikel.index',compact('Artikel'));
        //return view ('artikel.index'->with('data',$Artikel);
    }

    public function show($id) {

        //$Artikel=Artikel::where('id',$id)->first();
        $Artikel=Artikel::find($id);

        return view ('artikel.show', compact('Artikel'));
        
    }

    public function create(){
        return view('artikel.create');
    }

    public function store(Request $request) {
        $input=$request->all();

        Artikel::create($input);

        return redirect(route('artikel.index'));
    }
}