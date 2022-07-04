@extends ('layouts.main')

@section('container')
<h1 class="text-center">Saleum teuka</h1>
<div class="row">
    
    <div class="col-3 offset-5">
       
        <h3>{{ $name }}</h3>
        <p>{{ $email }}</p>
        <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="{{ asset('img/Aceh.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Mie Aceh</h5>
            <p class="card-text">Satu varian yang paling eksotis adalah bila dipadankan dengan kepiting. Nikmat betul bukan? Sampai ke sela-sela kita akan mengejar dagingnya. Tapi kali ini Chef ingin berbagi versi lebih simpelnya dan menggunakan daging tenderloin yang empuk dan juicy. Cara pembuatannya sendiri terbilang mudah, hanya saja kamu harus mempersiapkan berbagai bumbu-bumbu dasarnya. Sedikit potong-potong, iris-iris, dan membuat acar; maka selebihnya mie Aceh goreng ini hanya perlu dibumbui dan dimasak hingga matang. .</p>
            <a href="#" class="btn btn-primary">MANGAT THAT</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="{{ asset('img/ayam tangkap.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Ayam tangkap</h5>
            <p class="card-text">Berkat bantuan Bango Bumbu Bacem Ayam Goreng, maka kita sudah punya marinasi untuk ayam yang lezat. Hanya tinggal tambahkan gula merah, daun jeruk, serai, serta berbagai bumbu halus ke dalam panci. Masak hingga empuk dan bumbu meresap.

                Selanjutnya adalah tahap yang menjadikan Ayam Tangkap unik, yaitu adanya kehadiran rempah-rempah yang digoreng. Di tahap ini kita akan menggoreng cabai hijau, daun pandan, daun kunyit, serta daun kari. Yang terakhir ini wajib hadir karena hidangan ini membutuhkan daun kari yang cukup banyak khususnya saat presentasi nanti. Setelah selesai, goreng ayam dengan menggunakan minyak rempah yang sama dan terakhir, sajikan semuanya bersama-sama.
                
                Idealnya, ayam goreng perlu tertutupi oleh kerumunan daun kari, atau yang lazim disebut orang Aceh sebagai daun temurui. Karena tertutupi dan “terperangkap”, inilah sebab musabab orang sana menyebutnya sebagai Ayam Tangkap. Sajikan bersama nasi hangat dan lengkap sudah kenikmatan bersantap dengan keluarga hari ini! .</p>
            <a href="#" class="btn btn-primary">TERLAGI LAGI TERLOM LOM</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="{{ asset('img/kuah plik.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Kuah plik</h5>
            <p class="card-text">100 gram kacang panjang
                100 gram daun melinjo
                100 gram buah melinjo
                100 gram terong hijau
                2 buah terong ungu
                1 buah labu siam
                200 gram udang kecil2
                2 L santan
                200 gram pliek u / patarana
                Bahan tambahan :
                2 siung bawang merah 2 batang sereh (geprek)
                1 batang kecombarang (potong kecil2)
                5 lembar daun jeruk purut (cincang halus)
                2 batang daun temurui / daun kari
                5 buah cabe hijau (potong serong)
                Bumbu halus :
                5 siung bawang merah
                1 siung bawang putih
                10 buah cabe rawit
                1/2 sdt ketumbar
                1/4 sdt lada
                1 ruas jahe
                1 ruas kunyit
                6 buah asam sunti
                secukupnya garam.</p>
            <a href="#" class="btn btn-primary">HANA MANGAT PULANG PENG</a>
          </div>
</div>


@endsection