<html>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama barang</th>
                <th>Pcs</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $dataku)
            <tr>
                <td>{{ $dataku['id'] }}</td>
                <td>{{ $dataku['nama barang'] }}</td>
                <td>{{ $dataku['pcs'] }}</td>
                <td>{{ $dataku['harga'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</html>

