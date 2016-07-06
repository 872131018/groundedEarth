@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>
        <form action="{{ url('/files') }}" method="POST" id="dropzone" class="dropzone" role="form"></form>
        <div class="panel-body">
          Files:
          <div class="grid">
            @foreach ($files as $file)
              <div class="grid-item">
                <img src="{{ url($file) }}">
                <div class="circle" data-delegate="file_delete" data-name="{{ $file }}">Delete</div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
