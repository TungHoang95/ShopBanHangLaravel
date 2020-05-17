@extends('frontent.master.master')
@section('title','liên hệ')
@section('content')
		<!-- main -->
		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<h3>Thông tin liên hệ</h3>
						<div class="row contact-info-wrap">
                            @foreach($infor as $row)
                                <div class="col-md-3">
                                    <p><span><i class="icon-location"></i></span>{{ $row->address }}</p>
                                </div>
                                <div class="col-md-3">
                                    <p><span><i class="icon-phone3"></i></span> <a href="tel://0967 840 666">{{ $row->phone }}</a>
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <p><span><i class="icon-paperplane"></i></span> <a
                                            href="#">{{ $row->email }}</a></p>
                                </div>
                                <div class="col-md-3">
                                    <p><span><i class="icon-globe"></i></span> <a href="#">{{ $row->link }}</a></p>
                                </div>
                            @endforeach
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1">
						<div class="contact-wrap">
                            <form method="post">
                                @csrf
						    	<h3>Liên hệ</h3>
								<div class="row form-group">
									<div class="col-md-12 padding-bottom">
										<label for="fname">Họ & Tên</label>
                                        <input type="text" id="fname" name="name" class="form-control" placeholder="Họ và tên" value="{{ old("name") }}">
                                        {!! ShowError($errors,'name') !!}
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label for="email">Email</label>
										<input type="text" id="email" name="email" class="form-control"
                                            placeholder="Email của bạn" value="{{ old("email") }}">
                                            {!! ShowError($errors,'email') !!}
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label for="subject">Chủ đề</label>
                                        <input type="text" id="subject" name="national" class="form-control" placeholder="Nhập chủ đề" value="{{ old("national") }}">
                                        {!! ShowError($errors,'national') !!}
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label for="message">Lời nhắn</label>
										<textarea name="message" id="message" name="message" cols="30" rows="10" class="form-control"
                                            placeholder="Nói gì đó cho chúng tôi">{{ old("message") }}</textarea>
                                            {!! ShowError($errors,'message') !!}
									</div>
								</div>
								<div class="form-group text-center">
									<input type="submit" value="Gửi liên hệ" class="btn btn-primary">
                                </div>
                                    @if(session('lienhe'))
                                        <div class="alert alert-success" role="alert">
                                            <strong>{{ session('lienhe') }}</strong>
                                        </div>
                                    @endif
                            </form>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div id="map" class="colorlib-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.65747561103!2d105.78126221457956!3d21.046386992553067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab32dd484c53%3A0x4201b89c8bdfd968!2zMjM4IEhvw6BuZyBRdeG7kWMgVmnhu4d0LCBD4buVIE5odeG6vywgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1588050050471!5m2!1svi!2s" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
		<!-- end main -->
@endsection
