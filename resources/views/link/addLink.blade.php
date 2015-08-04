@extends('../layout')

@section('title')
  ShareItBaby
@endsection

@section('subtitle')
  <h2>{{ isset($link->slug) ? 'Add' : 'Edit' }} a Link</h2>
@endsection

@section('content')
  <form action="{{ isset($link->slug) ? route('editLink',['slug' => $link->slug ]) : route('createLink') }}" method="post">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Set a name" value="{{ $link->name or '' }}">
    </div>
    <div class="form-group">
      <label for="link">Link</label>
      <input type="url" class="form-control" name="link" id="link" placeholder="Set the link" value="{{ $link->link or '' }}">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" name="description" rows="8" cols="40">{{ $link->description or '' }}</textarea>
    </div>
    <input type="hidden" name="slug" value="{{ $link->slug or '' }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <button type="submit" name="button" class="btn btn-success">Send the link</button>
    </div>
  </form>
@endsection
