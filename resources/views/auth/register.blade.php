@extends('../layout')

@section('subtitle')
    <h2>Register</h2>
@endsection

@section('content')
    <form method="POST" action="{{ route('postregister') }}">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input class="form-control" type="text" name="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input class="form-control" type="email" name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input class="form-control" type="password" name="password">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Confirm Password</label>
            <input class="form-control" type="password" name="password_confirmation">
        </div>
        <div class="form-group">
            <button class="btn btn-info" type="submit">Register</button>
        </div>
    </form>
    @endsection