@extends('user.bagian')

<!-- header-->
@section('header')
<!-- navbar-->


@endsection


<!--content-->
@section('content')

<div class="row justify-content-center">
  <form class="border border-light p-5" action="{{route('admin.login')}}" method="post">
      {{ csrf_field() }}
    <p class="h5 small mb-4 text-center">KERJA KERJA KERJA</p>
    <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus>
    @if ($errors->has('username'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('username') }}</strong>
        </span>
    @endif
        <br>
    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
    @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif

    <button class="btn btn-warning btn-block my-4" type="submit">Sign in</button>


</form>
</div>

@endsection



@section('footer')

@endsection


