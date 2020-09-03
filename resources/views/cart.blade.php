@extends('master')
@section('title')
Cart | HijabFest
@endsection

@section('content_page')
 
<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Produk</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Harga</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>Produk 1</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">Rp500.000</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                       
                     
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="text-right"><strong>Total Bayar</strong></td>
                            <td class="text-right"><strong>Rp500.000</strong></td>
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
                    <a class="btn  btn-block btn-success" href="#" role="button">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection