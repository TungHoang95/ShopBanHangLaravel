@extends('frontent.master.master')
@section('title','giới thiệu')
@section('content')
		<!-- main -->

		<div id="colorlib-about">
			<div class="container">
				<div class="row">
                    <h2>    Giới Thiệu</h2>
                        <div class="col-md-12">
                           @foreach($about as $row)
                               {!! $row->introduce !!}
                           @endforeach
                        </div>

				</div>
			</div>
		</div>
		<!-- end main -->
@endsection
