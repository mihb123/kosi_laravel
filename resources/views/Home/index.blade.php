@extends('layouts.app')
@section('content')
<!-- kosiCarousel -->
@include('components.home.carousel')

<!-- mainCategory -->
<section class="mainCategory container-lg my-5">
  @php
  $count = count($categories);
  $count = $count < 4 ? $count : 3; @endphp <div class="row gy-4 row-cols-md-{{ $count }} ">
    @foreach($categories as $category)

    <div class="col">
      <div class="card text-dark" style=" border: none;">
        <div class="image__inner">
          <a href="{{ url('product?category_id=' . $category->id) }}">
            <img src="image/Product-IMG-{{$category->id}}_360x.webp" class="card-img" alt="abc">
          </a>
        </div>

        <div class="card-img-overlay">
          <h3 class="card-title" style="font-weight: 600; font-size:34px;">
            <?= $category->name ?>
          </h3>
          <a href="{{ url('product?category_id=' . $category->id) }}" class="text-decoration-underline fw-medium">View
            all</a>
        </div>
      </div>
    </div>
    @endforeach
    </div>
</section>

<!-- show Product -->
<section class="suggestProduct container-lg ">
  <div class="text-center textPart">
    <h2>Top Picks For You</h2>
    <p>Find a bright ideal to suit your taste with our great selection of suspension, floor and table lights.
    </p>
  </div>

  <div class="row gy-4 ">
    @foreach($products as $product)
    @include('components.product')
    @endforeach

    <div class="text-center mb-5">
      <a href="?c=product" type="button" class="btn btn-dark">View More</a>
    </div>
  </div>
</section>

<!-- newArrival -->
<section class="newArrival container text-center">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/h1_banner-3_1296x.webp" class="d-block w-100" alt="banner 2">
      <div class="carousel-caption content__inner text-black align-content-center">
        <h2>NEW ARRIVALS</h2>
        <p>lassical Decors</p>
        <a href="?c=product" type="button" class="btn btn-outline-dark">Order now</a>
      </div>
    </div>
  </div>
</section>

<!-- Blog -->
<!-- Blog Section -->
<section class="py-5">
  <div class="container ">
    <!-- Section Title -->
    <div class="text-center">
      <h2 class="fw-bold">Our Blogs</h2>
      <p class="text-muted">Find a bright idea to suit your taste with our great selection</p>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      @foreach($blogs as $blog)
      <!-- Blog Card -->
      <div class="col">
        <div class="card border-0 ">
          <a href="?c=blog&a=detail&id={{ $blog->id}}" class="image__inner">
            <img src="image/blog-{{ $blog->id}}_540x.webp" class="card-img-top " alt="Blog Image {{ $blog->id}}">
          </a>

          <div class="card-body ps-0">
            <p class="text-muted mb-2">
              <i class="bi bi-person"></i>
              <?= $blog->author ?>-
              <i class="bi bi-calendar"></i>
              <?= date('d-m-y', strtotime($blog->created_at)) ?>
            </p>
            <a href="">
              <h6 class="card-title">
                {{ $blog->title }}
              </h6>
            </a>
          </div>
        </div>
      </div>
      @endforeach

    </div>
    <div class="text-center">
      <a href="?c=blog" type="button" class="btn btn-dark">View All Post</a>
    </div>
  </div>
</section>

<!-- followUs -->
<section class="followUs container text-center mb-5">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/h1_banner-4.webp" class="d-block w-100" alt="banner 2">
      <div class="carousel-caption content__inner text-black align-content-center" style="top: 0.5rem;">
        <h2>Our Instagram</h2>
        <p>Follow our latest updates and trends on Instagram</p>
        <a type="button" class="btn btn-outline-dark">Follow Us</a>
      </div>
    </div>
  </div>
</section>
@endsection
