<html>
<div>
    <h1>List Tas</h1>
    <p>We are working to build a future of shared success.</p>
</div>
<div>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama </th>
            <th>Pcs</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $dataku)
        <tr>
            <td>{{ $dataku['id']}}</td>
            <td>{{ $dataku['nama barang']}}</td>
            <td>{{ $dataku['pcs']}}</td>
            <td>{{ $dataku['harga']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
</html>
