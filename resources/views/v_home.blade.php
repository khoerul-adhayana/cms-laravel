
@extends('layout.v_template')
@section('title','Home')

@section('content')
	<h1>Welcome To My Dashboard</h1>	

	<div class="container">
  <!-- kategori produk -->
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="text-center">Categories</h2>
    </div>
    <!-- kategori pertama -->
    <div class="col-md-3">
      <div class="card mb-2 shadow-sm">
        <a href="{{ URL::to('kategori/satu') }}">
          <img src="{{asset('/foto_products/ele.png') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
            <p class="card-text">Elektronik</p>
          </a>
        </div>
      </div>
    </div>
    <!-- kategori kedua -->
    <div class="col-md-3">
      <div class="card mb-2 shadow-sm">
        <a href="{{ URL::to('kategori/dua') }}">
          <img src="{{asset('/foto_products/wanita.jpg') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/dua') }}" class="text-decoration-none">
            <p class="card-text">Fashion wanita</p>
          </a>
        </div>
      </div>
    </div>
    <!-- kategori ketiga -->
    <div class="col-md-3">
      <div class="card mb-2 shadow-sm">
        <a href="{{ URL::to('kategori/tiga') }}">
          <img src="{{asset('/foto_products/pria.jpg') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/tiga') }}" class="text-decoration-none">
            <p class="card-text">Fashion Pria</p>
          </a>
        </div>
      </div>
    </div>
    <!-- kategori ketiga -->
     <div class="col-md-2">
      <div class="card mb-2 shadow-sm">
        <a href="{{ URL::to('kategori/empat') }}">
          <img src="{{asset('/foto_products/mam.png') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/empat') }}" class="text-decoration-none">
            <p class="card-text">Makanan</p>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- end kategori produk -->
    <!-- kategori pertama -->
    <div class="col-md-3">
      <div class="card mb-2 shadow-sm">
        <a href="{{ URL::to('kategori/satu') }}">
          <img src="{{asset('/foto_products/minum.jpg') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
            <p class="card-text">Minuman</p>
          </a>
        </div>
      </div>
    </div>
    <!-- kategori kedua -->
    <div class="col-md-3">
      <div class="card mb-2 shadow-sm">
        <a href="{{ URL::to('kategori/dua') }}">
          <img src="{{asset('/foto_products/bangunan.png') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/dua') }}" class="text-decoration-none">
            <p class="card-text">Bahan bangunan</p>
          </a>
        </div>
      </div>
    </div>
    <!-- kategori ketiga -->
    <div class="col-md-3">
      <div class="card mb-2 shadow-sm">
        <a href="{{ URL::to('kategori/tiga') }}">
          <img src="{{asset('/foto_products/tp.png') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/tiga') }}" class="text-decoration-none">
            <p class="card-text">Transportasi/otomotif</p>
          </a>
        </div>
      </div>
    </div>
    <!-- kategori ketiga -->
     <div class="col-md-3">
      <div class="card mb-2 shadow-sm">
        <a href="{{ URL::to('kategori/empat') }}">
          <img src="{{asset('/foto_products/ac.png') }}" alt="foto kategori" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('kategori/empat') }}" class="text-decoration-none">
            <p class="card-text">Aksesoris</p>
          </a>
        </div>
      </div>
    </div>

    <!-- produk Promo-->
  <div class="row mt-4">
    <div class="col col-md-12 col-sm-12 mb-4">
      <h2 class="text-center">Promo</h2>
    </div>
    <!-- produk pertama -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/satu') }}">
          <img src="{{asset('/storage/images/products/gl.jpg')}}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('produk/satu') }}" class="text-decoration-none">
            <p class="card-text">
              T-shirt Greenlight
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p>
                <del>Rp. 15.000,00</del>
                <br />
                Rp. 10.000,00
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- produk kedua -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/dua') }}">
          <img src="{{asset('/storage/images/products/gs.jpg')}}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('produk/dua') }}" class="text-decoration-none">
            <p class="card-text">
              Jam tangan G-shock
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p>
                <del>Rp. 15.000,00</del>
                <br />
                Rp. 10.000,00
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- produk ketiga -->
    <div class="col-md-4">
      <div class="card mb-4 shadow-sm">
        <a href="{{ URL::to('produk/tiga') }}">
          <img src="{{asset('/storage/images/products/tv.jpg')}}" alt="foto produk" class="card-img-top">
        </a>
        <div class="card-body">
          <a href="{{ URL::to('produk/tiga') }}" class="text-decoration-none">
            <p class="card-text">
              Tv
            </p>
          </a>
          <div class="row mt-4">
            <div class="col">
              <button class="btn btn-light">
                <i class="far fa-heart"></i>
              </button>
            </div>
            <div class="col-auto">
              <p>
                <del>Rp. 15.000,00</del>
                <br />
                Rp. 10.000,00
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end produk promo -->
  </div>
</div>


<marquee bgcolor="#9CBAC2" style="font-family: arial; font-size: 20px; color: #ffffff;">Welcome To My Dashboard</marquee>

@endsection
