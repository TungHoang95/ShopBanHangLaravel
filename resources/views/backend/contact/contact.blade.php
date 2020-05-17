@extends('backend.master.master')
@section('title','thông tin liên hệ')
@section('content')
	<!--main-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Liên hệ</li>
			</ol>
		</div>
		<!--/.row-->
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách liên hệ chưa xử lý</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">

								<a href="/admin/contact/processed" class="btn btn-success">Liên hệ đã xử lý</a>
								<table class="table table-bordered" style="margin-top:20px;">
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
                                            <th>Tên khách hàng</th>
                                            <th>Email</th>
											<th>Chủ đề</th>
											<th>Lời nhắn</th>

											<th>Xử lý</th>
										</tr>
									</thead>
									<tbody>
										@foreach($contact as $row)
										<tr>
											<td>{{ $row->id }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->email }}</td>
											<td>{{ $row->national }}</td>
											<td>{{ $row->message }}</td>
											<td>
												<a onclick="return confirm('Bạn có chắc chắn muốn sử lý không?')" href="{{ route('xu.ly',['id' =>$row->id]) }}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>Xử lý</a>

											</td>
										</tr>
                                        @endforeach
									</tbody>
								</table>
							</div>
						</div>
						<div class="clearfix"></div>
						<div align="right">
							{{ $contact->links() }}
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/.row-->
	</div>
	<!--end main-->
@endsection
