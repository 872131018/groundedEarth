@extends('app')

@section('content')
<?php /*
* Primary Page Layout
*/ ?>
<div class="section">
  <div class="container">
    <div class="row">
      <div class="twelve columns">
        <form method="POST" action="<?php echo getenv("APP_URL") ?>index.php/auth/register">
            {!! csrf_field() !!}
            <div>
                Name
                <input type="text" name="name" value="{{ old('name') }}">
            </div>
            <div>
                Email
                <input type="email" name="email" value="{{ old('email') }}">
            </div>
            <div>
                Password
                <input type="password" name="password">
            </div>
            <div>
                Confirm Password
                <input type="password" name="password_confirmation">
            </div>
            <div>
                <button type="submit">Register</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
