<?php
	$conn = new mysqli('localhost', 'root', '12345678', 'sys');
	
	if ($conn->connect_error) {
		die("Kết nối không thành công: " . $conn->connect_error);
	} 
	
	$sql = "INSERT INTO sinhvien (masv , hoten, ngaysinh, diemtb, quequan, maganh, makhoa) 
        VALUES ('17020761', 'Bui Huy Hoang', '25/7/1999', '3.2', 'Bac Giang', 'CNTT' , 'CNTT')
		";
	if (mysqli_query($conn, $sql)) {
		echo "Thêm record thành công";
	} else {
		echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	
	
	mysqli_close($conn);