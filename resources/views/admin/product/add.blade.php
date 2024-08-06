@extends('layouts.admin.master')
@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb ">
        <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
        <li class="breadcrumb-item active" aria-current="page">Thêm sản phẩm</li>
    </ol>
</nav>
<div class="card-body">
    <div class="card">
        <div class="card-body">
            <form class="forms-sample" method="POST" action="/dashboard/add-products">
                @csrf
                <div class="row">
                    <div class="col-8">
                        <div class="form-group">
                            <label for="exampleInputText1">Tên SP</label>
                            <input name="name" type="text" class="form-control" id="name" value="" placeholder="Tên sản phẩm">
                        </div>
                        <div class="form-group">
                            <label for="images">Mô tả</label>
                            <textarea class="form-control editor" name="description" id="simpleMdeExample" placeholder="Mô tả sản phẩm"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="" class="d-block">Giá bán</label>
                                    <input type="number" name="regular-price" class="w-100" placeholder="Giá bán">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="" class="d-block">Giá giảm</label>
                                    <input type="number" name="sale-price" class="w-100" placeholder="Giá giảm">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="" class="d-block">Tồn kho</label>
                                    <input type="number" name="inventory" class="w-100" placeholder="Số lượng tồn kho">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        @include("layouts.images")
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
</div>

@endsection