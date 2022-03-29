@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Galery</h1>
  </div>
  <div class="col-lg-8">

      <form method="post" action="/dashboard/galery " class="mb-5" enctype="multipart/form-data">
        @csrf
            <div class="mb-3">
                <label for="image" class="form-label">foto</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('image') is-invalid @enderror " type="file" id="image"
                name="image" onchange="previewImage()">
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>

                @enderror
              </div>
        <button type="submit" class="btn btn-primary">Create</button>
      </form>
  </div>
  <script>
    function previewImage(){

    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.  img-preview');
    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.file[0]);

    oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
    }
    }
</script>
@endsection
