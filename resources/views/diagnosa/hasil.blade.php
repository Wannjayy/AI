@extends('layout.index')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Diagnosa</h4>
                    <p class="card-description">Hasil Diagnosa</p>
                    <div>
                        @if (count($diagnosa) > 0)
                            @foreach ($diagnosa as $penyakit)
                                <p>- Anda Mengalami Penyakit {{ $penyakit }}</p>
                            @endforeach
                        @else
                            <p>- Tidak ada penyakit yang sesuai dengan gejala yang diberikan.</p>
                        @endif

                        <br>
                        <a href="{{ route('diagnosa.index') }}" class="btn btn-rounded btn-dark">Kembali ke Form Diagnosa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
