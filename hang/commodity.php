<?php
	// Kết nối
	$conn = new mysqli('localhost', 'root', '12345678', 'mysql');
	// Kiểm tra kết nối 
	if ($conn->connect_error) {
		die("Kết nối không thành công: " . $conn->connect_error);
	} 
	// sql to create table
	$sql = "CREATE TABLE mathang (
		idmathang INT(6) ,
		ten VARCHAR(30) NOT NULL,
		iddongsp INT(6) ,
		dongia VARCHAR(30) NOT NULL ,
		soluong INT(6),
		PRIMARY KEY(idmathang)
	)";
	if ($conn->query($sql) === TRUE) {
		echo "Tạo table thành công items";
	} else {
		echo "Tạo table thất bại items" . $conn->error;
	}
	echo "<br>";
	// Ngắt kết nối
	$sql = "CREATE TABLE dongsp (
		iddongsp INT(6) ,
		ten VARCHAR(30) NOT NULL,
		PRIMARY KEY(iddongsp)
	)";
	if ($conn->query($sql) === TRUE) {
		echo "Tạo table thành công dongsp";
	} else {
		echo "Tạo table thất bại dongsp " . $conn->error;
	}
	echo "<br>";
	// Ngắt kết nối
	$sql = "CREATE TABLE khachhang (
		idkhachhang INT(6) ,
		ten VARCHAR(30) NOT NULL,
		gioitinh VARCHAR(30) NOT NULL,
		tuoi INT(3),
		diachi VARCHAR(30) NOT NULL,
		sdt VARCHAR(11) NOT NULL,
		PRIMARY KEY(idkhachhang)
	)";
	if ($conn->query($sql) === TRUE) {
		echo "Tạo table thành công khach hang";
	} else {
		echo "Tạo table thất bại khach hang " . $conn->error;
	}
	echo "<br>";
	// Ngắt kết nối
	$sql = "CREATE TABLE orders (
		idorder INT(6),
		idkhachhang INT(6),
		ngayorder VARCHAR(11) NOT NULL,
		PRIMARY KEY(idorder)
	)";
	if ($conn->query($sql) === TRUE) {
		echo "Tạo table thành công order";
	} else {
		echo "Tạo table thất bại order " . $conn->error;
	}
	echo "<br>";
	// Ngắt kết nối
	$sql = "CREATE TABLE orderderdeital (
		idorder INT(6),
		idmathang INT(6) ,
		soluong INT(6) , 
		PRIMARY KEY(idorder)
	)";
	if ($conn->query($sql) === TRUE) {
		echo "Tạo table thành công";
	} else {
		echo "Tạo table thất bại: " . $conn->error;
	}
	// Ngắt kết nối
	$conn->close();