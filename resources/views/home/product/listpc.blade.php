@extends('home.layouts.homeview')
@section('title', "ListProduct")
@section('content')
    <div class="container" style="margin-top:15px">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <div class="boxmain">
                    <div class="tit-boxmain title-detail">
                            <a href="{{ route('user.home') }}">Trang chủ / </a><a href="" style="color:red">Laptop</a>
                    </div>
                    <div class="ct-boxmain row">
                        @foreach ($listpc as $key => $pc)
                            <div class="col-md-4 p5" style="margin-top:20px">
                                <div class="boxsp">
                                    <div class="imgsp">
                                        <a href=""><img class="imgproduct" src="{{ URL::to('/') }}/Image/product/pc/{{ $pc['image'] }}" style="height:190px"></a>
                                        {{-- <div class="img-label">
                                            <img src="home/images/hot.png">
                                        </div> --}}
                                    </div>
                                    <div class="namesp">
                                        <a href="">{{ $pc['name'] }}</a>
                                    </div>
                                    @if ($pc['price'] != $pc['promo_price'])
                                        <div class="pricesp"><span>Giá bán: </span>{{ number_format($pc['price'] ,0 ,'.' ,'.').'' }}&#8363;</div>
                                        <div class="pricesp-promo">Giá khuyến mãi:<span>{{ number_format($pc['promo_price'] ,0 ,'.' ,'.').'' }}&#8363;</span></div>
                                    @elseif($pc['price'] == $pc['promo_price'])
                                        <div class="pricesp-default"><span>Giá bán: </span>{{ number_format($pc['price'] ,0 ,'.' ,'.').'' }}&#8363;</div>
                                        <div class="pricesp"></div>
                                    @endif
                                    <div class="button-hd">
                                        {{-- <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a> --}}
                                        <a href="{{ route('user.detailProduct',['id' => $pc['id']]) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href="#" style="color:#2cc067;text-decoration:none;padding-left:15px">
                                                <span class="glyphicon glyphicon-ok"></span>
                                                Còn hàng
                                            </a>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <a href="#" style="color:red;text-decoration:none;padding-right:15px">
                                                <span class="glyphicon glyphicon-shopping-cart"></span>
                                                Giỏ hàng
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- {!! $paginate->links() !!} --}}
                </div>
            </div>
        </div>
    </div>
@endsection