@include('partials.header')

@extends('partials.navbarr')
@section('navbar')
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>KONTAK INFORMASI DAN LAYANAN</h2>
        <p>Untuk Informasi & Layanan, silahkan menghubungi kami di kontak berikut, Kirimkan pesan, saran dan komentar kepada kami :</p>
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Lokasi:</h4>
              <p>Dusun Nglawisan Desa Tamanagung Muntilan Kabupaten Magelang.</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>panti@gmail.com
              </p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Telepon:</h4>
              <p>0895372110392</p>
            </div>


            <iframe src="dhttps://www.google.com/maps/place/Panti+Asuhan+Yatim+Bani+Salam+Bandung/@13.282543,157.9315766,3z/data=!4m9!1m2!2m1!1spanti+asuhan!3m5!1s0x2e68e84c1cc5ee29:0xf9f02dfbf05d3268!8m2!3d-6.9634507!4d107.6384489!15sCgxwYW50aSBhc3VoYW5aDiIMcGFudGkgYXN1aGFukgEJb3JwaGFuYWdlmgEjQ2haRFNVaE5NRzluUzBWSlEwRm5TVU50Ym5JM2RHTlJFQUU?hl=id-ID" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="/pesan/create" method="post" role="form" class="php-email-form">
            @csrf
            <div class="row">
              <div class="form-group col-md-6">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="name" required>
              </div>
              <div class="form-group col-md-6 mt-3 mt-md-0">
                <label for="name">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <label for="pesan">Pesan</label>
              <textarea class="form-control" name="pesan" rows="10" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Pesanmu Berhasil Dikirimkan!</div>
            </div>
            <div class="text-center"><button type="submit">Kirim Pesan</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
  @endsection
