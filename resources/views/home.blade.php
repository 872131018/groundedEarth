  @extends('app')

  @section('content')
	<?php /*
	* Primary Page Layout
	*/ ?>
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="twelve columns">
          <ul>
            @foreach ($emails as $email)
              <li>{{ $email->email }}</li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
	<?php /*
	* Must load the external sources first
	*/ ?>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<?php /*
	* Then load the internal sources second
	*/ ?>
	<?php /*
	* Load the driver for execution
	*/ ?>
	<script type="text/javascript" src="{{ $base_url }}/js/splashDriver.js"></script>
  @endsection
