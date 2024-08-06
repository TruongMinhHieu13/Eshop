@extends('layouts.admin.master')
@section('content')
<div class="container-fluid">
    <div class="card mb-4 py-3 border-bottom-primary">
        <div class="card-body py-0">
            <a href="them-san-pham" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
                </span>
                <span class="text">Thêm sản phẩm</span>
            </a>
        </div>
    </div>

    
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Danh sách sản phẩm</h6>

                <div class="table-responsive">

                    </tbody>
                    </table>
                    <table id="dataTableExample" class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Hình ảnh</th>
                                <th>Tên SP</th>
                                <th>Giá</th>
                                <th>Giá (giảm giá)</th>
                                <th>Tồn kho</th>
                                <th style="opacity:0"></th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr id="">
                                <td>1</td>
                                <td><img src="https://via.placeholder.com/115x140" alt="#"></td>
                                <td>Sản phẩm 1</td>
                                <td>300.000 VNĐ</td>
                                <td>200.000 VNĐ</td>
                                <td>50</td>
                                <td><button class="btn btn-danger mr-2">Xóa</button><button class="btn btn-primary" onclick="window.location.href='products/' ;">Sửa</button></td>

                            </tr>
                        </tbody>
                        
                    </table>

                </div>

            </div>

        </div>
    </div>

</div>


</div>

@endsection