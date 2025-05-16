@extends('Templates.main')

@section('content')
<div class="container">
    <h1>Blogs</h1>
    <div class="row">
        @foreach($blogs as $blog)
        <div class="col-md-4 mb-3">
            <div class="card border shadow-sm">
                <div class="card-body">
                    <div class="card-title">
                        <h1 class="h4">{{ $blog['title'] }}</h1>
                    </div>
                    <p>{{ $blog['body'] }}</p>
                </div>
                @if($blog['status'] == 1)
                    <div class="card-footer bg-transparent border-0">
                        <a href="#" class="card-link">Card-Link</a>
                        <a href="#" class="card-link">Another Link</a>
                    </div>
                @else
                    <div class="card-footer bg-transparent border-0">
                        <a href="#" class="card-link">Card-Link</a>
                    </div>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection




