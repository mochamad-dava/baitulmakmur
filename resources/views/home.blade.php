@extends('layouts.main')

{{-- Jumbotron --}}
@section('container')
<section id="about">
  <div class="container">
      <div class="row text-center mb-3 py-5">
          <div class="col">
            
          </div>
      </div>
      <div class="row justify-content-center fs-5 text-left">
          <div class="col-md-6">
            <h1>Inilah Kami :)</h1>
            <p><b>Kuttab Baitul Makmur</b> adalah Lembaga Pendidikan Islam. Diselenggarakan untuk
              menyelaraskan tumbuh kembangnya anak sesuai dengan fitrah berasaskan Al Qur’an
              As-Sunnah.
            </p>
            <p><b>Dengan visi</b> mewujudkan pendidikan terbaik yang sesuai Fitrah berdasarkan tuntunan Quran
              dan Sunnah.</p>
            <a class="btn btn-primary" href="/about">Selengkapnya</a>
          </div>
          <div class="col-md-6">
            <img src="../img/icon_logo_1.png" alt="baitulmakmur" width="300" height="300">
          </div>
      </div>
  </div>
</section>
@endsection
{{-- Akhir Jumbotron --}}

{{-- About --}}
@section('container1')

@endsection
{{-- Akhir About --}}
