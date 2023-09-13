@extends('layout.master')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Tambah Data Transaksi</h3>
</div>


<form method="POST" action="/transaksi/simpan">
	@csrf


<div class="container">
<div class="form-group">
            <label for="">Id Admin</label>
            <select name="id_admin" class="form-control">
                  <option>Silahkan Dipilih</option>
                  @foreach($admin as $admin)
                  <option value="{{$admin->id_admin}}">{{$admin->id_admin}}</option>
                  @endforeach
           </select>
      </div>

      <div class="form-group">
            <label for="">Transaksi Tanggal</label>
            <input type="date" name="transaksi_tanggal" class="form-control" id="" placeholder=" ">
      </div>

      <div class="form-group">
            <label for="">Transaksi Nonota</label>
            <input type="text" name="transaksi_nonota" class="form-control" id="" placeholder=" ">
      </div>

      <div class="form-group">
            <label for="">Transaksi Status</label>
            <input type="text" name="transaksi_status" class="form-control" id="" placeholder=" ">
      </div>



      <div class="form-group">
            <label for="">Id Transaksi</label>
            <input type="text" name="id_transaksi" class="form-control" id="" placeholder=" ">
      </div>

      <div class="form-group">
            <label for="">Id Barang</label>
           <select name="id_barang" class="form-control">
                  <option>Silahkan Dipilih</option>
                  @foreach($barang as $row)
                  <option value="{{$row->id_barang}}">{{$row->id_barang}}</option>
                  @endforeach
           </select>
      </div>
<button class="btn btn-success add-more mt-2" type="button">
              <i class="fas fa-plus"></i>
    </button>

      <div class="form-group">
            <label for="">Transaksi Jenis</label>
            <input type="text" name="transaksi_jenis" class="form-control" id="" placeholder=" ">
      </div>

      <div class="form-group">
            <label for="">Transaksi Harga</label>
            <input type="text" name="transaksi_harga" class="form-control" id="" placeholder=" ">
      </div>
      <div class="form-group">
            <label for="">Transaksi Jumlah</label>
            <input type="text" name="transaksi_jumlah" class="form-control" id="" placeholder=" ">
      </div>

      <div class="form-group">
            <label for="">Transaksi Detail Status</label>
            <input type="text" name="transaksi_detail_status" class="form-control" id="" placeholder=" ">
      </div>


      <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Simpan">
      </div>
  </div>

</div>
</form>
</div>
</div>


@endsection
