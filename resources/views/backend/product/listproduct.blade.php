@extends('backend.master.master')
@section('title','danh sách sản phẩm')
@section('content')
	<!--main-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Danh sách sản phẩm</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách sản phẩm</h1>
			</div>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">

					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
									@if(session('thongbao'))
                                       <div class="success alert-success">
                                       	   {{session('thongbao')}}
                                       </div>
									@endif
								<a href="/admin/product/add" class="btn btn-primary">Thêm sản phẩm</a>
								<table class="table table-bordered" style="margin-top:20px;">

									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Thông tin sản phẩm</th>
                                            <th>Giá sản phẩm</th>
                                            <th>Giá giảm</th>
											<th>Tình trạng</th>
											<th>Danh mục</th>
											<th width='18%'>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
									@foreach($products as $pro)
										<tr>
											<td>{{ $pro->id }}</td>
											<td>
												<div class="row">
													<div class="col-md-3"><img src="/backend/img/{{$pro->img}}" alt="Áo đẹp" width="100px" class="thumbnail"></div>
													<div class="col-md-9">
														<p><strong>Mã sản phẩm : {{ $pro->code }}</strong></p>
														<p>Tên sản phẩm :{{ $pro->product_name }}</p>


													</div>
												</div>
											</td>
                                            <td>{{ number_format($pro->price,0,',','.') }}đ</td>
                                            <td>{{ number_format($pro->sale_price,0,',','.') }}đ</td>
											<td>
												@if($pro->state == 0)
                                                  <a class="btn btn-danger" href="#" role="button">Hết hàng</a>
                                                 @else
                                                  <a class="btn btn-success" href="#" role="button">Còn hàng</a>
												@endif
											</td>
											<td>{{$pro->category->category_name}}</td>
											<td>
												<a onclick="return pro_edit()" href="/admin/product/edit/{{$pro->id}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a onclick="return pro_delete()" href="/admin/product/delete/{{$pro->id}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>


                                    @endforeach
									</tbody>
								</table>
								<div align='right'>
								   {{ $products->links() }}
								</div>
							</div>
							<div class="clearfix"></div>
						</div>

					</div>
				</div>
				<!--/.row-->


			</div>
			<!--end main-->

@endsection

@section('script')
@parent
<script>
	function pro_edit()
	{
		return confirm('Bạn có chắc chắn muốn sửa sản phẩm không?');
	}
	function pro_delete()
	{
		return confirm('Bạn có chắc chắn muốn xóa sản phẩm không?');
	}
</script>
@endsection
