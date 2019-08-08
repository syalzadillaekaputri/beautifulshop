<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Cart;
use App\produk;
use App\Transaksi;
use App\TransaksiDetail;
use Carbon\Carbon;
class TransaksiController extends Controller
{
    public function checkout(Request $request){
        $uid = Auth::user()->id;
        $cart = Cart::where('user_id',$uid)->get();
        if($cart->count() > 0){
            $input['user_id'] = $uid;
            $input['total'] = str_replace(',','',$request->total);
            $input['tanggal'] = Carbon::now()->format('Y-m-d');
            $transaksi = Transaksi::create($input);
            if($transaksi){
                $detail['transaksi_id'] = $transaksi->id;
                foreach ($cart as $key => $c) {
                    $detail['product_id'] = $c->produk_id;
                    $detail['harga'] = $c->produk->harga_produk;
                    $detail['qty'] = $c->qty;
                    $detail['subtotal'] = $c->qty*$c->produk->harga_produk;
                    $status = TransaksiDetail::create($detail);
                }
            }
            if($status){
                Cart::where('user_id',$uid)->delete();
                return redirect('riwayat-transaksi')->with('success','Transaksi berhasil dibuat');
            }else{
                return redirect('cart')->with('error','Transaksi gagal dibuat');
            }
        }else{
            return redirect('cart')->with('error','Keranjang kosong');
        }
        
    }
    public function riwayat(){
        $uid = Auth::user()->id;
        $data['transaksi'] = Transaksi::where('user_id',$uid)->get(); 
        return view('riwayat',$data);
    }
    public function admin_transaksi(){
        $data['transaksi'] = Transaksi::all(); 
        return view('transaksi',$data);
    }
    public function riwayat_detail($id){
        $data['transaksi'] = Transaksi::find($id); 
        $data['detail'] = TransaksiDetail::with('transaksi')->where('transaksi_id',$id)->get(); 
        // dd($data);
        return view('riwayat-detail',$data);
    }
    public function bayar($id){
        $data['transaksi'] = Transaksi::find($id); 
        // dd($data);
        return view('bayar',$data);
    }
    public function upload_bukti(Request $request, $id){
        if($request->hasFile('file')){
            $transaksi = Transaksi::find($id);
            $uploadedFile = $request->file('file');        
            $path = $uploadedFile->store('public/files');
            $input = $request->all();
            $transaksi->bukti_image = str_replace('public/files/','',$path);
            $transaksi->status = 1;//nunggu konfirmasi penjual
            $status = $transaksi->save();
        }
        if($status){
            return redirect('riwayat-transaksi')->with('success','Bukti transaksi berhasil diupload');
        }else{
            return redirect('bayar/'.$id)->with('error','Bukti transaksi gagal diupload');
        }
    }
    public function konfirmasi($id){
        $transaksi = Transaksi::find($id);
        $transaksi->status = 2;//dikonfirmasi
        $status = $transaksi->save();
        if($status){
            return redirect('transaksi')->with('success','Transaksi berhasil dikonfirmasi');
        }else{
            return redirect('transaksi')->with('error','Transaksi gagal dikonfirmasi');
        }
    }
    public function riwayatcustomer(){
        $uid = Auth::user()->id;
        $data['transaksi'] = Transaksi::where('user_id',$uid)->get(); 
        return view('riwayat_customer',$data);
    }
    public function customer_transaksi(){
        $data['transaksi'] = Transaksi::all(); 
        return view('transaksi_customer',$data);
    }
    public function riwayat_detail_customer($id){
        $data['transaksi'] = Transaksi::find($id); 
        $data['detail'] = TransaksiDetail::with('transaksi')->where('transaksi_id',$id)->get(); 
        // dd($data);
        return view('riwayat-detail_customer',$data);
    }
}
