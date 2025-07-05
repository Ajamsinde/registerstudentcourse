@extends('layouts.app')

@section('title', 'سوپاسی')

@section('content')

<!-- Hero Section -->
<section id="hero" class="hero section py-5">
  <div class="container">
    <div class="row gy-4 align-items-center">

      <!-- النص -->
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-duration="1000">

        <h1 class="mb-3">
          <i class="bi bi-check-circle-fill text-success me-2"></i>
          سوپاس بەرێز {{ $name }} 
        </h1>

        <p class="lead mb-3" data-aos="fade-right" data-aos-delay="200">
          ناڤێ تە هاتیە تومارکرن د خۆلا <span class="text-primary fw-bold">{{ $course }}</span> 
        </p>

        <p class="mb-4 text-muted" data-aos="fade-right" data-aos-delay="300">
          <i class="bi bi-telephone-fill text-success me-2"></i>
          ل نیزیك دێ پەیوەندی بتە کین بۆ ژمارە: <strong>{{ $phone }}</strong>.
        </p>

        <div data-aos="fade-up" data-aos-delay="400">
          <a href="{{ route('home') }}" class="btn btn-success px-4 py-2 rounded-pill">
            <i class="bi bi-house-door-fill me-1"></i>  زڤرە بۆ  بەپەرێ دەستپێكێ 
          </a>
        </div>

      </div>

      <!-- الصورة -->
      <div class="col-lg-6 order-1 order-lg-2 hero-img text-center" data-aos="zoom-in" data-aos-delay="100">
        <img src="{{ asset('assets/img/thankyou.png') }}" class="img-fluid animated" alt="Hero Image">
      </div>

    </div>
  </div>
</section>
<!-- /Hero Section -->

@endsection
