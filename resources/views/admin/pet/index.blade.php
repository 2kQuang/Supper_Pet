@extends('layouts.admin')
@section('content_admin')
  @extends('layouts._sidebar')
  @section('content')
    <div class="header-content">
      <div class="btn-add"><a href="">Thêm</a></div>
    </div>
    <div class="body-content">
      <table class="table" >
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th colspan="2" scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse($Pets as $k => $v)
            <tr>
              <td>{{ $v['pet'] }}</td>
              <td><a href="">Update</a></td>
              <td><a href="">Delete</a></td>
            </tr>
          @empty
            <tr>
              <td colspan="3">No data <a href="">Thêm</a></td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
    <div class="footer-content">
      <div class="btn-add"><a href="">Thêm</a></div>
    </div>
  @endsection
@endsection