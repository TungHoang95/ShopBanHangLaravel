<font face="Arial">
    <div>
        <div></div>
        <h3><font color:red> thông tin khách hàng </font></h3>
        <p>
            <strong class="info"> Khách hàng: </strong>
            {{ $infor['full'] }}
        </p>
        <p>
            <strong class="info"> Email: </strong>
            {{ $infor['email'] }}
        </p>
        <p>
            <strong class="info"> Điện thoại:</strong>
            {{ $infor['phone'] }}
        </p>
        <p>
            <strong class="info"> Địa chỉ: </strong>
            {{ $infor['address'] }}
        </p>
    </div>
    <div>
    <h3><font color:red> Hóa đơn mua hàng </font></h3>
    <table border="1" cellspacing="0">
            <tr>
                <td><strong>Mã sản phẩm</strong></td>
                <td><strong>Tên sản phẩm</strong></td>
                <td><strong>Đơn giá</strong></td>
                <td><strong>Số lượng</strong></td>
                <td><strong>Thành tiền</strong></td>
            </tr>
            @foreach($cart as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ number_format($row->price,0,"",".") }}đ</td>
                <td>{{ $row->qty }}</td>
                <td>{{ number_format($row->price*$row->qty,0,"",".") }}đ</td>
            </tr>
            @endforeach
            <tr>
                <td>Tổng tiền thanh toán : </td>
                <td colspan="3" align="right">{{ number_format($total,0,"",".") }}đ</td>

            </tr>
    </table>
    <div>
       <h3>quý khách đã đặt hàng thành công</h3>
       <p>* Hóa đơn của quý khách hàng đã được chuyển đến email cớ trong phần thông tin khách hàng của chúng tôi</p>
       <p>* Sản phẩm của quý khách sẽ được chuyển đến địa chỉ trong thời gian sớm nhất khoảng 2,3 ngày tính từ thời điểm này</p>
       <p>* Nhân viên giao hàng sẽ liên hệ với quý khách qua số điện thoại trước khi giao hàng 24 tiếng</p>
       <p> Cảm ơn quý khách đã sử dụng sản phẩm của công ty </p>

    </div>
    </div>
    </font>
