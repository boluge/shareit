@extends('../layout')

@section('subtitle')
    <h2>Login</h2>
@endsection
@section('content')
    <form method="POST" action="{{ route('postlogin') }}">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input class="form-control" type="email" name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input class="form-control" type="password" name="password" id="password">
        </div>
        <div class="form-group">
            <input type="checkbox" name="remember"> Remember Me
        </div>
        <div class="form-group">
            <button class="btn btn-info" type="submit">Login</button>
        </div>
    </form>
@endsection