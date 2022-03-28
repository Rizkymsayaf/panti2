@extends('dashboard.layouts.main')
@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">






                <div class="table-responsive col-lg-8">
                    <a href="/dashboard/anak" class="btn btn-success">  <span data-feather="arrow-left"></span>Kembali Ke Anak</a>
                    <a href="/dashboard/anak/{{ $anak->id }}/edit" class="btn btn-warning">  <span data-feather="edit"></span>Edit</a>
                    <form action="/dashboard/anak/{{ $anak->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Are You Sure')"><span data-feather="x-circle"></span>Hapus</button>
                    </form>

                    <div style="max-height:350px; overflow:hidden;">

                        <img src="{{ asset($anak->image) }}" alt="{{ $anak->image }}" class="img-fluid mt-3">
                    </div>

               <table>
                   <tr>
                       <td>Nama :</td>
                       <td>{{ $anak->nama }}</td>
                   </tr>
                   <tr>
                       <td>Umur :</td>
                       <td>{{ $anak->umur }}</td>
                   </tr>
                   <tr>
                       <td>Tanggal Lahir :</td>
                       <td>{{ $anak->tanggal_lahir }}</td>
                   </tr>
               </table>


        </div>
    </div>
</div>
@endsection
