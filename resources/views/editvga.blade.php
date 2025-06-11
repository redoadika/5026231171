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

    {{-- HAPUS @foreach($vga as $item) --}}
    <form action="/vga/update" method="post">
        {{ csrf_field() }}
        {{-- Sekarang langsung akses properti dari $vga --}}
        <input type="hidden" name="ID" value="{{ $vga->ID }}"> <br/>
        Merk VGA <input type="text" required="required" name="merkVGA" value="{{ $vga->merkVGA }}"> <br/>
        Harga <input type="number" required="required" name="hargaVGA" value="{{ $vga->hargaVGA }}"> <br/>
        Tersedia <select required="required" name="tersedia">
            <option value="1" {{ $vga->tersedia == 1 ? 'selected' : '' }}>Ya</option>
            <option value="0" {{ $vga->tersedia == 0 ? 'selected' : '' }}>Tidak</option>
        </select> <br/>
        Berat (kg) <input type="text" required="required" name="berat" value="{{ $vga->berat }}"> <br/>
        <input type="submit" value="Simpan Data">
    </form>
    {{-- HAPUS @endforeach --}}

</body>
</html>
