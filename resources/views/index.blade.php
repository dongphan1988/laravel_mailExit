<div class="main-content">
    <h1>Ứng dụng kiểm tra email hợp lệ</h1>
    <form method="get">
        <label for="email-input">Email:</label>
        <input id="email-input" type="text" placeholder="Nhập email cần kiểm tra" name="email" value="{{ $email }}">
        <input type="submit" value="Check">
    </form>
    @if($email !== null)
        Kết quả: {{ $check?'Đúng định dạng Email':'Sai định dạng Email' }}
        @else Bạn đang để trống mục nhập email. Mời nhập vào để kiểm tra.
    @endif
</div>