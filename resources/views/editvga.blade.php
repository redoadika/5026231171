<!DOCTYPE html>
<html>
<head>
    <title>Edit Data VGA</title>
    {{-- Jika Anda punya CSS Bootstrap di template, mungkin perlu link di sini juga --}}
    {{-- <link rel="stylesheet" href="path/to/bootstrap.min.css"> --}}
</head>
<body>

    <h2>Edit Data Kartu Grafis (VGA)</h2>

    <a href="/vga"> Kembali</a>

    <br/>
    <br/>

    @foreach($vga as $item) {{-- Menggunakan $item karena Anda mengirim koleksi dari Controller --}}
    <form action="/vga/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="ID" value="{{ $item->ID }}"> <br/> {{-- Pastikan nama "ID" sesuai dengan kolom DB --}}
        Merk VGA <input type="text" required="required" name="merkVGA" value="{{ $item->merkVGA }}"> <br/>
        Harga <input type="number" required="required" name="hargaVGA" value="{{ $item->hargaVGA }}"> <br/>
        Tersedia <select required="required" name="tersedia">
            <option value="1" {{ $item->tersedia == 1 ? 'selected' : '' }}>Ya</option>
            <option value="0" {{ $item->tersedia == 0 ? 'selected' : '' }}>Tidak</option>
        </select> <br/>
        Berat (kg) <input type="text" required="required" name="berat" value="{{ $item->berat }}"> <br/>
        <input type="submit" value="Simpan Data">
    </form>
    @endforeach

</body>
</html>
