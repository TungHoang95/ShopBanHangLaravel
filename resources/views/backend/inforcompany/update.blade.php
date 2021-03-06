@extends('backend.master.master')
@section('title','sửa thông tin công ty')
@section('content')
    <!--main-->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa thông tin công ty</h1>
            </div>
        </div>
        @if(session('thongbao'))
            <div class="alert alert-success" role="alert">
                <strong>{{ session('thongbao') }}</strong>
            </div>
            @endif
        <!--/.row-->
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"><i class="fas fa-user"></i> Sửa thông tin</div>

                    <div class="panel-body">
                        <div class="row justify-content-center" style="margin-bottom:40px">
                            <form method="POST">
                                @csrf
                            <div class="col-md-8 col-lg-8 col-lg-offset-2">

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" value="{{ $infor->email }}">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ công ty</label>
                                    <input type="address" name="address" class="form-control" value="{{ $infor->address }}">
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="phone" name="phone" class="form-control" value="{{ $infor->phone }}">
                                </div>
                                <div class="form-group">
                                    <label>Link</label>
                                    <input type="phone" name="link" class="form-control" value="{{ $infor->link }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-lg-8 col-lg-offset-2 text-right">
                                    <button class="btn btn-success"  type="submit">Sửa thông tin</button>
                                    <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                                </div>
                            </div>

                         </form>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>

        </div>
    </div>

        <!--/.row-->
    </div>

    <!--end main-->
@endsection
