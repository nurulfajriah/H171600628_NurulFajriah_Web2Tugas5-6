<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;

class GaleriController extends Controller
{ 
    public function index(){
        
        $Galeri=Galeri::all(); 

        return view ('galeri.index',compact('Galeri'));
        //return view ('galeri.index'->with('data',$Galeri);
    }

    public function show($id) {

        //$Galeri=Galeri::where('id',$id)->first();
        $Galeri=Galeri::find($id);

        return view ('galeri.show', compact('Galeri'));
        
    }

    public function create(){
        return view('galeri.create');
    }

    public function store(Request $request) {
        $input=$request->all();

        Galeri::create($input);

        return redirect(route('galeri.index'));
    }
}