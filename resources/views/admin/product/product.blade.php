@extends('admin.layout.dashboardview')
@section('title','Product Admin')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Product</a>
        </li>
        <li class="breadcrumb-item active">Overview</li>
    </ol>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <a href="" class="btn btn-primary">Create New Product</a>
                <a href="" class="btn btn-primary">View All</a>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Searching..." id="js-keyword" >
                        {{-- value="{{ $keyword }}" value of input--}}
                        <div class="input-group-append">
                            <button class="input-group-text" id="js-search">Search</button>
                        </div>
                    </div>
            </div>
        </div>


        <table class="table table-border table-striped table-hover mt-2">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type product</th>
                    <th>Trademark</th>
                    <th>Price</th>
                    <th>Percent</th>
                    <th>Price promo</th>
                    <th>Image</th>
                    <th>Quantity</th>
                    <th colspan="2" width="5%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lstProduct as $key => $product)
                    <tr>
                        <td>{{ $product['id'] }}</td>
                        <td>
                            <p>{{ $product['name'] }}</p>
                        </td>
                        <td>
                            <p>{{ $product['type'] }}</p>
                        </td>
                        <td>
                            <p>{{ $product['name_trade'] }}</p>
                        </td>
                        <td>
                            <p>{{ $product['price'] }}</p>
                        </td>
                        <td>
                            <p>{{ $product['percent'] }}%</p>
                        </td>
                        <td>
                            <p>{{ $product['promo_price'] }}</p>
                        </td>
                        <td>
                            @if ($product['id_type'] == 1)
                                <img src="{{ URL::to('/') }}/Image/product/laptop/{{ $product['image'] }}" alt="" width="120" height="120" class="img-fluid">
                            @elseif($product['id_type'] == 2)
                                <img src="{{ URL::to('/') }}/Image/product/pc/{{ $product['image'] }}" alt="" width="120" height="120" class="img-fluid">
                            @endif
                        </td>
                        <td>{{ $product['quantity'] }}</td>
                        <td>
                            <button id="{{ $product['id'] }}" class="btn btn-sm btn-danger js-delete-post">Delete</button>
                        </td>
                        <td>
                            <a href="" class="btn btn-info btn-sm">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- {{ $paginate->appends(request()->query())->links() }} --}}
        {{-- {{ $paginate->links() }} --}}
    </div>
@endsection
