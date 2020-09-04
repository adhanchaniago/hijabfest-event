@extends('master')
@section('title')
Live Streaming | HijabFest
@endsection

@section('content_page')
 
<div class="container">
  <h2 id="section-title-livestream">Title Live Streaming </h2>
  <p>Description Live Streaming</p>
  <div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/CB52KElSBEk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</div>

<div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                  <a href="/productdetail"> 
                    <img class="card-img-top" src="img/dummy1.png" alt="Card image cap" >
                  </a>
                <div class="card-body">
                <a href="/productdetail"> 
                    <h4 class="card-text">Product Name</h4>
                  </a>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a class="btn btn-sm btn-outline-secondary" href="/cart" role="button">Add to Cart</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <a href="/productdetail"> 
                    <img class="card-img-top" src="img/dummy1.png" alt="Card image cap" >
                  </a>
                <div class="card-body">
                <a href="/productdetail"> 
                    <h4 class="card-text">Product Name</h4>
                  </a>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" >Add to cart</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <a href="/productdetail"> 
                    <img class="card-img-top" src="img/dummy1.png" alt="Card image cap" >
                  </a>
                <div class="card-body">
                <a href="/productdetail"> 
                    <h4 class="card-text">Product Name</h4>
                  </a>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" >Add to cart</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
@endsection