<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulir barang</title>
</head>
<body>
    <h2>formulir tambah inventaris kantor</h2>

    @if(session('success'))
    <div> {{session('success')}}</div>
    @endif

    <form action="{{route('item.store')}}" method="POST">
        @csrf
        <label>kode barang:</label>
        <input type="text" name="code" required placeholder="contoh: Inv-001">
        <br>

        <label>nama barang:</label>
        <input type="text" name="item_name" required placeholder="contoh: laptop">
        <br>

        <label>kategori:</label>
        <input type="text" name="category" required placeholder="contoh: barang elektronik">
        <br>

        <label>stok:</label>
        <input type="number" name="stock" required value="1">
        <br>

        <label>kondisi:</label>
        <select name="condition">
            <option value="baik">baik</option>
            <option value="rusak">rusak</option>
            <option value="rusak_parah">rusak parah</option>
</select>
        <br>

        <label>lokasi ruangan:</label>
        <input type="text" name="room_location" placeholder="contoh: ruang IT Lt 2">
        <br>

        <button type="submit">simpan barang:</button>
        <br>
</form>

</body>
</html>