@extends('home.layouts.homeview')
@section('title', "Home")
@section('content')

    <section id="featured">
        <div class="hidden-xs col-sm-4 col-md-3">
            <div class="boxleft">
                <div class="titboxl">
                    <i class="fa fa-bars fa-x2 fa-lg" aria-hidden="true"></i>
                    <span>Danh mục sản phẩm</span>
                </div>
                <div class="ctboxleft">
                    <ul class="mnboxl">
                        @foreach ($lstCate as $cate)
                        <li>
                                <a href="">{{ $cate['type'] }}</a>
                                <i class="fa fa-angle-right" aria-hidden="true"></i>

                                    <ul class="mnboxl_1">
                                        @foreach ($lstName as $name)
                                            @if($cate['id'] == $name['id_type'])
                                                <li><a href="">{{ $name['name_cate'] }}</a></li>
                                            @endif
                                        @endforeach
                                    </ul>

                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-9">
            <div class="slider-wrapper theme-default">
                <div id="slider" class="nivoSlider">
                    <a href=""><img src="home/images/acb.jpg" alt="" /></a>
                    <a href=""><img src="home/images/abc.jpg" alt="" /></a>
                </div>
            </div>
        </div>
        <div class="banner clearfix">
            <div class="col-xs-12 col-sm-6">

            </div>
            <div class="col-xs-12 col-sm-6">

            </div>
        </div>
    </section>
    <section id="main" class="mt-4">
        <div id="left" class="col-xs-12 col-sm-4 col-md-3">
            <div class="boxleft hidden-xs">
                <div class="titboxl">
                    <i class="fa fa-share fa-x2 fa-lg" aria-hidden="true"></i>
                    <span>Sản phẩm hot</span>
                </div>
                <div class="ctboxleft">
                    <div class="boxspl">
                        <div class="col-xs-4 p0">
                            <a href=""><img src="home/images/img1.jpg" alt=""></a>
                        </div>
                        <div class="col-xs-8 p5">
                            <div class="tit-boxspl">
                                <a href="">Tiêu đề sản phẩm, sản phẩm sản</a>
                            </div>
                            <div class="price-boxspl">399.000 Đ</div>
                        </div>
                    </div>
                    <div class="boxspl">
                        <div class="col-xs-4 p0">
                            <a href=""><img src="home/images/img1.jpg" alt=""></a>
                        </div>
                        <div class="col-xs-8 p5">
                            <div class="tit-boxspl">
                                <a href="">Tiêu đề sản phẩm, sản phẩm sản</a>
                            </div>
                            <div class="price-boxspl">399.000 Đ</div>
                        </div>
                    </div>
                    <div class="boxspl">
                        <div class="col-xs-4 p0">
                            <a href=""><img src="home/images/img1.jpg" alt=""></a>
                        </div>
                        <div class="col-xs-8 p5">
                            <div class="tit-boxspl">
                                <a href="">Tiêu đề sản phẩm, sản phẩm sản</a>
                            </div>
                            <div class="price-boxspl">399.000 Đ</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="boxleft hidden-xs">
                <div class="titboxl">
                    <i class="fa fa-random fa-x2 fa-lg" aria-hidden="true"></i>
                    <span>Sản phẩm bán chạy</span>
                </div>
                <div class="ctboxleft">
                    <div class="boxspl">
                        <div class="col-xs-4 p0">
                            <a href=""><img src="home/images/img1.jpg" alt=""></a>
                        </div>
                        <div class="col-xs-8 p5">
                            <div class="tit-boxspl">
                                <a href="">Tiêu đề sản phẩm, sản phẩm sản</a>
                            </div>
                            <div class="price-boxspl">399.000 Đ</div>
                        </div>
                    </div>
                    <div class="boxspl">
                        <div class="col-xs-4 p0">
                            <a href=""><img src="home/images/img1.jpg" alt=""></a>
                        </div>
                        <div class="col-xs-8 p5">
                            <div class="tit-boxspl">
                                <a href="">Tiêu đề sản phẩm, sản phẩm sản</a>
                            </div>
                            <div class="price-boxspl">399.000 Đ</div>
                        </div>
                    </div>
                    <div class="boxspl">
                        <div class="col-xs-4 p0">
                            <a href=""><img src="home/images/img1.jpg" alt=""></a>
                        </div>
                        <div class="col-xs-8 p5">
                            <div class="tit-boxspl">
                                <a href="">Tiêu đề sản phẩm, sản phẩm sản</a>
                            </div>
                            <div class="price-boxspl">399.000 Đ</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="boxleft hidden-xs">
                <div class="titboxl">
                    <i class="fa fa-rss-square fa-x2 fa-lg" aria-hidden="true"></i>
                    <span>Tin tức</span>
                </div>
                <div class="ctboxleft">
                    <div id="slider-tintuc" class="owl-carousel">
                        <div class="item tintucl">
                            <a href=""><img src="home/images/pcgaming.jpg"></a>
                            <h3><a href="">5 loa di động đáng chú ý có giá dưới 1 triệu đồng</a></h3>
                            <p>Không ai muốn nghe nhạc qua chiếc loa nhỏ và rè của smartphone, đó là lý do ngày càng nhiều người bỏ tiền mua loa di động. Loa di...</p>
                        </div>
                        <div class="item tintucl">
                            <a href=""><img src="home/images/pcgaming.jpg"></a>
                            <h3><a href="">5 loa di động đáng chú ý có giá dưới 1 triệu đồng</a></h3>
                            <p>Không ai muốn nghe nhạc qua chiếc loa nhỏ và rè của smartphone, đó là lý do ngày càng nhiều người bỏ tiền mua loa di động. Loa di...</p>
                        </div>
                        <div class="item tintucl">
                            <a href=""><img src="home/images/pcgaming.jpg"></a>
                            <h3><a href="">5 loa di động đáng chú ý có giá dưới 1 triệu đồng</a></h3>
                            <p>Không ai muốn nghe nhạc qua chiếc loa nhỏ và rè của smartphone, đó là lý do ngày càng nhiều người bỏ tiền mua loa di động. Loa di...</p>
                        </div>
                        <div class="item tintucl">
                            <a href=""><img src="home/images/pcgaming.jpg"></a>
                            <h3><a href="">5 loa di động đáng chú ý có giá dưới 1 triệu đồng</a></h3>
                            <p>Không ai muốn nghe nhạc qua chiếc loa nhỏ và rè của smartphone, đó là lý do ngày càng nhiều người bỏ tiền mua loa di động. Loa di...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="maincontent" class="col-xs-12 col-sm-8 col-md-9">
            <div class="boxmain spmoi">
                <div class="tit-boxmain">
                    <h3><span>Laptop Mới</span></h3>
                </div>
                <div class="ct-boxmain">
                    <div class="row">
                        <div id="spmoi" class="owl-carousel">
                            @foreach ($lstHotProduct as $hotPr)
                                <div class="item">
                                    <div class="boxsp">
                                        <div class="imgsp">
                                            <a href=""><img class="imgproduct" src="{{ URL::to('/') }}/Image/product/laptop/{{ $hotPr['image'] }}" style="height:190px"></a>
                                            <div class="img-label">
                                                <img src="home/images/hot.png">
                                            </div>
                                        </div>
                                        <div class="namesp">
                                            <a href="">{{ $hotPr['name'] }}</a>
                                        </div>
                                        <div class="pricesp"><span>Giá bán: </span>{{ number_format($hotPr['price'] ,0 ,'.' ,'.').' đ' }}</div>
                                        <div class="pricesp-promo">Giảm giá:<span>{{ number_format($hotPr['price'] ,0 ,'.' ,'.').' đ' }}</span></div>
                                        <div class="button-hd">
                                            <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                            <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="boxmain">
                <div class="tit-boxmain">
                    <h3><span>Linh phụ kiện Iphone</span></h3>
                </div>
                <div class="ct-boxmain row m0">
                    <div class="col-xs-6 col-sm-4 col-md-3 p5">
                        <div class="boxsp">
                            <div class="imgsp">
                                <a href=""><img class="imgproduct" src="home/images/img1.jpg"></a>
                                <div class="img-label">
                                    <img src="home/images/hot.png">
                                </div>
                            </div>
                            <div class="namesp">
                                <a href="">SoundMAGIC PL30+</a>
                            </div>
                            <div class="pricesp">499.000 Đ</div>
                            <div class="button-hd">
                                <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 p5">
                        <div class="boxsp">
                            <div class="imgsp">
                                <a href=""><img class="imgproduct" src="home/images/img1.jpg"></a>
                                <div class="img-label">
                                    <img src="home/images/hot.png">
                                </div>
                            </div>
                            <div class="namesp">
                                <a href="">SoundMAGIC PL30+</a>
                            </div>
                            <div class="pricesp">499.000 Đ</div>
                            <div class="button-hd">
                                <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 p5">
                        <div class="boxsp">
                            <div class="imgsp">
                                <a href=""><img class="imgproduct" src="home/images/img1.jpg"></a>
                                <div class="img-label">
                                    <img src="home/images/hot.png">
                                </div>
                            </div>
                            <div class="namesp">
                                <a href="">SoundMAGIC PL30+</a>
                            </div>
                            <div class="pricesp">499.000 Đ</div>
                            <div class="button-hd">
                                <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 p5">
                        <div class="boxsp">
                            <div class="imgsp">
                                <a href=""><img class="imgproduct" src="home/images/img1.jpg"></a>
                                <div class="img-label">
                                    <img src="home/images/hot.png">
                                </div>
                            </div>
                            <div class="namesp">
                                <a href="">SoundMAGIC PL30+</a>
                            </div>
                            <div class="pricesp">499.000 Đ</div>
                            <div class="button-hd">
                                <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="boxmain">
                <div class="tit-boxmain">
                    <h3><span>Linh phụ kiện Iphone</span></h3>
                </div>
                <div class="ct-boxmain row m0">
                    <div class="col-xs-6 col-sm-4 col-md-3 p5">
                        <div class="boxsp">
                            <div class="imgsp">
                                <a href=""><img class="imgproduct" src="home/images/img1.jpg"></a>
                                <div class="img-label">
                                    <img src="home/images/hot.png">
                                </div>
                            </div>
                            <div class="namesp">
                                <a href="">SoundMAGIC PL30+</a>
                            </div>
                            <div class="pricesp">499.000 Đ</div>
                            <div class="button-hd">
                                <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 p5">
                        <div class="boxsp">
                            <div class="imgsp">
                                <a href=""><img class="imgproduct" src="home/images/img1.jpg"></a>
                                <div class="img-label">
                                    <img src="home/images/hot.png">
                                </div>
                            </div>
                            <div class="namesp">
                                <a href="">SoundMAGIC PL30+</a>
                            </div>
                            <div class="pricesp">499.000 Đ</div>
                            <div class="button-hd">
                                <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 p5">
                        <div class="boxsp">
                            <div class="imgsp">
                                <a href=""><img class="imgproduct" src="home/images/img1.jpg"></a>
                                <div class="img-label">
                                    <img src="home/images/hot.png">
                                </div>
                            </div>
                            <div class="namesp">
                                <a href="">SoundMAGIC PL30+</a>
                            </div>
                            <div class="pricesp">499.000 Đ</div>
                            <div class="button-hd">
                                <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 p5">
                        <div class="boxsp">
                            <div class="imgsp">
                                <a href=""><img class="imgproduct" src="home/images/img1.jpg"></a>
                                <div class="img-label">
                                    <img src="home/images/hot.png">
                                </div>
                            </div>
                            <div class="namesp">
                                <a href="">SoundMAGIC PL30+</a>
                            </div>
                            <div class="pricesp">499.000 Đ</div>
                            <div class="button-hd">
                                <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="boxmain">
                <div class="tit-boxmain">
                    <h3><span>Linh phụ kiện Iphone</span></h3>
                </div>
                <div class="ct-boxmain row m0">
                    <div class="col-xs-6 col-sm-4 col-md-3 p5">
                        <div class="boxsp">
                            <div class="imgsp">
                                <a href=""><img class="imgproduct" src="home/images/img1.jpg"></a>
                                <div class="img-label">
                                    <img src="home/images/hot.png">
                                </div>
                            </div>
                            <div class="namesp">
                                <a href="">SoundMAGIC PL30+</a>
                            </div>
                            <div class="pricesp">499.000 Đ</div>
                            <div class="button-hd">
                                <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 p5">
                        <div class="boxsp">
                            <div class="imgsp">
                                <a href=""><img class="imgproduct" src="home/images/img1.jpg"></a>
                                <div class="img-label">
                                    <img src="home/images/hot.png">
                                </div>
                            </div>
                            <div class="namesp">
                                <a href="">SoundMAGIC PL30+</a>
                            </div>
                            <div class="pricesp">499.000 Đ</div>
                            <div class="button-hd">
                                <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 p5">
                        <div class="boxsp">
                            <div class="imgsp">
                                <a href=""><img class="imgproduct" src="home/images/img1.jpg"></a>
                                <div class="img-label">
                                    <img src="home/images/hot.png">
                                </div>
                            </div>
                            <div class="namesp">
                                <a href="">SoundMAGIC PL30+</a>
                            </div>
                            <div class="pricesp">499.000 Đ</div>
                            <div class="button-hd">
                                <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 p5">
                        <div class="boxsp">
                            <div class="imgsp">
                                <a href=""><img class="imgproduct" src="home/images/img1.jpg"></a>
                                <div class="img-label">
                                    <img src="home/images/hot.png">
                                </div>
                            </div>
                            <div class="namesp">
                                <a href="">SoundMAGIC PL30+</a>
                            </div>
                            <div class="pricesp">499.000 Đ</div>
                            <div class="button-hd">
                                <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
