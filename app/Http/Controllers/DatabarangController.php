<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use Illuminate\Http\Request;
use PDF;

class DataBarangController extends Controller
{
    public function index(Request $request){
         if($request->has('search')){
          
            $data = DataBarang::where('nama', 'LIKE', '%'.$request->search.'%')->paginate(5);
         }else{

            $data = DataBarang::paginate(5);
         }
       
        return view ('databarang', compact('data'));

    }
    public function tambahbarang(){
        return view ('tambahdata');
    }
    public function insertdata(Request $request){
        //dd($request->all());
        $data = DataBarang::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotobarang/' , $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();

        }
        return redirect()->route('databarang')->with('success', 'Data Berhasil Di Tambahkan');
    }
    public function tampilkandata($id){

        $data = DataBarang::find($id);
       return view('tampildata', compact('data'));
    }
    public function updatedata (Request $request, $id){
        $data = DataBarang::find($id);
        $data->update($request->all());
        return redirect()->route('databarang')->with('success', 'Data Berhasil Di Update');
    }
    public function delete($id){
        $data = DataBarang::find($id);
        $data->delete();
        return redirect()->route('databarang')->with('success', 'Data Berhasil Di Hapus');
    }
    public function exportpdf(){
        $data = DataBarang::all();

        view()->share('data' , $data);
        $pdf = PDF::loadview('databarang-pdf');
       return $pdf->download('data.pdf');
        
    }
}
