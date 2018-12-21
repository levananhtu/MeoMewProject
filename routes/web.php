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
//
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.TrangChu');
});

Route::get('thu', function(){
  return view('Admin.DanhSachNguoiDung');
});

Route::get('thu2', function(){
  return view('pages.DanhSach2');
});

// User
Route::get('DangKy', function(){
  return view('pages.DangKy');
}) -> name('DangKy');

Route::get('DangNhap', function(){
  return view('pages.DangNhap');
}) -> name('DangNhap');

Route::get('user/danhsach', function(){
  return view('Admin.DanhSachNguoiDung');
}) -> name('DanhSachNguoiDung');

// Page Truyen
Route::get('truyen/danhsach', function(){
  return view('pages.DanhSachTruyen');
}) -> name('DanhSachTruyen');

Route::get('truyen/idTruyen', function(){
  return view('Admin.Truyen');
}) -> name('Truyen');

Route::get('truyen/idTruyen/idChuong', function(){
  return view('pages.TrangTruyen');
}) -> name('TrangTruyen');

// Page Dich Gia
Route::get('dichgia/danhsach', function(){
  return view('pages.DanhSachDichGia');
}) -> name('DanhSachDichGia');

Route::get('dichgia/idDichGia', function(){
  return view('pages.DichGia');
}) -> name('DichGia');

//Page Tac Gia
Route::get('tacgia/danhsach', function(){
  return view('pages.DanhSachTacGia');
}) -> name('DanhSachTacGia');

Route::get('tacgia/idTacGia', function(){
  return view('pages.TacGia');
}) -> name('TacGia');

//Page The Loai
Route::get('theloai/danhsach', function(){
  return view('pages.DanhSachTheLoai');
}) -> name('DanhSachTheLoai');

Route::get('theloai/idTheLoai', function(){
  return view('pages.TheLoai');
}) -> name('TheLoai');
