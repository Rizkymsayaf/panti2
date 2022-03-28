@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Kebutuhan</h1>
  </div>

  @if (session()->has('success'))
  <div class="alert alert-success  col-lg-8" role="alert">

{{ session('success') }}
  </div>

  @endif

  <div class="table-responsive col-lg-8">
      <a href="/dashboard/kebutuhan/create" class="btn btn-primary mb-3">Buat Data </a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Harga Barang</th>
          <th scope="col">Jumlah Barang</th>
        </tr>
      </thead>
      <tbody>
        <?php $jum = 0; ?>
        <?php $harga = 0; ?>

        @foreach ($kebutuhan as $k)

        <?php $jum += $k->jumlah_barang; ?>
        <?php $harga += $k->harga_barang; ?>

          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $k->nama_barang }}</td>
            <td>{{  $k->jumlah_barang}}</td>
            <td>{{  $k->harga_barang}}</td>
            <td>{{  $k->nama}}</td>


        </tr>

        @endforeach
        <?php $total = $jum * $harga; ?>
        <tr>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>
                  <b>total</b>
                {{ $total }}
            </td>

        </tr>
         <?php $nom = 0; ?>

         @foreach ($donasi as $d )
          <?php $nom += $d->nominal; ?>
         @endforeach
         {{  $d= $donasi->sum('nominal') }}
         {{  $k= $kebutuhan->sum('harga_barang') }}
                <tr>
            <td>
                  <b>Sisa donasi</b>
               {{     $sisa = $d - $k }}
            </td>
        </tr>



      </tbody>
    </table>

    <script type="text/javascript">
        window.print();

    </script>
  </div>
@endsection
