@extends('course')

@section('content')
<div class="container">
    <h1>Daftar Kompetensi dengan Materi</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID Kompetensi</th>
                <th>Jenis Kompetensi</th>
                <th>Materi</th>
            </tr>
        </thead>
        <tbody>
    @if($kompetensiMateri && $kompetensiMateri->isNotEmpty())
        @foreach ($kompetensiMateri as $kompetensi)
            @foreach ($kompetensi->materials as $materi)
                <tr>
                    <td>{{ $kompetensi->id_kompetensi }}</td>
                    <td>{{ $kompetensi->kompetensi }}</td>
                    <td>{{ $materi->materi }}</td>
                </tr>
            @endforeach
        @endforeach
    @else
        <tr>
            <td colspan="3">Tidak ada data yang ditemukan.</td>
        </tr>
    @endif
</tbody>

    </table>
</div>
@endsection
