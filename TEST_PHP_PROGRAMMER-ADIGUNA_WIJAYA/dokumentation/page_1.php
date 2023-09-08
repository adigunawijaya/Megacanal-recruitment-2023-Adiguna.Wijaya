<?php  include('../layout/header.php'); ?>

	<div class="container">
		<div class="card col-sm-11 col-md-11 justify-content-center">
			<div class="view overlay shadow">
				<img class="card-img-top" src="<?=base_url('assets/images/spesification.png');?>" alt="Card image cap">
				<a>
					<div class="mask rgba-white-slight"></div>
				</a>
			</div>

			<div class="card-body elegant-color white-text rounded-bottom">
				<h4 class="card-title">SPESIFIKASI PROGRAM</h4>
				<hr class="hr-light">

				<p class="card-text white-text mb-4">
					<h5><u>PROGRAM TEST PHP PROGRAMMER PT. INTEGRASI MEGAKANAL AGENSI</u></h5></p>
					<ol class="mt-2" type="1">
						<li>XAMPP Versi 3.3.0 :</li>
						<ol type="a">
							<li>
								Apache : Browser(Google Chrome) -> phpMyAdmin Versi 5.2.1
							</li>
							<li>
								MySql -> mysqli
							</li>
						</ol>
						<li>Visual Studio Code Versi 1.61.2.0</li>
						<li>PHP Versi 8.2.4</li>
						<li>CSS : Bootstrap Versi 4.3.1</li>
						<li>JavaScript : JQUERY -> AJAX -> JSON</li>
						<li>Datatables</li>
					</ol>

					<ol style="margin-left:-20px;">1) XAMPP : </ol>
					<ol style="margin-left:10px; margin-top:-15px;">
						Saya menggunakan XAMPP untuk menjalankan Apache dan MySql. XAMPP itu sendiri adalah sebuah software web server yang digunakan untuk mengembangkan dan merancang situs website pada server lokal. Aplikasi ini juga sering disebut sebagai localhost XAMPP sebab fungsinya sebagai pembuat server lokal di perangkat komputer. Aplikasi ini bersifat open source dan bisa dioperasikan pada berbagai sistem operasi, seperti Windows, Mac OS, dan Linux. Dalam aplikasi ini terdapat berbagai program yang diperlukan untuk membangun dan merancang situs website. Beberapa program yang dimaksud tersebut antara lain adalah Apache, MySQL/MariaDB, PHP, serta Perl.
					</ol>

					<ol style="margin-left:10px;">
						Setelah Apache berjalan pada control panel XAMPP barulah saya bisa menjalankan (localhost: phpMyAdmin dan program) yang sedang dibuat pada browser seperti yang saya gunakan adalah Google Chrome. Setelah itu saya membuat database pada phpMyAdmin.
					</ol>

					<ol style="margin-left:10px;">
						Sedangkan setelah MySql berjalan pada control panel XAMPP barulah saya dapat menghubungkan antara program dengan database dengan menggunkan query mysqli.
					</ol>

					<ol style="margin-left:-20px;">2) Visual Studio Code : </ol>
					<ol style="margin-left:10px; margin-top:-15px;">
						Saya menggunakan Visual Studio Code untuk melakukan pengkodean php, mysqli, html, javascript, css, dll untuk membangun program yang saya buat ini. Visual Studio Code itu sendiri adalah aplikasi editor  teks gratis di kembangkan oleh Microsoft yang dapat digunakan di semua bahasa pemrograman yang ada tanpa perlu berganti aplikasi editor, serta dapat dijalankan di berbagai platform Operating System (OS) seperti windows, linux , dan mac OS. Visual Studio Code memudahkan para Programmer saat berganti bahasa pemrograman tanpa perlu berganti aplikasi editor serta memahami dan konfigurasi  tools kembali di aplikasi editor  barunya. Visual Studio Code juga memberikan kebebasan kepada penggunanya dalam tema, debugger, extension, dan lainnya.
					</ol>

					<ol style="margin-left:-20px;">3) PHP : </ol>
					<ol style="margin-left:10px; margin-top:-15px;">
						Di dalam Visual Studio Code saya mulai membangun projek dengan diawali membuat file php yang kemudian saya tuliskan dengan sintaks php, menuliskan beberapa kode php function, dan menuliskan kode php dalam penggunaan dengan bahasa pemrograman lainnya, seperti : HTML, CSS, MySql dan JavaScript.
					</ol>

					<ol style="margin-left:-20px;">4) CSS : </ol>
					<ol style="margin-left:10px; margin-top:-15px;">
						Setelah program berhasil dibangun, selanjutnya saya tambahkan file css native dengan menuliskan beberapa kode pada file css dan css framework seperti Bootstrap untuk memperindah tampilan program yang kemudian memanggilnya pada layout header; css natife secara offlien dan bootstrap secara online. CSS adalah bahasa Cascading Style Sheet dan biasanya digunakan untuk mengatur tampilan elemen yang tertulis dalam bahasa markup, seperti HTML. CSS berfungsi untuk memisahkan konten dari tampilan visualnya di situs. CSS Native adalah penulisan kode css dari nol ketika melakukan perancangan sebuah website, sedangkan Bootstrap itu sendiri adalah framework CSS yang opensource dan bebas untuk merancang situs web dan aplikasi web. Framework ini berisi templat desain berbasis HTML dan CSS untuk tipografi, formulir, tombol, navigasi, dan komponen antarmuka lainnya, serta juga ekstensi opsional JavaScript. Tidak seperti kebanyakan framework web lainnya, framework ini hanya fokus pada pengembangan front-end saja.
					</ol>

					<ol style="margin-left:-20px;">5) JAVASCRIPT : </ol>
					<ol style="margin-left:10px; margin-top:-15px;">
						Kemudian saya membuat file data.js dan menuliskan beberapa kode javascript dengan memanfaatkan library JavaScript seperti jquery untuk mengatur interaksi antara JavaScript dengan HTML atau website. sedangkan didalam jquery diantaranya saya menggunakan ajax agar dapat mengirimkan dan menerima data dari server tanpa harus mereload keseluruhan halaman. Setelah itu saya membuat file data.json dan mengambil beberapa data dummy dari https://dummyjson.com/docs/products yang kemudian saya masukan kedalam .json dengan nama data.json dan untuk menampilkan data.json tersebut saya memanggilnya menggunakan ajax pada file php ke dalam Datatables
					</ol>

					<ol style="margin-left:-20px;">6) Datatables : </ol>
					<ol style="margin-left:10px; margin-top:-15px;">
						Sedangkan untuk membuat tabel itu sendiri saya membuat dengan memanfaatkan sebuah plugin bernama Datatables. DataTables itu sendiri merupakan sebuah plugin yang dibangun dengan jQuery untuk menampilkan data kedalam tabel yang sudah terintegrasi dengan fitur searching dan pagination (penomoran halaman) sehingga memudahkan kita untuk membaca tabel dan menerapkan tabel pada sistem berbasis web.
					</ol>
				</p>

				<p class="card-text white-text mb-4">
					<ol style="margin-left:10px;">
						Terakhir karena sebelumnya sudah dipastikan bahwa program ini sudah terhubung dengan database, maka dari itu saat ini tinggal menuliskan query mysqli pada proses pengolahan data seperti input, output, update dan delete dapat berfungsi dan terkoneksi kedatabase dengan baik.
					</ol>
				</p>

				<a href="index.php" class="white-text d-flex justify-content-first">
					<h5><i class="fas fa-angle-double-left"></i> Kembali</h5>
				</a>
			</div>
		</div>	
	</div>
		
<?php include('../layout/footer.php');?>
