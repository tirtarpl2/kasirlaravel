@extends('layout.master')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Ubah Data Transaksi Detail</h3>
</div>

<form method="POST" action="/transaksi_detail/update/{{$transaksi_detail->id}}">
	@csrf
      @method('put')
   <div class="card-body">
      <div class="form-group">
            <label for="">Id Transaksi Detail</label>
            <input type="text" value="{{$transaksi_detail->id_transaksi_detail}}
" name="id_transaksi_detail" class="form-control" id="" placeholder=" ">
      </div>

      <div class="form-group">
            <label for="">Id Transaksi</label>
            <input type="text" value="{{$transaksi_detail->id_transaksi}}
" name="id_transaksi" class="form-control" id="" placeholder=" ">
      </div>

      <div class="form-group">
            <label for="">Id Barang</label>
           <select name="id_barang" class="form-control">
                  <option>Silahkan Dipilih</option>
                  @foreach($barang as $barang)
                  <option value="{{$barang->id_barang}}">{{$barang->barang_nama}}</option>
                  @endforeach
           </select>
      </div>

      <div class="form-group">
            <label for="">Transaksi Jenis</label>
            <input type="text" value="{{$transaksi_detail->transaksi_jenis}}" name="transaksi_jenis" class="form-control" id="" placeholder=" ">
      </div>

      <div class="form-group">
            <label for="">Transaksi Harga</label>
            <input type="text" value="{{$transaksi_detail->transaksi_harga}}" name="transaksi_harga" class="form-control" id="" placeholder=" ">
      </div>

      <div class="form-group">
            <label for="">Transaksi Jumlah</label>
            <input type="text" value="{{$transaksi_detail->transaksi_jumlah}}" name="transaksi_jumlah" class="form-control" id="" placeholder=" ">
      </div>

      <div class="form-group">
            <label for="">Transaksi Detail Status</label>
            <input type="text" value="{{$transaksi_detail->transaksi_detail_status}}" name="transaksi_detail_status" class="form-control" id="" placeholder=" ">
      </div>

      <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Simpan">
      </div>
  </div>
</form>
</div>


@endsection