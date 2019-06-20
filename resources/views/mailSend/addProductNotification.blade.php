<html>
<head>
    <title>Welcome Laravel</title>
</head>
<body>
<h1>Bạn đã thêm một sản phầm thành công</h1>
<p>Thông tin chi tiết sản phẩm</p>
<table border="1"  style="border: 1px solid red">
    <tr >
        <td><strong>Tên Sản Phẩm</strong></td>
        <td><strong>Giá</strong></td>
        <td><strong>Nội Dung</strong></td>
        <td><strong>Ngày Tạo</strong></td>
    </tr>
    <tr >
        <td>{!! $info->product->name !!}</td>
        <td>{!! $info->product->price !!}</td>
        <td>{!! $info->product->content !!}</td>
        <td>{!! $info->product->created_at !!}</td>
    </tr>
</table>
</body>
</html>