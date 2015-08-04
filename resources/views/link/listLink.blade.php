@extends('../layout')

@section('title')
  ShareItBaby
@endsection

@section('subtitle')
  <h2>List of Links</h2>
@endsection

@section('content')
    @foreach($links as $link)
        <h2>{{ $link->name }}</h2>
        <p>
            <a class="btn btn-success" href="{{ route('showLink', ['slug' => $link->slug ]) }}">Show more ...</a>
            <a class="btn btn-danger" href="{{ route('deleteLink', ['slug' => $link->slug ]) }}">Delete</a>
            <a class="btn btn-info" href="{{ route('editLink', ['slug' => $link->slug ]) }}">Edit</a>
        </p>
    @endforeach
    <!--$links->render()-->
@endsection
