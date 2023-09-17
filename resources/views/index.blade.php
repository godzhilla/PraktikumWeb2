<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tgl. Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_buku as $buku)
            <tr>
                <td>{{$buku->id}}</td>
                <td>{{$buku->judul}}</td>
                <td>{{$buku->penulis}}</td>
                <td>{{"Rp ".number_format($buku->harga, 2, ',', '.')}}</td>
                <td>{{\Carbon\Carbon::parse($buku->tgl_tebot)->format('d/m/Y')}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p>Jumlah Data: {{ $jumlahData }}</p>
    <p>Total Harga Buku: {{ "Rp ".number_format($totalHarga, 2, ', ','.')}}</p>

</body>
</html>