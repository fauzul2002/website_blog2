@extends('layouts.main')
@section('container')
<h1 class="text-center mb-3">Saleum teuka </h1>
<div style="background-color: primary" class="row mt-4">
  <div class="col-6">
    <img class="pt-3" style="width: 450px; height: 350px;" src="{{ asset('img/2.jpg')}} " alt="">
  </div>
  <div class="col-6 text-center">
    <h3 class="mt-4 pt-4">Terimong Genaseh</h3>
    <p>
      Atas kunjungan bapak gebernur idaman rakyat di bumoe aceh, 
      dalam rangka menghadiri festival Aceh culture yang diadakan oleh dinas pariwisata ACEH  </p>
  </div>
  
  <div class="col-6 text-center mb-4">
     <h3 class="mt-4 pt-4">Terimong Genaseh</h3>
    <p>
      Atas kunjungan Ibu kementrian pariwisata di bumoe aceh, 
      dalam rangka menghadiri festival Aceh culture yang diadakan oleh dinas pariwisata ACEH
       </p>
  </div>
  <div class="col-6">
   
      <img class="mb-3 ms-4" style="width: 450px; height: 350px;" src="{{ asset('img/1.jpg')}} " alt="">
  </div>
</div>
  <h1 class="text-center">Kuliner aceh</h1>
  <div class="row justify-content-md-center mt-5">
    <div class="col-md-3">
      <div class="card">
        <img class="card-img-top" src="{{ asset('img/Aceh.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Mie Aceh</h5>
          <p class="card-text">Makanan wajib yang harus dicicIpi ketika berkunjung ke Aceh , Perpaduan bumbu aceh ditambah ke mie dengan tekstur lembut siap menggoyang lidah anda ketika mencicipinya .</p>
          <a href="#" class="btn btn-primary">ACEH SNACK</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <img class="card-img-top" src="{{ asset('img/ayam tangkap.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Ayam tangkap</h5>
          <p class="card-text">Perpaduan ayam kampung dengan bumbu khas aceh siap menemani teman makan malam anda ketika berkunjung ke aceh .</p>
          <a href="#" class="btn btn-primary">ACEH FOOD</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <img class="card-img-top" src="{{ asset('img/kuah plik.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Kuah plik</h5>
          <p class="card-text">Bumbu rahasia aceh ditambah dengan sayuran dan melinjo membuat syarat wajib makanan yang harus dicicipi ketika berkunjung ke Aceh.</p>
          <a href="#" class="btn btn-primary">TASTE ACEH</a>
        </div>
      </div>
    </div>
  </div>
  @endsection
