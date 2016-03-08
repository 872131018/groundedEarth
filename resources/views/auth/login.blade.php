@extends('app')

@section('content')
<?php /*
* Primary Page Layout
*/ ?>
<div class="section">
  <div class="container">
    <div class="row">
      <div class="twelve columns">
        <form method="POST" action="<?php echo getenv("APP_URL") ?>index.php/auth/login">
            {!! csrf_field() !!}
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ old('email') }}">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <input type="checkbox" name="remember">
                <label for="remember">Remember Me</label>
            </div>
            <div>
                <button type="submit">Login</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
