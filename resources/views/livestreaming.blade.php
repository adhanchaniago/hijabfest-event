@extends('master')
@section('title')
Live Streaming | HijabFest
@endsection

@section('content_page')
 
<div class="container">
  <h2>Live Streaming </h2>
  <p>Produk Live Streaming</p>
  <div class="embed-responsive embed-responsive-16by9">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/CB52KElSBEk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</div>

<div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/dummy1.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="collapse" data-target="#collapseShowMerchant" aria-expanded="false" aria-controls="collapseShowMerchant">Action</button>
                    </div>
                  </div>
                </div>
                <div class="collapse" id="collapseShowMerchant">
                        <div class="card card-body">
                            <p>Whatsapp :<a href="https://www.whatsapp.com" target="_blank">08000123112213</a></p>
                            <br/>
                            <p>Instagram :<a href="https://www.instagram.com" target="_blank">@namakun</a></p>
                            <br/>
                            <p>Web :<a href="https://www.facebook.com" target="_blank">blabla.com</a></p>
                        </div>
		            </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="img/dummy1.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Action</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="img/dummy1.png" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Action</button>
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