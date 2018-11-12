
<?php
	$conn = new mysqli('localhost', 'root', '12345678', 'sys');
	
	if ($conn->connect_error) {
		die("Kết nối không thành công: " . $conn->connect_error);
	} 
	$sql = 'SELECT *FROM sinhvien';
	$queryData = $conn->prepare($sql);
	$queryData ->execute();
	$posts = $queryData -> fetchAll();
	?>

	<table class="table">
	<thead>
		<th>masv</th>
		<th>hoten</th>
		<th>ngaysinh</th>
		<th>diemtb</th>
		<th>quequan</th>
		<th>maganh</th>
		<th>makhoa</th>
	</thead>		
	<tbody>
		<?php
			foreach ($posts as $post ) {
				# code...
		?>
		<tr postId="post-<?=$post['masv']?>">
			<td><?=$post['hoten']?></td>
			<td><?=$post['ngaysinh']?></td>
			<td><?=$post['diemtb']?></td>
			<td><?=$post['quequan']?></td>
			<td><?=$post['maganh']?></td>
			<td><?=$post['makhoa']?></td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>