@extends('master')
@section('title')
Cart | HijabFest
@endsection
@section('style')
<link rel="stylesheet" type="text/css" href="/css/cart.css">
@endsection


@section('content_page')
 
<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
            <table class="table table-image">
          <thead>
            <tr id="header-cart">
              <th scope="col"></th>
              <th scope="col">Nama Produk</th>
              <th scope="col">Harga</th>
              <th scope="col">Qty</th>
              <th scope="col">Total</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="w-25">
                <img src="img/dummy1.png" class="img-fluid img-thumbnail" alt="product-cart">
              </td>
              <td>Nama Produk</td>
              <td>Rp0</td>
              <td class="qty"><input type="text" class="form-control" id="input1" value="1"></td>
              <td>Rp0</td>
              <td>
                <a href="#" class="btn btn-danger btn-sm">
                  <i class="fa fa-times"></i>
                </a>
              </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td><h5>Total: </h5></td>
              <td><span class="price text-success">Rp0</span></td>
              <td>
              </td>
            </tr>
          </tbody>
        </table> 
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                <a class="btn btn-block btn-light" href="/" role="button">Kembali Belanja</a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <a class="btn  btn-block btn-success" href="/checkout" role="button">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection