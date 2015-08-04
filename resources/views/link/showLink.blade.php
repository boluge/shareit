@extends('../layout')

@section('title')
    ShareItBaby
@endsection

@section('subtitle')
    <h2>Show a Link</h2>
@endsection

@section('content')
    <h1>{{ $link->name }}</h1>
    <p>{{ $link->description }}</p>
    <p><a class="btn btn-info" taget="_blank" href="{{ $link->link }}">{{ $link->name }}</a></p>
    <p><a class="btn btn-danger" href="{{ route('deleteLink', ['slug' => $link->slug ]) }}">Delete</a></p>
@endsection
