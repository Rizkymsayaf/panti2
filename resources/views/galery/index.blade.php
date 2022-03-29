@include('partials.header')

@extends('partials.navbarr')
@section('navbar')

<div class="container">
    <div class="row">
        @foreach ($galery as $g)

        <div class="col-md-4 mb-3">
            <div class="card">
              <div class="position-absolute  p-3 py-2 text-white" style="background-color: rgba(0,0,0,0.7)">

                <img src="{{ asset($g->image) }}" alt="{{ $g->image }}" class="img-fluid mt-3">

                <div class="card-body">
                    </small>
                  </p>
                </div>
              </div>
        </div>
           @endforeach
    </div>


@endsection
