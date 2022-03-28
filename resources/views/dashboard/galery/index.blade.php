


@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Galery</h1>
  </div>

  @if (session()->has('success'))
  <div class="alert alert-success  col-lg-8" role="alert">

{{ session('success') }}
  </div>

  @endif

  <div class="table-responsive col-lg-8">
      <a href="/dashboard/galery/create" class="btn btn-primary mb-3">Create New </a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Image</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($galery as $g)

          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $g->image }}</td>
            <td>
                <a href="{{route('galery.show',$g->id)}}" class="badge bg-info"> <span data-feather="eye">show</a>
                    <a href="/dashboard/galery/{{ $g->id }}/edit" class="badge bg-warning"> <span data-feather="edit">edit</span></a>
                    <form action="/dashboard/galery/{{ $g->id }}" method="POST" class="d-inline">
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
