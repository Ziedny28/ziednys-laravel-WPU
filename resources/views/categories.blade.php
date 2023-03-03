@extends('layouts.mainlayout')

@section('container')
    <h1>this is a category page</h1>

    <div class="container">
        <div class="row">
            @foreach($categories as $item)
            <div class="col-md-4">
                <div class="card text-bg-dark">
                    <a href="/posts?category={{ $item->slug }}" class="text-white">
                        <img src="https://source.unsplash.com/500x500?{{ $item->name }}" class="card-img"
                            alt="{{ $item->name }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">
                                {{ $item->name }}</h5>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
