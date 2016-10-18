@extends('layouts.cms.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>
        <form action="{{ url('/admin/content') }}" method="POST" role="form" class="form-horizontal">
          <div class="form-group">
            <label for="name" class="control-label col-sm-2">Name</label>
            <div class="col-sm-8">
             <input type="text" name="name" class="form-control">
            </div>
            <div class="col-sm-2"></div>
          </div>
          <div class="form-group">
            <label for="copy" class="control-label col-sm-2">Copy</label>
            <div class="col-sm-8">
              <input type="textbox" name="copy" class="form-control">
            </div>
            <div class="col-sm-2"></div>
          </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
              <button type="button" class="btn btn-success" data-delegate="content_add">Add Copy</button>
            </div>
        </form>
        <div class="panel-body">
          Content Blocks:
          <table class="table table-striped">
            <thead>
              <th>Name</th>
              <th>Copy</th>
              <th>Edit</th>
              <th>Delete</th>
            </thead>
            <tbody>
              @foreach ($contents as $content)
                <tr>
                  <td data-field="name">{{ $content->name }}</td>
                  <td data-field="copy">{{ $content->copy }}</td>
                  <td>
                    <button type="button" class="btn btn-primary" data-delegate="content_edit" data-id="{{$content->id}}">Edit</button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-danger" data-delegate="content_delete" data-id="{{$content->id}}">Delete</button>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
