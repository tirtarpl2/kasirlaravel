@extends('layout.master')

@section('content')
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">TAMPIL DATA TRANSAKSI DETAIL</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
          
              <hr>
                <table id="example1" class="table table-bordered table-striped">
          
                  <thead>
                  
                  <tr>
                    <th>NO</th>
                    <th>ID TRANSAKSI DTL</th>
                    <th>ID TRANSAKSI</th>
                    <th>ID BARANG</th>
                    <th>TRANSAKSI JENIS</th>
                    <th>TRANSAKSI HARGA</th>
                    <th>TRANSAKSI JUMLAH</th>
                    <th>DETAIL STATUS</th>
                    <th class="col-2">ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
       @foreach ($transaksi_detail as $transaksi_detail)
                  <tr>
                    <td class=" p-2 text-info">{{ $loop->iteration}}</td>
                    <td class=" p-2 text-info">{{ $transaksi_detail->id_transaksi_detail}}</td>     
                    <td class=" p-2 text-info">{{ $transaksi_detail->id_transaksi}}</td>
                    <td class=" p-2 text-info">{{ $transaksi_detail->barang_nama}}</td>
                    <td class=" p-2 text-info">{{ $transaksi_detail->transaksi_jenis}}</td>
                    <td class=" p-2 text-info">{{ $transaksi_detail->transaksi_harga}}</td>
                    <td class=" p-2 text-info">{{ $transaksi_detail->transaksi_jumlah}}</td>
                    <td class=" p-2 text-info">{{ $transaksi_detail->transaksi_detail_status}}</td>
                    <td class=" p-2 text-info">
                        <button type="button" class="btn btn-danger"><a href="/transaksi_detail/hapus/{{ $transaksi_detail->id}}" >HAPUS</a></button>
                        <button type="button" class="btn btn-warning"><a href="/transaksi_detail/ubah/{{ $transaksi_detail->id}}">EDIT</a></button>
                       
                    </td>
                    </tr>
                  </tbody>
         @endforeach
                </table>
              </div>
              </div>
              </div>
              </div>
              <!-- /.card-body -->
@endsection