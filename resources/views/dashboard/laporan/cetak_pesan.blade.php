@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data pesan</h1>
  </div>

  @if (session()->has('success'))
  <div class="alert alert-success  col-lg-8" role="alert">

{{ session('success') }}
  </div>

  @endif

  <div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Pesan</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pesan as $p)

          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{  $p->email}}</td>
            <td>{{  $p->pesan}}</td>

            </td>

        </tr>

        @endforeach


        <script type="text/javascript">
            window.print();

        </script>
      </tbody>
    </table>
  </div>
@endsection
