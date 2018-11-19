<?php
	$conn = new mysqli('localhost', 'root', '12345678', 'sys');
	
	if ($conn->connect_error) {
		die("Kết nối không thành công: " . $conn->connect_error);
	} 
	
	$sql = "INSERT INTO mathang (idmathang,ten ,iddongsp ,dongia ,soluong) 
        VALUES ('5','bim bim','005','10000','500')
		";
	if (mysqli_query($conn, $sql)) {
		echo "5";
	} else {
		echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
	}
	echo "<br>";
	$sql = "INSERT INTO mathang (idmathang,ten ,iddongsp ,dongia ,soluong) 
        VALUES ('6','chip chip','006','20000','350')
		";
	if (mysqli_query($conn, $sql)) {
		echo "6";
	} else {
		echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
	}
	echo "<br>";
	
	
/*	
	$sql = "INSERT INTO dongsp (iddongsp,ten) 
        VALUES ()
		";
	if (mysqli_query($conn, $sql)) {
		echo "Thêm dongsp thành công";
	} else {
		echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
	}
	echo "<br>";
	
	
	
	$sql = "INSERT INTO khachhang (idkhachhang,ten,gioitinh,tuoi,diachi,sdt) 
        VALUES ()
		";
	if (mysqli_query($conn, $sql)) {
		echo "Thêm khachhang thành công";
	} else {
		echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
	}
	echo "<br>";
	
	
	
	$sql = "INSERT INTO orders (idorder,idkhachhang ,ngayorder) 
        VALUES ()
		";
	if (mysqli_query($conn, $sql)) {
		echo "Thêm orders thành công ";
	} else {
		echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
	}
	echo "<br>";
	
	
	
	$sql = "INSERT INTO orderdetail (idorder,idmathang ,soluong) 
        VALUES ()
		";
	if (mysqli_query($conn, $sql)) {
		echo "Thêm orderdetail thành công ";
	} else {
		echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
	}
	echo "<br>";
	
	*/
	mysqli_close($conn);