@extends('backend.master.master')
@section('title','giới thiệu shop')
@section('content')
	<!--main-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Giới thiệu</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<table class="table table-bordered" style="margin-top:20px;">
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th width='50%'>Nội dung</th>
											<th width='18%'>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach($about as $row)
										<tr>
                                            <td>{{ $row->id }}</td>
                                            <td>{!! $row->introduce !!}</td>
											<td>
												<a href="/admin/about/update/{{ $row->id }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
											</td>
                                        </tr>
                                        @endforeach
									</tbody>
								</table>
							</div>
							<div class="clearfix"></div>
						</div>

					</div>
				</div>
				<!--/.row-->

			</div>
			<!--end main-->

@endsection


