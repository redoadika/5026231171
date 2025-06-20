@extends('template')

@section('content')
    <h3>Data Nilai</h3>

    <br/>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilai as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nomorinduksiswa }}</td>
                <td>{{ $item->nilaiangka }}</td>
                <td>{{ $item->sks }}</td>
                <td>
                    @if ($item->nilaiangka >= 81) A
                    @elseif ($item->nilaiangka >= 61 && $item->nilaiangka <= 80) B
                    @elseif ($item->nilaiangka >= 41 && $item->nilaiangka <= 60) C
                    @else ($item->nilaiangka <= 40) D
                    @endif
                </td>
                <td>
                    {{ number_format($item->nilaiangka * $item->sks) }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="/eas/tambah" class="btn btn-primary"> Tambah Data</a>

@endsection
