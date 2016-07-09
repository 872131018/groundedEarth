@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">Dashboard</div>
          <div class="panel-body">
            Inquiries:
            <table class="table table-striped">
              <thead>
                <th>Email</th>
                <th>Name</th>
                <th>City</th>
                <th>State</th>
              </thead>
              <tbody>
                @foreach ($inquiries as $inquiry)
                  <tr>
                    <td data-field="name">{{ $inquiry->email }}</td>
                    <td data-field="type">{{ $inquiry->name }}</td>
                    <td data-field="link">{{ $inquiry->city }}</td>
                    <td data-field="image">{{ $inquiry->state }}</td>
                    <td>
                      <button type="button" class="btn btn-primary" data-delegate="inquiry_edit" data-id="{{$inquiry->id}}">Edit</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-danger" data-delegate="inquiry_delete" data-id="{{$inquiry->id}}">Delete</button>
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
