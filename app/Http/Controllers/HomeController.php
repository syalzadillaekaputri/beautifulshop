<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produk;
use App\User;
use App\Transaksi;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['produk'] = produk::orderBy('id','desc')->paginate(12);
        return view('home',$data);
    }
    public function admin()
    {
        if(Auth::user()->akses != "Admin"){
            abort(404);
        }
        $data['produk'] = produk::count();
        $data['customer'] = User::where('akses','!=','Admin')->count();
        $data['transaksi'] = Transaksi::count();
        return view('admin',$data);
    }
    public function view()
    {
        return view('customer');
    }
}
