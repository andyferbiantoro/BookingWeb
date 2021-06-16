@extends('layouts.pemesan.pemesan_status_booking_app')

@section('content')

  <div class="content-wrapper">
   
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
                
                <h1>Menunggu Pembayaran</h1>
                <br><br>
                @foreach($statusbooking as $status)
                <div class="row">
                  <div class="col-lg-6">
                      <div class="card-body p-0">

                          <table class="table table-striped">
                                <tr>
                                  <th>Nama Paket </th>
                                  <td>{{$status->Paket->nama_paket}}</td>
                                </tr> 

                                <tr>
                                  <th>Durasi Paket </th>
                                  <td>{{$status->Paket->durasi_paket}}</td>
                                </tr> 

                                <tr>
                                  <th>Biaya Paket </th>
                                  <td>Rp. <?=number_format($status->Paket->biaya_paket, 0, ".", ".")?>,00</td>
                                </tr> 

                                <tr>
                                  <th>Lembaga </th>
                                  <td>{{$status->Lembaga->nama_lembaga}}</td>
                                </tr> 

                                <tr>
                                  <th>Tanggal Booking </th>
                                  <td>{{$status->tanggal_booking}}</td>
                                </tr>    

                                <tr>
                                  <th>Periode Booking </th>
                                  <td>{{$status->periode_booking}}</td>
                                </tr>         

                                <tr>
                                  <th>Status Booking</th>
                                  <td>{{$status->status_booking}}</td>
                                </tr>    

                          </table><br>
                          <a href="{{route('pemesan-deletebooking',$status->id)}}"><button class="btn btn-danger">Batalkan Booking</button></a>
                          <a href="{{$status->payment_url}}"> <button class="btn btn-primary">Bayar Sekarang</button></a><br><br>
                      </div><br>
                    </div>
                  </div>     
                @endforeach

               
              </div>
            </div>
            <!-- /.card -->

          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
         
    <!-- /.content -->
  </div>
 @endsection

 @section('js')

 <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-F421Dz6DFrrx5GpJ"></script>

        <script type="text/javascript">
            document.getElementById('pay-button').onclick = function(){
                // SnapToken acquired from previous step
                snap.pay('#', {
                    // Optional
                    onSuccess: function(result){
                        document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    },
                    // Optional
                    onPending: function(result){
                        document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    },
                    // Optional
                    onError: function(result){
                      document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    }
                });
            };
        </script>

@endsection