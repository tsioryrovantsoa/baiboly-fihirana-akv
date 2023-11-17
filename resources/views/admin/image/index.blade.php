@extends('admin.layout.layout')

@section('title', 'Image')

@section('content')
    <div class="row row-cards">
        @foreach ($images as $image)
            <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                    <a href="#" class="d-block"><img src="{{ $image->fichierURL() }}" class="card-img-top"></a>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <div>{{ $image->titre }}</div>
                                <div class="text-muted">{{ $image->description }} -
                                    {{ $image->updated_at->isoFormat('DD MMM YYYY HH:mm:ss') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
