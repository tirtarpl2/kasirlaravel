<div class="container">
    <h3 class="text-center">PRINT</h3>
    <table>
<thead>
    <tr>
        <th scope="col">ID TRANSAKSI</th>
        <th scope="col">ID ADMIN</th>
        <th scope="col">TRANSAKSI TGL</th>
        <th scope="col">TRANSAKSI NOTA</th>
        <th scope="col">TRANSAKSI STTS</th>
    </tr>
</thead>
<tbody>
    @foreach($cetak as $cetak)
    <tr>
        <td>{{$cetak->id_transaksi}}</td>
        <td>{{$cetak->id_admin}}</td>
        <td>{{$cetak->transaksi_tanggal}}</td>
        <td>{{$cetak->transaksi_nonota}}</td>
        <td>{{$cetak->transaksi_status}}</td>
    </tr>
    @endforeach
    <script type="text/javascript">
        window.print();
        </script>
</tbody>
    </table>