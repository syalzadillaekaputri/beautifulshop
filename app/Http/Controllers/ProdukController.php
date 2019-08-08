<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produk;
use Illuminate\Support\Facades\File;
class ProdukController extends Controller
{
    public function index(Request $request)
    {
      
        $produk = \App\produk::orderBy('id','desc')->get();
        return view ('produk', ['produk'=>$produk]);
    }
    public function create()
    {
    	return view('produk.form');
    }
    public function store(Request $request)
    {
    	$rule = [
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'jumlah_produk' => 'required',
            'keterangan_produk' => 'required',
            'image' => 'required|file|max:2000'
        ];
        $this->validate($request, $rule);
        if($request->hasFile('image')){
            $uploadedFile = $request->file('image');        
            $path = $uploadedFile->store('public/files');
            $input = $request->all();
            $input['image'] = str_replace('public/files/','',$path);
        }
    	unset($input['_token']);
    	$status = produk::create($input);
        
    	if ($status) {
    		return redirect('/produk')->with('success', 'Data berhasil ditambahkan');
    	} else {
    		return redirect('/produk/create')->with('error', 'Data gagal ditambahkan');
    	}
    }
    public function edit(Request $request, $id)
    {
        $data['produk'] = \DB::table('produk')->find($id);
        return view('produk.form', $data);
    }
    public function update(Request $request, $id)
    {
        $rule = [
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'jumlah_produk' => 'required',
            'keterangan_produk' => 'required',
        ];
        $this->validate($request, $rule);

        $input = $request->all();
        $produk = \App\produk::find($id);
        if($request->hasFile('image')){
            $path_lama = storage_path('app/public/files/' . $produk->image);
            $uploadedFile = $request->file('image');        
            $path = $uploadedFile->store('public/files');
            $input = $request->all();
            $input['image'] = str_replace('public/files/','',$path);
            File::delete($path_lama);
        }
        $status = $produk->update($input);

        if ($status){
                return redirect('/produk')->with('success', 'Data berhasil diubah');
            }else{
                return redirect('/produk/create')->with('error', 'Data gagal diubah');
        }
    }
    public function destroy(Request $request, $id)
    {
        $produk = \App\produk::find($id);
        $status = $produk->delete();

        if ($status){
                return redirect('/produk')->with('success', 'Data berhasil dihapus');
            }else{
                return redirect('/produk/create')->with('error', 'Data gagal dihapus');
        }
    }
}
