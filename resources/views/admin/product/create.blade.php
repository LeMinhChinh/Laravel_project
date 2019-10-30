@extends('admin.layout.dashboardview')
@section('title','Create Product')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.product') }}">Product</a>
        </li>
        <li class="breadcrumb-item active">Create Product</li>
    </ol>
    {{-- <div class="col-12 col-sm-12 col-md-12 col-lg-12"> --}}
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="namePr">Name (*)</label>
                        <input type="text" class="form-control" id="namePr" name="namePr">
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <label for="typePr">Type</label>
                            <select name="typePr" id="typePr" style="width:100px;margin-left:56px;height:35px">
                                <option value="">Laptop</option>
                                <option value="">PC</option>
                            </select>
                        </div>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="pricePr" name="pricePr">
                        </div>
                    </div>
                    <div class="row mt-3">
                            <div class="col-md-5">
                                <label for="typePr">Trademark</label>
                                <select name="tradePr" id="tradePr" style="width:100px;margin-left:15px;height:35px">
                                    <option value="">Asus</option>
                                    <option value="">Dell</option>
                                    <option value="">Acer</option>
                                    <option value="">HP</option>
                                    <option value="">Apple</option>
                                    <option value="">MSI</option>
                                    <option value="">Samsung</option>
                                    <option value="">Razer</option>
                                    <option value="">Microsoft</option>
                                    <option value="">Lenovo</option>
                                </select>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" id="pricePr" name="pricePr">
                            </div>
                        </div>
                    <div class="form-group">
                        <label for="pricePr">Price (*)</label>
                        <input type="text" class="form-control" id="pricePr" name="pricePr">
                    <div class="form-group">
                        <label for="percentPr">Percent </label>
                        <input type="text" class="form-control" id="percentPr" name="percentPr">
                    </div>
                    <div class="form-group">
                        <label for="promoPr">Price promo (*)</label>
                        <input type="text" class="form-control" id="promoPr" name="promoPr">
                    </div>
                    <div class="form-group">
                        <label for="quantPr">Quantity (*)</label>
                        <input type="text" class="form-control" id="quantPr" name="quantPr">
                    </div>
                    <div class="form-group">
                        <label for="imgPr">Image (*)</label>
                        <input type="file" class="form-control" id="imgPr" name="imgPr">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">

                </div>
            </div>
        </form>
    {{-- </div> --}}
@endsection
