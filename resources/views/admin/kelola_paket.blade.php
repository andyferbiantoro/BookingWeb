@extends('layouts.admin.admin_kelola_paket_app')

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
                
                <h1>KELOLA PAKET</h1>

                <a href="{{ route('paket-tambahpaket') }}"><button class="btn btn-success">Tambah Paket</button></a>
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaltambahperiode">
                  Tambah Periode
                </button><br><br>

                <div class="row">
                @foreach($Daftarpaket as $paket)
                  <div class="col-lg-3">
                    <div class="card" style="width: 15rem; background: #212F3D ">
                      <br>
                      <span class="avatar text-center">
                          <img src="{{asset('uploads/imagepaket/'.$paket->image)}}" alt="image" width="210px" height="210px" style="border-radius: 5%; background: white ">
                       </span>
                      <div class="card-body">
                        <div class="text-center">
                          <p><h5 style="font-weight: bold;color: white">{{$paket->nama_paket}}</h5></p>
                        </div>  
                          <h5 style="color: #3498DB; font-weight: bold">Rp. <?=number_format($paket->biaya_paket, 0, ".", ".")?>,00</h5>
                          <h6 style="color: white">Stok paket : {{$paket->stok}}</h6>
                          <h6 style="color: white">Sold : {{$paket->sold}}</h6>
                          <a href="{{route('paket-editpaket',$paket->id)}}" class="btn btn-primary">Update</a>
                          <a href="{{route('paket-deletepaket',$paket->id)}}" class="btn btn-danger">Hapus Paket</a>
                        </div>
                      </div>
                    </div>

                  @endforeach
               
              </div>

            <div class="modal fade" id="modaltambahperiode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Lembaga</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                      
                         <form method="post" action="{{url('admin-tambahperiode')}}" enctype="multipart/form-data">
                           
                                   
                        {{csrf_field()}}
                            <div class="form-group">
                                <label for="periode">Periode</label>
                                <input type="date" class="form-control" id="periode" name="periode" required=""/>
                            </div>

                            <div class="form-group">
                              <input type="hidden" class="form-control" id="id_lembaga" name="id_lembaga" value="{{ Auth::user()->id_lembaga }}" />
                            </div>
                           

                             <button class="btn btn-primary" type="Submit">Tambah Periode</button>
                        </form>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                       
                      </div>
                    </div>
                  </div>
                </div>

           <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
         
    <!-- /.content -->
  </div>
 @endsection