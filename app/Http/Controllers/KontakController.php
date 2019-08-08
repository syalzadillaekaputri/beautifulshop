<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $kontak = \App\kontak::where('nama','LIKE','%'.$request->cari.'%')->get();
        }else{
            $kontak = \App\kontak::all();
        }
        return view ('kontak', ['kontak'=>$kontak]);
    }
    public function create()
    {
    	return view('kontak.form');
    }
    public function store(Request $request)
    {
    	$rule = [
            'nama' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'pesan' => 'required',
        ];
        $this->validate($request, $rule);
        
        $input = $request->all();
    	unset($input['_token']);
    	$status = \DB::table('kontak')->insert($input);

    	if ($status) {
    		return redirect('/kontak')->with('success', 'Data berhasil ditambahkan');
    	} else {
    		return redirect('/kontak/create')->with('error', 'Data gagal ditambahkan');
    	}
    }
    public function edit(Request $request, $id)
    {
        $data['kontak'] = \DB::table('kontak')->find($id);
        return view('kontak.form', $data);
    }
    public function update(Request $request, $id)
    {
        $rule = [
            'nama' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'pesan' => 'required',
        ];
        $this->validate($request, $rule);

        $input = $request->all();

        $kontak = \App\kontak::find($id);
        $status = $kontak->update($input);

        if ($status){
                return redirect('/kontak')->with('success', 'Data berhasil diubah');
            }else{
                return redirect('/kontak/create')->with('error', 'Data gagal diubah');
        }
    }
    public function destroy(Request $request, $id)
    {
        $kontak = \App\kontak::find($id);
        $status = $kontak->delete();

        if ($status){
                return redirect('/kontak')->with('success', 'Data berhasil dihapus');
            }else{
                return redirect('/kontak/create')->with('error', 'Data gagal dihapus');
        }
    }
    
    public function viewcustomer()
    {
        return view('kontak_customer');
    }
    public function viewadmin()
    {
        return view('kontak_admin');
    }
    public function viewcreatecustomer()
    {
        return view('kontak.form_customer');
    }
    public function viewkritik()
    {
        return view('kontak.form_kritik');
    }
    public function storecustomer(Request $request)
    {
        $rule = [
            'nama' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'pesan' => 'required',
        ];
        $this->validate($request, $rule);
        
        $input = $request->all();
        unset($input['_token']);
        $status = \DB::table('kontak')->insert($input);

        if ($status) {
            return redirect('/kontak_customer')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect('/kontak/create_customer')->with('error', 'Data gagal ditambahkan');
        }
    }
}
