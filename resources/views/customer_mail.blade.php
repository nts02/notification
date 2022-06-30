<h2> Xin chào {{$data['full_name']}}</h2>
<h4>Cảm ơn bạn đã đặt phòng tại khách sạn của chúng tôi!!!</h4>
<p>Dưới đây là chi tiết đơn đặt phòng của bạn:</p>
<ul>
    <li>Số điện thoại: {{$data['phone']}}</li>
    <li>Email: {{$data['email']}}</li>
    <li>Mã phòng: {{$data['room_id']}}</li>
    <li>Ngày đến: {{$data['checkin']}}</li>
    <li>Ngày đi:  {{$data['checkout']}}</li>
    <li>Số người:  {{$data['quantity']}}</li>
    <li>Tổng chi phí:  {{$data['total_money']}} VNĐ</li>
    <img src="https://asiky.com/files/images/Article/tin-tuc/chup-anh-khach-san.jpg" alt="Italian Trulli">
</ul>



