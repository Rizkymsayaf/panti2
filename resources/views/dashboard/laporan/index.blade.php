@extends('dashboard.layouts.main')
@section('container')


<div class="table-responsive col-lg-8">
    <div class="form-group">
        <p align="center"><b>Laporan</b></p>
<table class="static" align="center" rules="all"  style="width: 95%;">
<tr>
    <div class="card-header">
    <div class="card-tools">
    <td>
    <a href="/dashboard/laporan/cetak_anak" class="btn btn-primary mb-3">Data Anak <i class="fas fa-print"></i> </a>
</td>
<td>
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Post</a>
</td>
</tr>
</table>
    </div>
</div>
</div>
</div>




@endsection
