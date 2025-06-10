@extends('template')

@section('content')
    <h3>Data Kartu Grafis (VGA)</h3>

    {{-- Tombol Tambah VGA Baru (sekarang tidak dalam komentar) --}}
    <a href="/vga/tambah" class="btn btn-primary"> + Tambah Data VGA Baru</a>

    <p>Cari Data VGA :</p>
    <form action="/vga/cari" method="GET">
        <input type="text" class="form-control" name="cari" placeholder="Cari VGA berdasarkan merk atau ID..">
        <br/>
        <input type="submit" class="btn btn-info" value="CARI">
    </form>

    <br/>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Merk VGA</th>
            <th>Harga</th>
            <th>Tersedia</th>
            <th>Berat (kg)</th>
            <th>Opsi</th>
        </tr>
        @foreach($vga as $item)
        <tr>
            <td>{{ $item->ID }}</td>
            <td>{{ $item->merkVGA }}</td>
            <td>Rp {{ number_format($item->hargaVGA, 0, ',', '.') }}</td>
            <td>{{ $item->tersedia ? 'Ya' : 'Tidak' }}</td>
            <td>{{ $item->berat }}</td>
            <td>
                {{-- Tombol edit/hapus (sekarang tidak dalam komentar) --}}
                <a href="/vga/edit/{{ $item->ID }}" class="btn btn-success">Edit</a>
                |
                <a href="/vga/hapus/{{ $item->ID }}" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    <br/>
    {{-- Link pagination (sekarang tidak dalam komentar) --}}
    {{ $vga->links() }}
@endsection
