<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk', 'ProdukController@index');
Route::get('produk/create', 'ProdukController@create');
Route::post('produk', 'ProdukController@store');
Route::get('/produk/{id}/edit', 'ProdukController@edit');
Route::patch('/produk/{id}', 'ProdukController@update');
Route::delete('/produk/{id}', 'ProdukController@destroy');

Route::get('/kontak', 'KontakController@index');
Route::get('kontak/create', 'KontakController@create');
Route::post('kontak', 'KontakController@store');
Route::get('/kontak/{id}/edit', 'KontakController@edit');
Route::patch('/kontak/{id}', 'KontakController@update');
Route::delete('/kontak/{id}', 'KontakController@destroy');
Route::get('/kontak_customer', 'KontakController@viewcustomer');
Route::get('/kontak_customer', 'KontakController@viewcustomer');
Route::get('/kontak_admin', 'KontakController@viewadmin');
Route::post('kontak_customer', 'KontakController@storecustomer');
Route::get('/kontak/create_customer', 'KontakController@viewcreatecustomer');
Route::get('/kontak/create_kritik', 'KontakController@viewkritik');


Auth::routes();

Route::get('/home', function(){
    if(Auth::user()->akses == "Admin"){
        return redirect('/admin');
    }else{
        return redirect('shop');
    }
});
Route::get('/transaksi', 'TransaksiController@admin_transaksi');
Route::get('/transaksi_customer', 'TransaksiController@customer_transaksi');
Route::get('/konfirmasi/{id}', 'TransaksiController@konfirmasi');
Route::get('/customer', 'HomeController@view');
Route::get('/shop', 'HomeController@index');
Route::get('/cart', 'CartController@cart');
Route::get('/riwayat-transaksi', 'TransaksiController@riwayat');
Route::get('/riwayat-transaksi_customer', 'TransaksiController@riwayatcustomer');
Route::get('/riwayat-transaksi/detail/{id}', 'TransaksiController@riwayat_detail');
Route::get('/riwayat-transaksi/detail_customer/{id}', 'TransaksiController@riwayat_detail_customer');
Route::get('/bayar/{id}', 'TransaksiController@bayar');
Route::post('/upload-bukti/{id}', 'TransaksiController@upload_bukti');
Route::get('/add-cart/{id}', 'CartController@addcart');
Route::post('/cart-update', 'CartController@update');
Route::post('/checkout', 'TransaksiController@checkout');
Route::get('/admin', 'HomeController@admin');
Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('app/public/files/' . $filename);
    // dd($path);
    if (!\Illuminate\Support\Facades\File::exists($path)) {
        abort(404);
    }

    $file = \Illuminate\Support\Facades\File::get($path);
    $type = \Illuminate\Support\Facades\File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});