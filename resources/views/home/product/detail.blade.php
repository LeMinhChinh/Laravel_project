@extends('home.layouts.homeview')
@section('title','detailProduct')
@section('content')
    <div class="container">
        <div style="margin-top:20px" class="title-detail">
            <a href="{{ route('user.home') }}">Trang chủ / </a><a href="">{{ $detailPr['type'] }} / </a><a href="" style="color:red">{{ $detailPr['name_type'] }}</a>
        </div>
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="{{ URL::to('/') }}/Image/product/laptop/{{ $detailPr['image'] }}" /></div>
						</div>
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{ $detailPr['name'] }}</h3>
						<div class="rating">
                            <p class="review-no">Kho hàng : <span style="color:#ffa53f">Còn hàng</span></p>
                        </div>
                        <div>
                            <p class="product-title">Thông số sản phẩm</p>
                            <ul>
                                <li>Bộ vi xử lí : {{ $detailPr['cpu'] }}</li>
                                <li>Ram : {{ $detailPr['ram'] }}</li>
                                <li>Hard drive : {{ $detailPr['hard_drive'] }}</li>
                                <li>Màn hình : {{ $detailPr['screen'] }}</li>
                                <li>Hệ điều hành : {{ $detailPr['operating_system'] }}</li>
                            </ul>
                        </div>
                        <div style="width:80%">
                            <table class="table table-borderless table-light table-bordered" style="background-color:#f0f0f0;border-radius:5px">
                                <tbody>
                                  <tr class="table-active">
                                    <td style="width:35%;height:50px">Giá bán</td>
                                    <td>{{ number_format($detailPr['price'] ,0 ,'.' ,'.').'' }}&#8363;</td>
                                  </tr>
                                  <tr>
                                    <td style="width:35%;height:50px">Giá khuyến mãi</td>
                                    <td>{{ number_format($detailPr['promo_price'] ,0 ,'.' ,'.').'' }}&#8363;</td>
                                  </tr>
                                  <tr>
                                    <td colspan="2" style="width:35%;height:50px;text-align:center">Giảm giá tới {{ $detailPr['percent'] }}%</td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                        <p>Bảo hành : Chính hãng 12 tháng, đổi mới 30 ngày</p>
                    </div>

				</div>
			</div>
        </div>
        <div style="margin-top:40px">
            <h2 class="product-title">Thông số kĩ thuật</h2>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <td style="width:20%;height:20px">Ram</td>
                        <td>{{ $detailPr['ram'] }}</td>
                    </tr>
                    <tr>
                        <td>Cpu</td>
                        <td>{{ $detailPr['cpu'] }}</td>
                    </tr>
                    <tr>
                        <td>Bộ nhớ trong</td>
                        <td>{{ $detailPr['hard_drive'] }}</td>
                    </tr>
                    <tr>
                        <td>Màu sắc</td>
                        <td>{{ $detailPr['color'] }}</td>
                    </tr>
                    <tr>
                        <td>Màn hình</td>
                        <td>{{ $detailPr['screen'] }}</td>
                    </tr>
                    <tr>
                        <td>Hệ điều hành</td>
                        <td>{{ $detailPr['operating_system'] }}</td>
                    </tr>
                    <tr>
                        <td>Kích thước</td>
                        <td>{{ $detailPr['size'] }}</td>
                    </tr>
                    <tr>
                        <td>Dung lượng pin</td>
                        <td>{{ $detailPr['battery'] }}</td>
                    </tr>
                    <tr>
                        <td>Cân nặng</td>
                        <td>{{ $detailPr['weight'] }}</td>
                    </tr>
                </tbody>
                </table>
        </div>
        <div class="fb-comments" data-width="" data-numposts="5"></div>
	</div>
@endsection
