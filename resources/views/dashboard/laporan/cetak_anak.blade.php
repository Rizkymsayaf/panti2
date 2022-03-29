

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
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
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Umur</th>
          <th scope="col">Tanggal Lahir</th>
        </tr>
      </thead>
      <body>
        @foreach ($anak as $a)

          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $a->nama }}</td>
            <td>{{  $a->umur}} Tahun</td>
            <td>{{  $a->tanggal_lahir}}</td>


            </td>

        </tr>

        @endforeach

 <script type="text/javascript">
     window.print();

 </script>

      </body>
    </table>
  </div>
