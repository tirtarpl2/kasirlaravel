@extends('layout.master')

@section('content')
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">TAMPIL DATA TRANSAKSI</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="/transaksi/tambah" class="btn btn-primary">TAMBAH</a>
               
                <table id="example1" class="table table-bordered table-striped">
          
                  <thead>
                  
                  <tr>
                    <th>No</th>
                    <th>Id Transaksi</th>
                    <th>Id Admin</th>
                    <th>Transaksi Tanggal</th>
                    <th>Transaksi Nonota</th>
                    <th>Transaksi Status</th>
                    <th class="col-3">Action</th>
                  </tr>
                  </thead>
                  <tbody>
       @foreach ($transaksi as $transaksi)
                  <tr>
                    <td class=" p-2 text-info">{{ $loop->iteration}}</td>
                    <td class=" p-2 text-info">{{ $transaksi->id_transaksi}}</td>     
                    <td class=" p-2 text-info">{{ $transaksi->id_admin}}</td>
                    <td class=" p-2 text-info">{{ $transaksi->transaksi_tanggal}}</td>
                    <td class=" p-2 text-info">{{ $transaksi->transaksi_nonota}}</td>
                    <td class=" p-2 text-info">{{ $transaksi->transaksi_status}}</td>
                    <td class=" p-2 text-info">
                    <button type="button" class="btn btn-success"><a href="/transaksi_detail/detail/{{ $transaksi->id_transaksi}}">DETAIL</a></button>
                        <button type="button" class="btn btn-danger"><a href="/transaksi/hapus/{{ $transaksi->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg> HAPUS</a></button>
                        <button type="button" class="btn btn-warning"><a href="/transaksi/edit/{{ $transaksi->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg> EDIT</a></button>
                       
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