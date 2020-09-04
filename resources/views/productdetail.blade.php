@extends('master')
@section('title')
Product Detail | HijabFest
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/css/productdetail.css">
@endsection

@section('content_page')
<div id="container-product-detail" class="container">
  <div class="card">
    <div class="row">
      <aside class="col-sm-5 border-right">
      <article class="gallery-wrap"> 
        <div class="img-big-wrap">
          <div> <a href="#"><img src="img/dummy2.png"></a></div>
        </div> <!-- image-slider-product.// -->
            <div class="img-small-wrap">
              <div class="item-gallery"> <img src="img/dummy2.png"> </div>
              <div class="item-gallery"> <img src="img/dummy2.png"> </div>
              <div class="item-gallery"> <img src="img/dummy2.png"> </div>
              <div class="item-gallery"> <img src="img/dummy2.png"> </div>
            </div> 
        </article> 
      </aside>

      <aside class="col-sm-7">
        <article class="card-body p-5">
          <h3 class="title mb-3">Product Name</h3>

            <p class="price-detail-wrap"> 
             <span class="price h3 text-warning"> 
               <span class="currency">Rp</span><span class="num">500.000</span>
            </span> 
          </p> 

          <dl class="item-property">
            <dt>Description</dt>
            <dd><p>Here goes description consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco </p></dd>
          </dl>
          <dl class="param param-feature">
            <dt>Model Name</dt>
            <dd>12345611</dd>
          </dl>  
          <dl class="param param-feature">
            <dt>Color</dt>
            <dd>Black and white</dd>
          </dl> 

            <hr>
              <div class="row">
                <div class="col-sm-5">
                  <dl class="param param-inline">
                    <dt>Quantity: </dt>
                    <dd>
                      <select class="form-control form-control-sm" style="width:70px;">
                        <option> 1 </option>
                        <option> 2 </option>
                        <option> 3 </option>
                      </select>
                    </dd>
                  </dl>  
                </div> 

                <div class="col-sm-7">
                  <dl class="param param-inline">
                      <dt>Size: </dt>
                      <dd>
                        <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <span class="form-check-label">S</span>
                      </label>
                      <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <span class="form-check-label">M</span>
                      </label>
                      <label class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <span class="form-check-label">XL</span>
                      </label>
                      </dd>
                  </dl>  
                </div> 
              </div> 
              <hr>

              <a href="#" class="btn btn-lg btn-primary text-uppercase"> Beli Sekarang </a>
              <a href="#" class="btn btn-lg btn-outline-primary text-uppercase"> <i class="fas fa-shopping-cart"></i> Add to cart </a>
          </article> 
      </aside> 
    </div> 
  </div> 
</div> <!-- end container -->

@endsection