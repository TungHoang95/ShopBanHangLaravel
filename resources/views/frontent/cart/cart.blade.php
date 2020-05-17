@extends('frontent.master.master')
@section('title','giỏ hàng')
@section('content')
		<!-- main -->
		<div class="colorlib-shop">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-10 col-md-offset-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Giỏ hàng</h3>
							</div>
							<div class="process text-center">
								<p><span>02</span></p>
								<h3>Thanh toán</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Hoàn tất thanh toán</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-pb-md">
                    @if(Cart::count() >= 1)
					<div class="col-md-10 col-md-offset-1">
						<div class="product-name">
							<div class="one-forth text-center">
								<span>Chi tiết sản phẩm</span>
							</div>
							<div class="one-eight text-center">
								<span>Giá</span>
							</div>
							<div class="one-eight text-center">
								<span>Số lượng</span>
							</div>
							<div class="one-eight text-center">
								<span>Tổng</span>
							</div>
							<div class="one-eight text-center">
								<span>Xóa</span>
							</div>
						</div>
						@foreach($items as $item)
						<div class="product-cart">
							<div class="one-forth">
								<div class="product-img">
									<img class="img-thumbnail cart-img" src="/backend/img/{{$item->options->img}}">
								</div>
								<div class="detail-buy">
									<h4>Mã : {{ $item->id }}</h4>
									<h5>{{ $item->name }}</h5>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
                                    @if($item->options->sale == 0)
                                    <span class="price">{{ number_format($item->price,0,"",".") }}đ</span>
                                    @else
                                    <span class="price">{{ number_format($item->options->sale,0,"",".") }}đ</span>
                                    @endif
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<input type="number" id="quantity" name="qty"
									  min="1" class="form-control input-number text-center" value="{{ $item->qty }}"
									  onchange="updateCart('{{ $item->rowId }}',this.value)" >
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
                                    @if($item->options->sale == 0)
                                    <span class="price">{{ number_format($item->price*$item->qty,0,"",".") }}đ</span>
                                    @else
                                    <span class="price">{{ number_format($item->options->sale*$item->qty,0,"",".") }}đ</span>
                                    @endif
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<a onclick="return del_cart('{{ $item->name }}')" href="/cart/del/{{ $item->rowId }}" class="closed"></a>
								</div>
							</div>
						</div>
                         @endforeach
                    </div>
                    @else
                    <h3 style="color:red; margin-left:30px">giỏ hàng trống</h3>
                    @endif

				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="total-wrap">
							<div class="row">
								<div class="col-md-8">

								</div>
								<div class="col-md-3 col-md-push-1 text-center">
									<div class="total">
										<div class="sub">
											<p><span>Tổng:</span> <span>{{ $total }} đ</span></p>
										</div>
										<div class="grand-total">
											<p><span><strong>Tổng cộng:</strong></span> <span>{{ $total }} đ</span></p>
											<a href="/checkout" class="btn btn-primary">Thanh toán <i
													class="icon-arrow-right-circle"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- end main -->
@endsection

@section('script')
@parent
<script>
	function updateCart(rowId,qty)
	{

       $.get("/cart/update/"+rowId+"/"+qty,
       	function(data)
       	{

           if(data == "success")
           {
            location.reload();
           }
           else
           {
           	alert("cập nhật thất bại");
           }
       	}
       	);
    }
    function del_cart(name)
    {
        return confirm("Bạn có chắc chắn muốn xóa sản phẩm"+name+" ra khỏi giỏ hàng?");
    }
</script>
@endsection

