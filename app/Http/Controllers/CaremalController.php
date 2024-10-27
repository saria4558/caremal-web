<?php

namespace App\Http\Controllers;

use App\Models\Caremal;
use App\Models\Kontak;
use App\Models\shelter;
use App\Models\tb_dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class CaremalController extends Controller
{
    
    public function dokter(){
        $data = caremal::all();

        // dd($data);
        return view('admin/daftardoktor',compact('data'));
        // return 'sukses';
    }
    public function shelter(){
        $data = shelter::all();

        // dd($data);
        return view('admin/daftarkontak',compact('data'));
        // return 'sukses';
    }
    public function tambah(){
        $data = tb_dokter::all();
        return view('admin/tambahdoktor', compact('data'));
    }
    //
    public function insert(Request $request){
        tb_dokter::create($request->all());
        return redirect()->to('admin/daftardoktor');
    }
    public function insertKontak(Request $request){
        shelter::create($request->all());
        return redirect()->to('admin/daftarkontak');
    }

    public function updatedata(Request $request, $id){
        $data = tb_dokter::find($id);
        if (!$data) {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
        $data->update($request->all());
        return redirect()->route('admin/daftardoktor')->with('success', 'data berhasil di update');
    }

    public function tampilkandata($id)
        {
            $data = tb_dokter::find($id);
            return view('admin/editDoktorModal', compact('data'));
        }



    public function deletedata($id)
    {
        $data = tb_dokter::find($id);
        $data->delete();
        return redirect()->to('admin/daftardoktor');   
    }
    public function deletedatakontak($id)
    {
        $data = shelter::find($id);
        $data->delete();
        return redirect()->to('admin/daftarkontak');   
    }

}