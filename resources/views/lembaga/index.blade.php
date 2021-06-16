@extends('layouts.pemesan.pemesan_lembaga_app')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          


        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              
              <div class="card-body">
                
                <h1>List Lembaga</h1><br>

               
               <div class="row">
                @foreach($lembaga as $lembaga)
                  <div class="col-lg-3">
                    <div class="card" style="width: 15rem; background: #212F3D ">
                      <br>
                      <span class="avatar text-center">
                     <span class="avatar text-center">
                                <img src="{{asset('uploads/logo_lembaga/'.$lembaga->image)}}" alt="image" width="210px" height="210px" style="border-radius: 5%; background: white ">
                          </span>
                      <div class="card-body">
                        <div class="text-center">
                         
                          <p><h5 style="font-weight: bold;color: white">{{$lembaga->nama_lembaga}}</h5></p>
                        </div>  
                          <h5 style="color: #3498DB; font-weight: bold">Alamat : {{$lembaga->alamat}}</h5>
                          <a href="{{ route('list-paket-lembaga',$lembaga->id) }}" class="btn btn-primary">Lihat Paket</a>
                          <!-- <a href="{{route('superadmin-deletelembaga',$lembaga->id)}}" class="btn btn-danger">Hapus</a> -->
                          
                        </div>
                      </div>
                    </div>

                  @endforeach
               
              
            </div>
            <!-- /.card -->

          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
         
    <!-- /.content -->
  </div>
 @endsection