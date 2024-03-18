@extends('tabelpengajuan.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="card border-0 shadow rounded">
        <div class="card-body">
            <a href="{{ route('tabelpengajuan.create') }}" class="btn btn-md btn-success mb-3">Tambah Pengajuan</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal Pengajuan</th>
                        <th scope="col">Tujuan Perjalanan</th>
                        <th scope="col">Lama Perjalanan</th>
                        <th scope="col">Dokumen</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                @forelse ($tabelpengajuan as $tabel)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $tabel->tanggal_pengajuan }}</td>
                        <td>{{ $tabel->tujuan_perjalanan }}</td>
                        <td>{{ $tabel->lama_perjalanan }}</td>
                        <td>{{ $tabel->dokumen }}</td>
                        <td>{{ $tabel->status }}</td>
                    </tr>
                @empty

                @endforelse
            </table>
        </div>
    </div>

</div>

@endsection
