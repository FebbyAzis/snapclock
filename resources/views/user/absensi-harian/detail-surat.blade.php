@extends('user.layout.app')
@section('content')
    <div class="container">
        <h2>...</h2>
        
        @if($isImage)
            <img src="{{ asset('storage/' . $file->surat_izin) }}" alt="" style="max-width: 100%">
        @else
            <!-- Tampilkan konten dokumen (PDF, Word, Excel, dll.) sesuai kebutuhan -->
            <a href="{{ asset('storage/' . $file->surat_izin) }}" target="_blank">Lihat Dokumen</a>
        @endif
    </div>
@endsection