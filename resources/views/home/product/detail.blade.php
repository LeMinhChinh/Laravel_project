@extends('home.layouts.homeview')
@section('title','detail')
@section('content')
    {{-- <div class="container">
        <div>
            <span>Trang chủ / </span><span>Laptop / </span><span>Laptop Dell</span>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="https://phucanhcdn.com/media/product/36644_xps_15_7590_siliver_ha3.jpg" alt="">
            </div>
            <div class="col-md-8">
                <p>Laptop Dell Inspiron 5480 X6C893 (i5 8265U/8GB RAM/256GB SSD/Geforce MX250 2GB/14" FHD IPS/Win 10)</p>
            </div>
        </div>
    </div> --}}
    <div class="container">
        <div style="margin-top:20px">
            <span>Trang chủ / </span><span>Laptop / </span><span>Laptop Dell</span>
        </div>
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="http://placekitten.com/400/252" /></div>
						</div>
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">men's shoes fashion</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
						<h4 class="price">current price: <span>$180</span></h4>
						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
						<h5 class="sizes">sizes:
							<span class="size" data-toggle="tooltip" title="small">s</span>
							<span class="size" data-toggle="tooltip" title="medium">m</span>
							<span class="size" data-toggle="tooltip" title="large">l</span>
							<span class="size" data-toggle="tooltip" title="xtra large">xl</span>
						</h5>
						<h5 class="colors">colors:
							<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5>
                    </div>

				</div>
			</div>
		</div>
	</div>
@endsection
