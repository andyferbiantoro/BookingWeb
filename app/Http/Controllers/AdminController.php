<?php

namespace App\Http\Controllers;

use Auth; //untuk auth
use App\User;
use App\Paket;
use App\Booking;
use App\Admin;
use App\Lembaga;
use App\PeriodeBooking;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //

     public function index(){
        $list_booking = Booking::where('status_booking','Sukses')->where('id_lembaga',Auth::user()->id_lembaga)->with('infopemesan')->with('Paket')->orderBy('id', 'DESC')->get();   

        $info_paket = Paket::where('id_lembaga',Auth::user()->id_lembaga)->get();
        $list_periode = PeriodeBooking::where('id_lembaga',Auth::user()->id_lembaga)->orderBy('id','DESC')->get();

    	return view('admin.index',compact('list_booking','info_paket','list_periode'));
    }

    public function tambah_periode(Request $request)
    {

        $tambahperiode = new PeriodeBooking();

       
		$tambahperiode->id_lembaga  = $request->input('id_lembaga');
		$tambahperiode->periode  = $request->input('periode');
		
		

	   	$tambahperiode->save();
       
        return redirect('/admin');
    }


    //fungsi untuk filter booking berdasarkan tanggal
    public function filter_booking(Request $request){
        $cari = $request->filter_booking;

        $list_booking = Booking::where('status_booking','Sukses')->where('id_lembaga',Auth::user()->id_lembaga)->where('tanggal_booking',$cari)->with('infopemesan')->with('Paket')->orderBy('id', 'DESC')->paginate(10);   

        $info_paket = Paket::where('id_lembaga',Auth::user()->id_lembaga)->get();


        return view('admin.index',compact('list_booking','info_paket'));
    }




    //Detail Booking
    public function detail_booking($id){//$id mengambil id lembaga

        $detail_booking = Booking::where('status_booking','Sukses')->where('id',$id)->with('infopemesan')->with('Paket')->get();
        return view('admin.detail_booking',compact('detail_booking'));
    }



    public function infobooking(){
    	$Infobooking = Booking::where('id','0')->get();//kondisi awal sebelum kode booking dicari, yaitu menampilkan data yang tidak ada di database agar kondisi awal kosong

    	
    	return view('admin.info_booking',compact('Infobooking'));
    }


    // fungsi untuk mencari informasi booking sesuai dengan kode
    public function carikode(Request $request){
       
        $cari = $request->carikode;

    	 // proses pencarian data booking sesuai dengan kode yang dimasukkan
		$Infobooking = Booking::where('status_booking','Sukses')->where('id_lembaga',Auth::user()->id_lembaga)->where('kode_booking',$cari)->with('infopemesan')->with('Paket')->get();
    
	    $infopemesan = User::where('role','pemesan')->get();
	    $Paket = Paket::all();

        return view('admin.info_booking',compact('Infobooking'));
    }


     public function add_profil(Request $request){
        
        $Tambah_profil = new Admin();

        $Tambah_profil->nama_admin = $request->input('nama_admin');
        $Tambah_profil->id_lembaga = $request->input('id_lembaga');
        $Tambah_profil->id_user = $request->input('id_user');
        
        
        $Tambah_profil->save();
       
        return redirect('/paket-tambahpaket');

    }



    // public function tampil_booking(){

    //     $tampil_booking = Booking::where('status_booking','Sukses')->where('id_lembaga',Auth::user()->id_lembaga)->with('infopemesan')->with('Paket')->orderBy('id', 'DESC')->get();

    //     $infopemesan = User::where('role','pemesan')->get();
    //     $Paket = Paket::all();

    //      return view('admin.info_booking',compact('tampil_booking'));

    //         }


    public function destroyperiode($id){
       
         $PeriodeBooking = PeriodeBooking::findOrFail($id);
         
         $PeriodeBooking->delete();
        
         alert()->success('Data Berhasil Dihapus');
         return redirect()->back();

    }
    
}
