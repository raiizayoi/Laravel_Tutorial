@extends('frontend.layouts.master')

@section('title', 'Home')
@section('nav_about', 'active');

@section('content')

  <section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
                {!! $about->content !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
