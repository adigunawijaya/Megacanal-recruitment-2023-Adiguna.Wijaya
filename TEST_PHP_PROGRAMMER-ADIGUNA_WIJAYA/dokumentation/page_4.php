<?php  include('../layout/header.php'); ?>

    <div class="container">
		<div class="card col-sm-11 col-md-11 justify-content-center">
			<div class="view overlay shadow">
				<img class="card-img-top" src="<?=base_url('assets/images/soal-no.3.jpg');?>" alt="Card image cap">
				<a href="<?=base_url('assets/dokumen/Megacanal-recruitment-2023.pdf');?>" class="white-text d-flex justify-content-end">
					<h5>Lihat Detail Soal <i class="fas fa-angle-double-right mr-3"></i></h5>
				</a>

				<a>
					<div class="mask rgba-white-slight"></div>
				</a>
			</div>

			<div class="card-body elegant-color white-text rounded-bottom">
				<h4 class="card-title">Test Nomer 3</h4>
				<hr class="hr-light">

				<p class="card-text white-text mb-4">
					Berdasarkan SOAL TEST - PHP PROGRAMMER pada nomer 3, saya diminta untuk membuat halaman web yang digunakan untuk menyimpan data kedalam Database MySQL dengan structur tabel seperti gambar diatas.
				</p>
				
				<p class="card-text white-text mb-4">
                    Dalam proses pembuatan saya awali dengan membuat database dengan menggunakan phpMyAdmin. phpMyAdmin itu sendiri adalah sebuah aplikasi berbasis web yang digunakan untuk melakukan pengelolaan database MySQL dan atau tool yang paling populer untuk mengelola database MySQL. Dukungan pada semua sistem operasi juga menjadi poin positif yang dimiliki oleh phpMyAdmin, pada phpMyAdmin pengaturan yang dapat Anda lakukan mencakup import, export, menghapus, serta menjalankan query SQLdatabase, Selain itu phpMyAdmin mendukung beberapa format data seperti SQL, MS Word 2000, JSON, SQL, CVS, CodeGen dan masih banyak format lainnya.
                </p>

                <h line-height: 16px>Ada beberapa pilihan cara menjalankan phpMyAdmin yang bisa di gunakan:</h>
                <ol class="mt-2">
                    <li>
                        Menjalankan phpMyAdmin pada website sudah online (memiliki hosting) bisa Melalui cPanel dan / atau menggunakan file instalasi phpMyAdmin. Cara membuka phpMyAdmin menggunakan file instalasi phpMyAdmin tetap memerlukan akses ke cPanel terlebih dahulu untuk menyalin instalasi phpMyAdmin ke hosting.
                    </li>
                    <li>
                        Menjalankan phpMyAdmin pada website offline (belum memiliki hosting) dengan menggunakan localhost phpMyAdmin atau sering disebut dengan istilah localhost XAMPP, untuk mempermudah pengelolaan database di server lokal. Biasanya sering dilakukan para web developer menggunakan server lokal atau localhost sebelum suatu website atau aplikasi diluncurkan untuk mengecek tampilan dan koneksi database terlebih dulu.
                    </li>
                </ol>

				<p class="card-text white-text mb-4">
                    Dalam hal membuat database di phpMyAdmin ini saya menggunakan localhost yang berada pada fitur XAMPP.
                </p>

				<p class="card-text white-text mb-4">
                    Kemudian saya Lanjutkan dengan membuat file php koneksi pada folder config agar data pada php dapat terhubung dengan database phpMyAdmin. Lalu saya melakukan pengkodean html, css, dan javascript untuk membuat tampilan web dan menambahkan kode mysql pada file php untuk memproses / mengolah data ke database phpMyAdmin.
                </p>
				
				<p class="card-text white-text mb-4">
                    Setelah itu dikarenakan halaman web yang akan saya buat pada soal test nomer 3 ini berhubungan dengan tabel, maka dari itu saya menggunakan sebuah plugin bernama Datatables. DataTables itu sendiri merupakan sebuah plugin yang dibangun dengan jQuery untuk menampilkan data kedalam tabel yang sudah terintegrasi dengan fitur searching dan pagination (penomoran halaman) sehingga memudahkan kita untuk membaca tabel dan menerapkan tabel pada sistem berbasis web.
                </p>

				<a href="index.php" class="white-text d-flex justify-content-first">
					<h5><i class="fas fa-angle-double-left"></i> Kembali</h5>
				</a>
			</div>
		</div>	
	</div>

<?php include('../layout/footer.php');?>