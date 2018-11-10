<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kích hoạt tài khoản</title>
</head>
<body>
	<a href="{{route('sendtomail',[$nguoidung-> id, csrf_token()])}}">Nhấn vào đây để kích hoạt tài khoản</a>
</body>
</html>

