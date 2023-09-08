<?php  include('../layout/header.php'); ?>

	<div class="container">
		<div class="card col-sm-11 col-md-11 justify-content-center">
			<div class="view overlay shadow">
				<img class="card-img-top" src="<?=base_url('assets/images/soal-no.1-no.2.jpg');?>" alt="Card image cap">
				<a href="<?=base_url('assets/dokumen/Megacanal-recruitment-2023.pdf');?>" class="white-text d-flex justify-content-end">
					<h5>Lihat Detail Soal <i class="fas fa-angle-double-right mr-3"></i></h5>
				</a>

				<a>
					<div class="mask rgba-white-slight"></div>
				</a>
			</div>

			<div class="card-body elegant-color white-text rounded-bottom">
				<h4 class="card-title">Soal test no.1 dan no.2</h4>
				<hr class="hr-light">

				<p class="card-text white-text mb-4">
					Berdasarkan SOAL TEST - PHP PROGRAMMER yang saya terima dari via email, saya diminta untuk membuat aplikasi kecil menggunakan PHP atau framework yang lain, yang dimana aplikasi ini akan mengolah data yang dapat diambil, diolah dan ditampilkan ke subuah tabel dengan memanfaatkan fungsi JSON (JavaScript Object Notation).
				</p>

				<p class="card-text white-text mb-4">
					Dikarenakan aplikasi yang akan saya buat ini berhubungan dengan tabel, maka dari itu saya menggunakan sebuah plugin bernama Datatables. DataTables itu sendiri merupakan sebuah plugin yang dibangun dengan jQuery untuk menampilkan data kedalam tabel yang sudah terintegrasi dengan fitur searching dan pagination (penomoran halaman) sehingga memudahkan kita untuk membaca tabel dan menerapkan tabel pada sistem berbasis web.
				</p>

				<p class="card-text white-text mb-4">
					Pada soal nomer 1 diawali dengan membuat product list yang akan menampilkan data dari json, data berupa tabel yang berisi informasi produk (gambar, title, category dll).
				</p>

				<p class="card-text white-text mb-4">
					Dalam hal ini saya mengambil beberapa data dummy dari https://dummyjson.com/docs/products yang kemudian saya masukan kedalam file .json dengan nama data.json dan untuk menampilkan data.json tersebut saya memanggilnya menggunakan ajax pada file php ke dalam Datatables, lalu untuk soal nomer 2 saya menambahkan dialog modal agar bisa menampilkan data pada button view yang berada di menu aksi data table.
				</p>

				<p class="card-text white-text mb-4">
					Untuk framework css saya menggunakan bootstrap dan saya menambahkan dengan menuliskan beberapa kode css pada file data.css yang saya buat dengan alasan bootsrap yang saya aplikasikan dilakukan secara online, selain itu sayapun menambahkan beberapa kode css dengan menuliskan style pada beberapa bagian di file php.
				</p>
				
				<a href="index.php" class="white-text d-flex justify-content-first">
					<h5><i class="fas fa-angle-double-left"></i> Kembali</h5>
				</a>
			</div>
		</div>	
	</div>

	


<?php include('../layout/footer.php');?>
