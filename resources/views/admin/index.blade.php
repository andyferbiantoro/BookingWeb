@extends('layouts.admin.admin_dashboard_app')

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
                
                <h1>DASHBOARD ADMINnn</h1><br>
                <a href="{{route('dashboard-admin')}}"><button class="btn btn-primary">Reload</button></a><br>

                <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                      <label>List Periode</label>
                     <table  class="table table-bordered table-striped">
                      <thead> 
                        <tr>
                          <th>No</th>
                          <th>Periode</th>
                          <th>Aksi</th>
                          
                        </tr>
                      </thead>

                      <tbody>
                        @php
                          $no = 1;
                        @endphp
                         @foreach($list_periode as $periode)
                        <tr>
                          <td>{{$no++}}</td>
                          <td>{{date("j F Y", strtotime($periode->periode))}}</td>
                          <td><a href="{{route('admin-deleteperiode',$periode->id)}}"><button class="btn btn-danger">Hapus</button></a></td>
                         
                        </tr>
                         @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                </div>
                <div class="col-lg-1"></div>
                </div><br><br>



                 <div class="row">
                  <div class="col-lg-1"></div>
                  <div class="col-lg-10">
                    <form action="{{url('admin_filter_booking')}}" method="GET">
                      <label> Cari Tanggal</label>
                      <div class="form-row">
                          <div class="col-sm-4">
                              <input type="date" class="form-control" name="filter_booking" placeholder="Masukkan Kode Booking" value="{{ old('filter_booking') }}">
                          </div>
                          <div class="col">
                              <input type="submit" class="btn btn-primary" value="CARI">
                          </div>
                      </div>
                  </form>

                  <br>
                  <div class="card">
                    <div class="card-body">
                      <label>List Booking</label>
                     <table id="example1" class="table table-bordered table-striped">
                      <thead> 
                        <tr>
                          <th>No</th>
                          <th>Kode</th>
                          <th>Nama Paket</th>
                          <th>Pemesan</th>
                          <th>Tanggal Booking</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>

                      <tbody>
                        @php
                          $no = 1;
                        @endphp
                         @foreach($list_booking as $book)
                        <tr>
                          <td>{{$no++}}</td>
                          <td>{{$book->kode_booking}}</td>
                          <td>{{$book->Paket->nama_paket}}</td>
                          <td>{{$book->infopemesan->name}}</td>
                          <td>{{date("j F Y", strtotime($book->tanggal_booking))}}</td>
                          <td><a href="{{route('admin-detail',$book->id)}}"><button class="btn btn-success">Detail</button></a></td>
                        </tr>
                         @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>

                  </div>
                  <div class="col-lg-1"></div>
                </div>
           </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
         
    <!-- /.content -->
  </div>
  @endsection