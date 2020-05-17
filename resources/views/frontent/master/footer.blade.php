		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>Giới thiệu</h4>
						<p>Fashion cửa hàng kinh doanh quần áo luôn mang tới sự hài lòng cho khách hàng về chất
							lượng sản phẩm, quần
							áo đều mang thương hiệu made in Việt Nam đẹp cả về kiểu cách lẫn chất lượng, nên sẽ giúp cho
							bạn trở nên xinh
							đẹp hơn..</p>
						<p>
							<ul class="colorlib-social-icons">

								<li><a href="https://www.facebook.com/vietpro.edu/"><i class="icon-facebook"></i></a></li>

								<li><a href="https://www.youtube.com/channel/UCLjRjXUSy3g9iKRWTyw75Nw"><i class="icon-youtube"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Chăm sóc khách hàng</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="/contact.html">Liên hệ </a></li>
								<li><a href="#">Giao hàng/ Đổi hàng</a></li>
								<li><a href="#">Mã giảm giá</a></li>
								<li><a href="#">Sản phẩm yêu thích</a></li>
								<li><a href="#">Đặc biệt</a></li>


							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Thông tin</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Về chúng tôi</a></li>
								<li><a href="#">Thông tin vận chuyển</a></li>
								<li><a href="#">Chính sách bảo mật</a></li>
								<li><a href="#">Hỗ trợ</a></li>

							</ul>
						</p>
					</div>
					<div class="col-md-3">
                        <h4>Thông tin liên hệ</h4>
						<ul class="colorlib-footer-links">
                            @foreach($infor as $row)
                                <li>{{ $row->address }}</li>
                                <li><a href="#">{{ $row->phone }}</a></li>
                                <li><a href="#">{{ $row->email }}</a></li>
                                <li><a href="#">{{ $row->link }}</a></li>
                            @endforeach
                        </ul>
					</div>
				</div>
			</div>

		</footer>
