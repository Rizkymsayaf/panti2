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
      <a href="/dashboard/laporan/cetak_pesan" class="btn btn-success mb-3">Print </a>
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
            <td>
                <a href="{{route('pesan.show',$p->id)}}" class="badge bg-info"> <span data-feather="eye">show</a>
                    {{-- <a href="/dashboard/pesan/{{ $p->id }}/edit" class="badge bg-warning"> <span data-feather="edit"></span></a> --}}
                    <form action="/dashboard/pesan/{{ $p->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure')"><span data-feather="x-circle">delete</span></button>
                    </form>
            </td>
            </td>

        </tr>

        @endforeach



      </tbody>
    </table>
  </div>
@endsection
