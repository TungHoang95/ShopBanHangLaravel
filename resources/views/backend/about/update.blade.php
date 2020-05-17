@extends('backend.master.master')
@section('title','sửa thành viên')
@section('content')
    <!--main-->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa giới thiệu</h1>
            </div>
        </div>
        <!--/.row-->
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    @if(session('thongbao'))
                        <div class="success alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                    <div class="panel-body">
                        <div class="row justify-content-center" style="margin-bottom:40px">
                            <form method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="col-md-8 col-lg-8 col-lg-offset-2">
                                <div class="form-group">
                                    <label>Nội dung</label>
                                    <textarea id="editor1" class="form-control ckeditor" style="resize: none" rows="8" name="description">{{ $about->introduce }}</textarea>
                                    {{-- <script>
                                       var editor = CKEDITOR.replace('description',{
                                                language:'vi',
                                                filebrowserBrowseUrl: '../../backend/ckfinder/ckfinder.html',
                                                filebrowserImageBrowseUrl: '../../backend/ckfinder/ckfinder.html?type=Images,
                                                filebrowserFlashBrowseUrl: '../../backend/ckfinder/ckfinder.html?type=Flash,
                                                filebrowserUploadUrl: '../../backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                                filebrowserImageUploadUrl: '../../backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                                filebrowserFlashUploadUrl: '../../backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                                       });
                                    </script> --}}
                                </div>
                                {{-- <div class="form-group">
                                    <label>Hình ảnh</label>
                                    <div>
                                        <p>
                                           <img width="200px" src="/backend/img/{{ $about->image }}" alt="">
                                        </p>
                                        <input width="200px" class="form-control" type="file" name="image" />
                                    </div>
                                </div> --}}
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-lg-8 col-lg-offset-2 text-right">

                                    <button class="btn btn-success"  type="submit">Sửa giới thiệu</button>
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
