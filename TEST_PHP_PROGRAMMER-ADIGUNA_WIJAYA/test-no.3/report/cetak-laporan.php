<?php include "../../_config/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php   
			$sql_judul = mysqli_query($con, "SELECT * FROM judul") or die (mysqli_error($con));
			while($data = mysqli_fetch_array($sql_judul)) { 
		?>
			<h3 align="center"><?=$data['judul_1']?></h3>
			<h3 align="center"><?=$data['judul_2']?><br><br></h3>
			<h4>
				<?=$data['sub_judul_1']?>
				<br><?=$data['sub_judul_2']?>
			</h4>
		<?php
			}
		?>
	</head>

	<table border="1" cellspacing="0" style="width: 100%">
		<thead align="center">
			<tr>			
				<th>No.</th>
				<th>No. Pesanan</th>
				<th>Tanggal</th>
				<th>Nama Supplier</th>
				<th>Nama Produk</th>
				<th>Total</th>
			</tr>
		</thead>

		<tbody>
			<?php
				$no = 1;
				$sql_pesanan = mysqli_query($con, "SELECT * FROM t_pesanan") or die (mysqli_error($con));
				while($data = mysqli_fetch_array($sql_pesanan)) { 
			?>
				<tr>
					<td align="center"><?=$no++?>.</td>
					<td align="center"><?=$data['no_pesanan']?></td>
					<td align="center"><?=tgl_indo($data['tanggal'])?></td>
					<td align="center"><?=$data['nm_supplier']?></td>
					<td align="center"><?=$data['nm_produk']?></td>
					<td align="center"><?=$data['total']?></td>
				</tr>
			<?php
				}
			?>
		</tbody>
	</table>

	<script>
		window.print();
	</script>
</html>