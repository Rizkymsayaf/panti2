@extends('dashboard.layouts.main')
@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">






                <div class="table-responsive col-lg-8">
                    <a href="/dashboard/pesan" class="btn btn-success">  <span data-feather="arrow-left"></span>kembali ke pesan</a>
                    <form action="/dashboard/pesan/{{ $pesan->id }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin')"><span data-feather="x-circle"></span>Delete</button>
                    </form>


             <table>
                 <tr>
                     <td>Nama:</td>
                     <td>{{ $pesan->nama }}</td>
                 </tr>
                 <tr>
                     <td>
                         Email:
                     </td>
                     <td>{{ $pesan->email }}</td>
                 </tr>
                 <tr>
                     <td>Pesan:</td>
                     <td>{{ $pesan->pesan }}</td>
                 </tr>

             </table>


        </div>
    </div>
</div>
@endsection
