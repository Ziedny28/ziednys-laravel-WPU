@extends('layouts.mainlayout')

@section('container')
    <h1 class="text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name='category' value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name='author' value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name='search'
                        value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            @if ($posts[0]->image)
            <div style="max-height:350px; overflow:hidden">
                <img src="{{asset('storage/'.$posts[0]->image)}}" class="card-img-top"
            alt="$posts[0]->category->name">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
            alt="$posts[0]->category->name">
            @endif
            
            <div class="card-body text-center">
                <h5 class="card-title">
                    <h2><a href="/post/{{ $posts[0]->slug }}"
                            class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h2>
                </h5>
                <small>
                    <p>a post by <a href="/posts?author={{ $posts[0]->author->username }}"
                            class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a
                            href="/posts?category={{ $posts[0]->category->slug }}"
                            class='text-decoration-none'>{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}</p>
                </small>

                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <a href="/post/{{ $posts[0]->slug }}" class='btn btn-primary'>Read more</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $item)
                    <div class="col-md-4 mb-3">
                        <div class="card" style="width: 18rem;">
                            <div class="position-absolute px-3 py-2" style="background-color:rgba(0,0,0,0.7)">
                                <a href="/posts?category={{ $item->category->slug }}"
                                    class='text-decoration-none text-white'>{{ $item->category->name }}</a>
                            </div>
                            @if ($item->image)
                            <img src="{{asset('storage/'.$item->image)}}" class="card-img-top"
                                alt="{{ $item->category->name }}">
                            @else
                            <img src="https://source.unsplash.com/500x400?{{ $item->category->name }}" class="card-img-top"
                                alt="{{ $item->category->name }}">
                            @endif
                            <div class="card-body">
                                <a href="/post/{{ $item->slug }}" class=' text-black text-decoration-none'>
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                </a>

                                <small>
                                    <p>a post by <a href="/posts?author={{ $item->author->username }}"
                                            class="text-decoration-none">{{ $item->author->name }}</a>
                                        {{ $item->created_at->diffForHumans() }}</p>
                                </small>
                                <p class="card-text">{{ $item->excerpt }}</p>
                                <a href="/post/{{ $item->slug }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No Post Found</p>
    @endif

    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>

@endsection
