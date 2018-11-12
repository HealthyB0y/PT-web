<?php
	// Kết nối
	$conn = new mysqli('localhost', 'root', '12345678', 'sys');

	// Kiểm tra kết nối 
	if ($conn->connect_error) {
		die("Kết nối không thành công: " . $conn->connect_error);
	} 

	// sql to create table
	$sql = "CREATE TABLE sinhvien (
		masv INT(6) ,
		hoten VARCHAR(30) NOT NULL,
		ngaysinh VARCHAR(30) NOT NULL,
		diemtb INT(4) ,
		quequan VARCHAR(30) NOT NULL,
		maganh VARCHAR(30) NOT NULL,
		makhoa VARCHAR(30) NOT NULL
	)";
	if ($conn->query($sql) === TRUE) {
		echo "Tạo table thành công";
	} else {
		echo "Tạo table thất bại: " . $conn->error;
	}
	$sql = "CREATE TABLE khoa (
		makhoa VARCHAR(30) NOT NULL,
		tenkhoa VARCHAR(30) NOT NULL
	)";
	if ($conn->query($sql) === TRUE) {
		echo "Tạo table thành công";
	} else {
		echo "Tạo table thất bại: " . $conn->error;
	}
	$sql = "CREATE TABLE nganh (
		manganh VARCHAR(30) NOT NULL,
		tennganh VARCHAR(30) NOT NULL
	)";
	

	// Thực thi câu truy vấn
	if ($conn->query($sql) === TRUE) {
		echo "Tạo table thành công";
	} else {
		echo "Tạo table thất bại: " . $conn->error;
	}

	// Ngắt kết nối
	$conn->close();