<!DOCTYPE html>
<html>
<head>
	<title>Gizi Buruk | DempsterShafer</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">	
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</head>
<body>	
	<!-- membuat menu navigasi -->
	<nav class="navbar navbar-default">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><?php include("_header.php");?></a>
			</div>
			
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="pasien_add_fm.php">Proses Diagnosa <span class="sr-only">(current)</span></a></li>
					<li><a href="informasi.php">Demo</a></li>
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="daftar_penyakit.php">Daftar Penyakit</a></li>
				</ul>
				
				<ul class="nav navbar-nav navbar-right">					
					<li><button type="button" class="btn btn-primary navbar-btn" data-toggle="modal" data-target="#modal-login">Login Administrator</button></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>	

	<!-- Modal -->
	<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Modal Login</h4>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control">
						</div>						
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button type="button" class="btn btn-primary">Login</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modal-daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Modal Daftar</h4>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label>Nama</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control">
						</div>						
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<button type="button" class="btn btn-primary">Daftar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- akhir modal -->

	<!-- akhir menu navigasi -->

	<div class="container">			
		<!-- membuat jumbotron -->
		<div class="jumbotron">
			<center>			
				<h2>Informasi Penyakit Penyakat dan Tanaman Padi</h2>
                
                <table align="right">
                  <tbody>
                    <tr>
                      <td colspan="2"><a href="https://id.wikipedia.org/wiki/Berkas:Luxor,_Banana_Island,_Banana_Tree,_Egypt,_Oct_2004.jpg"><img alt="Luxor, Banana Island, Banana Tree, Egypt, Oct 2004.jpg" src="images/pisang1.jpg" height="365" width="250"></a></td>
                    </tr>
                    <tr>
                      <td colspan="2">Pisang di perkebunan</td>
                    </tr>
                    <tr>
                      <th colspan="2"><a href="https://id.wikipedia.org/wiki/Klasifikasi_ilmiah" title="Klasifikasi ilmiah">Klasifikasi ilmiah</a></th>
                    </tr>
                    <tr>
                      <td>Kingdom:</td>
                      <td><a href="https://id.wikipedia.org/wiki/Plantae" title="Plantae">Plantae</a></td>
                    </tr>
                    <tr>
                      <td>Divisi:</td>
                      <td><a href="https://id.wikipedia.org/wiki/Flowering_plant" title="Flowering plant">Magnoliophyta</a></td>
                    </tr>
                    <tr>
                      <td>Kelas:</td>
                      <td><a href="https://id.wikipedia.org/wiki/Liliopsida" title="Liliopsida">Liliopsida</a></td>
                    </tr>
                    <tr>
                      <td>Ordo:</td>
                      <td><a href="https://id.wikipedia.org/w/index.php?title=Musales&action=edit&redlink=1" title="Musales (halaman belum tersedia)">Musales</a></td>
                    </tr>
                    <tr>
                      <td>Famili:</td>
                      <td><a href="https://id.wikipedia.org/wiki/Musaceae" title="Musaceae">Musaceae</a></td>
                    </tr>
                    <tr>
                      <td>Genus:</td>
                      <td><em><a href="https://id.wikipedia.org/w/index.php?title=Musa_(Musaceae)&action=edit&redlink=1" title="Musa (Musaceae) (halaman belum tersedia)">Musa</a></em></td>
                    </tr>
                    <tr>
                      <th colspan="2">Spesies</th>
                    </tr>
                    <tr>
                      <td colspan="2"><ul>
                        <li><em>M. acuminata</em></li>
                        <li><em>M. balbisiana</em></li>
                        <li><em>M. ×paradisiaca</em> (invalid)</li>
                        <li><em>M. sapientum</em> (invalid)</li>
                      </ul></td>
                    </tr>
                  </tbody>
                </table>
                <div>
                  <h2>Cara Budidaya PADI SAWAH</h2>
                  <div id="attachment_1820"><a href="http://mitalom.com/wp-content/uploads/2016/06/Gambar-Cara-TANAM-PADI-Sawah.jpg"><img src="http://localhost/padi_bayes/14%20Tahap%20Cara%20Sukses%20TANAM%20PADI%20Yang%20Baik%20Hasil%20Melimpah%20Berkualitas_files/Gambar-Cara-TANAM-PADI-Sawah-300x222.jpg" alt="Cara TANAM PADI Sawah Yang Baik dan Benar" srcset="http://mitalom.com/wp-content/uploads/2016/06/Gambar-Cara-TANAM-PADI-Sawah-300x222.jpg 300w, http://mitalom.com/wp-content/uploads/2016/06/Gambar-Cara-TANAM-PADI-Sawah-768x567.jpg 768w, http://mitalom.com/wp-content/uploads/2016/06/Gambar-Cara-TANAM-PADI-Sawah.jpg 906w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="222"></a>
                    <p>Penanaman PADI SAWAH (Foto by : Nurhadiyati)</p>
                  </div>
                  <p><strong>Budidaya Tanaman Pangan </strong>– Padi merupakan salah satu jenis tanaman pangan paling penting didunia. Padi dalam bahasa latin disebut <em>Oryza sativa L</em>.                                    adalah salah satu tanaman budidaya yang sangat vital di Indonesia.                                     Meskipun produksi padi dunia berada pada urutan ketiga setelah jagung                                     dan gandum, namun padi merupakan makanan pokok sumber karbohidrat utama                                     bagi sebagian besar masyarakat dunia. Di Indonesia sendiri padi                                     menempati urutan pertama sebagai bahan makanan pokok sebagian besar                                     masyarakat. Namun sayangnya sampai saat ini produksi padi nasional belum                                    mampu mencukupi kebutuhan masyarakat kita, dengan kata lain Indonesia                                     belum mampu berswasembada padi. Sebagai negara agraris dengan lahan                                     sawah yang luas, semestinya produksi padi di Indonesia melimpah. Minimal                                    untuk kebutuhan didalam negeri. Namun kenyataannya sangat ironis, kita                                     sampai sekarang masih mengimpor beras dan lebih parahnya lagi Indonesia                                     adalah pengimpor beras terbesar di dunia.</p>
                  <p>Negara produsen padi terkemuka adalah <em>Republik Rakyat Tiongkok</em> (28% dari total produksi dunia), <em>India</em> (21%), dan <em>Indonesia</em> (9%). Namun hanya sebagian kecil produksi padi dunia yang diperdagangkan antar negara (hanya 5%-6% dari total produksi dunia). <em>Thailand</em> merupakan pengekspor padi utama (26% dari total padi yang diperdagangkan di dunia) diikuti <em>Vietnam</em> (15%) dan <em>Amerika Serikat</em> (11%). Indonesia merupakan pengimpor padi terbesar dunia (14% dari padi yang diperdagangkan di dunia) diikuti <em>Bangladesh</em> (4%), dan <em>Brasil</em> (3%).Produksi padi Indonesia pada 2006 adalah 54 juta ton , kemudian                                     tahun 2007 adalah 57 juta ton (angka ramalan III), meleset dari target                                     semula yang 60 juta ton akibat terjadinya kekeringan yang disebabkan                                     gejala ENSO.(<em>wikipedia</em>)</p>
                  <div> </div>
                  <p>Program Peningkatan Produksi Beras Nasional (P2BN) mencanangkan                                     peningkatan produksi beras sebesar 5 %. Hal ini bisa ditempuh dengan                                     berbagai cara yakni dengan perluasan areal penanaman padi dan dengan                                     intensifikasi. Intensifikasi bisa ditempuh dengan penerapan PTT                                     (Pengelolaan Tanaman Terpadu)&rdquo; yang diawali dengan pemilihan benih, cara                                    persemaian dan cara tanam yang baru karena mengubah kebiasaan petani,                                     dengan komponen PTT yaitu menggunakan varietas unggul baru/varietas                                     hibrida( benih berkualitas) dan umur bibit muda, bagan warna daun,                                     pengendailan HPT secara terpadu. Balai Pengkajian Teknologi Pertanian                                     menjadi pelaksana langsung di lapangan untuk membantu memperkenalkan                                     beberapa varietas unggul baru dan mendampingi petani dalam menerapkan                                     PTT. Adapun tujuan penerapan PTT untuk meningkatkan pendapatan petani                                     melalui penerapan teknologi yang cocok untuk kondisi setempat yang dapat                                    meningkatkan hasil gabah dan mutu beras serta menjaga kelestarian                                     lingkungan.</p>
                  <p>Mengetahui dan memahami pemilihan benih, penyiapan persemaian,                                     pengolahan tanah,, cara semai, cara tanam padi sawah akan mendapatkan                                     tanaman yang sehat, produktivitas yang tinggi dengan masukan biaya yang                                     rendah. Tanaman yang sehat merupakan persyaratan utama yang harus                                     dipenuhi agar produktivitas tinggi. Untuk itu maka sejak awal, tanaman                                     padi harus di perlakukan sebaik mungkin agar air, hara dalam tanah yang                                     tersedia dapat di manfaatkan semaksimal mungkin.</p>
                  <h2>A. Cara Memilih Benih Padi Yang Baik</h2>
                  <p>Benih bermutu merupakan salah satu komponen teknologi yang penting                                     untuk meningkatkan produksi dan pendapatan usahatani padi. Saat ini                                     dapat diperoleh berbagai varietas unggul yang memiliki karakteristik                                     sesuai dengan kondisi wilayah dan keinginan pasar. Varietas unggul                                     mempunyai keunggulan sepeti potensi hasil tinggi, tahan terhadap hama                                     dan penyakit, toleran terhadap cekaman lingkungan. Dengan menggunakan                                     benih bermutu/varietas unggul akan diperoleh bibit sehat, tegar (vigor                                     tinggi) dengan perakaran banyak, bibit lebih cepat tumbuh dan bibit                                     tumbuh seragam. Cara memilih benih yang baik dimana benih direndam dalam                                    larutan ZA 20 gr/liter air, kemudian benih yang mengambang/mengapung                                     dibuang. Dan benih yang tenggelam adalah benih yang baik untuk                                     dibudidayakan.</p>
                  <h2>B. Persiapan Persemaian dan Cara Menyemai Benih Padi</h2>
                  <div id="attachment_1821"><a href="http://mitalom.com/wp-content/uploads/2016/06/Gambar-semaian-BIBIT-PADI.jpg"><img src="http://localhost/padi_bayes/14%20Tahap%20Cara%20Sukses%20TANAM%20PADI%20Yang%20Baik%20Hasil%20Melimpah%20Berkualitas_files/Gambar-semaian-BIBIT-PADI-300x188.jpg" alt="Cara SEMAI BENIH Padi" srcset="http://mitalom.com/wp-content/uploads/2016/06/Gambar-semaian-BIBIT-PADI-300x188.jpg 300w, http://mitalom.com/wp-content/uploads/2016/06/Gambar-semaian-BIBIT-PADI.jpg 630w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="188"></a>
                    <p>Persemaian Bibit Padi</p>
                  </div>
                  <p><em>1. Buat bedengan dengan lebar 1,0 -1,2 m dan panjang disesuaikan dengan keperluan.</em></p>
                  <p>2. Luas persemaian untuk 1 hektar lahan adalah 400m2 (4 % dari luas tanam), dan drainase harus baik.</p>
                  <p>3. Tambahkan 2 kg bahan organik seperti kompos, pupuk kandang, serbuk kayu dan sekam yang sudah melapuk/abu).</p>
                  <p>4. Persemaian dilakukan 25 hari sebelum masa tanam, persemaian                                     dilakukan pada lahan yang sama atau berdekatan dengan petakan sawah yang                                    akan ditanami, hal ini dilakukan agar bibit yang sudah siap dipindah,                                     waktu dicabut dan akan ditanam mudah diangkut dan tetap segar. Bila                                     lokasi jauh maka bibit yang diangkut dapat stress bahkan jika terlalu                                     lama menunggu akan mati.</p>
                  <p>5. Benih yang dibutuhkan untuk ditanam pada lahan seluas 1 ha sebanyak 20 Kg.</p>
                  <p>6. Benih yang hendak disemai sebelumnya harus direndam terlebih                                     dahulu secara sempurna sekitar 2 x 24 jam, dalam ember atau wadah                                     lainnya. Hal ini dilakukan agar benih dapat mengisap air yang dibutuhkan                                    untuk perkecambahannya.</p>
                  <p>7. Bedengan persemaian dibuat seluas 100 m2/20 Kg. lahan untuk                                     persemaian ini sebelumnya harus diolah terlebih dahulu, pengolahan lahan                                    untuk persemaian ini dilakukan dengan cara pencangkulan hingga tanah                                     menjadi lumpur dan tidak lagi terdapat bongkahan tanah.</p>
                  <p>8. Lahan yang sudah halus lumpurnya ini kemudian dipetak-petak dan                                     antara petak-petak tersebut dibuat parit untuk mempernudah pengaturan                                     air.</p>
                  <p>9. Benih yang sudah direndam selama 2 x 24 jam dan sudah berkecambah ditebar dipersemaian secara hati-hati dan<br>
                    merata, hal ini didimaksudkan agar benih yang tumbuh tidak saling bertumpukan.</p>
                  <p>10. Benih tidak harus terbenam kedalam tanah karena dapat menyebabkan                                    kecambah terinfeksi pathogen (penyebab penyakit tanaman) yang dapat                                     menyebabkan busuknya kecambah.</p>
                  <p>11. Pemupukan lahan persemaian dilakukan kira-kira pada umur satu                                     minggu benih setelah ditanam (tabur). Kebutuhan pupuk yang digunakan                                     yaitu 2,5Kg Urea, 2,5Kg SP36 dan 1Kg KCL.</p>
                  <h2>C. Cara Pengolahan Tanah Untuk Persiapan Lahan BUDIDAYA PADI Sawah</h2>
                  <div id="attachment_1822"><a href="http://mitalom.com/wp-content/uploads/2016/06/Gambar-pengolahan-tanah-LAHAN-PADI.jpg"><img src="http://localhost/padi_bayes/14%20Tahap%20Cara%20Sukses%20TANAM%20PADI%20Yang%20Baik%20Hasil%20Melimpah%20Berkualitas_files/Gambar-pengolahan-tanah-LAHAN-PADI-300x188.jpg" alt="Cara Mengolah LAHAN PADI" srcset="http://mitalom.com/wp-content/uploads/2016/06/Gambar-pengolahan-tanah-LAHAN-PADI-300x188.jpg 300w, http://mitalom.com/wp-content/uploads/2016/06/Gambar-pengolahan-tanah-LAHAN-PADI.jpg 630w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="188"></a>
                    <p>Pengolahan lahan padi (Foto by : Asrul arul)</p>
                  </div>
                  <p>Pengolahan bertujuan untuk mengubah sifat fisik tanah agar lapisan                                     yang semula keras menjadi datar dan melumpur. Dengan begitu gulma akan                                     mati dan membusuk menjadi humus, aerasi tanah menjadi lebih baik,                                     lapisan bawah tanah menjadi jenuh air sehingga dapat menghemat air. Pada                                    pengolahan tanah sawah ini, dilakukan juga perbaikan dan pengaturan                                     pematang sawah serta selokan. Pematang (galengan) sawah diupayakan agar                                     tetap baik untuk mempermudah pengaturan irigasi sehingga tidak boros air                                    dan mempermudah perawatan tanaman. Tahapan pengolahan tanah sawah pada                                     prinsipnya mencakup kegiatan-kegiatan sebagai berikut :</p>
                  <p><em>a. Pembersihan</em></p>
                  <p>Pematang sawah dibersihkan dari rerumputan, diperbaiki, dan dibuat                                     agak tinggi. Fungsi utama pematang disaat awal untuk menahan air selama                                     pengolahan tanah agar tidak mengalir keluar petakan. Fungsi selanjutnya                                     berkaitan erat dengan pengaturan kebutuhan air selama ada tanaman                                     padi.Saluran atau parit diperbaiki dan dibersihkan dari rerumputan.                                     Kegiatan tersebut bertujuan agar dapat memperlancar arus air serta                                     menekan jumlah biji gulma yang terbawa masuk ke dalam petakan. Sisa                                     jerami dan sisa tanaman pada bidang olah dibersihkan sebelum tanah                                     diolah. Jerami tersebut dapat dibakar atau diangkut ke tempat lain untuk                                    pakan ternak, kompos, atau bahan bakar. Pembersihan sisa–sisa tanaman                                     dapat dikerjakan dengan tangan dan cangkul</p>
                  <p><em>b. Pencangkulan</em></p>
                  <p>Setelah dilakukan perbaikan pematang dan saluran, tahap berikutnya                                     adalah pencangkulan. Sudut–sudut petakan dicangkul untuk memperlancar                                     pekerjaan bajak atau traktor. Pekerjaan tersebut dilaksanakan bersamaan                                     dengan saat pengolahan<br>
                    tanah.</p>
                  <p><em>c. Pembajakan</em></p>
                  <p>Pembajakan dan penggaruan merupakan kegiatan yang berkaitan. Kedua                                     kegiatan tersebut bertujuan agar tanah sawah melumpur dan siap ditanami                                     padi. Pengolahan tanah dilakukan dengan dengan menggunakan mesin                                     traktor. Sebelum dibajak, tanah sawah digenangi air agar gembur. Lama                                     penggenangan sawah dipengaruhi oleh kondisi tanah dan persiapan tanam.</p>
                  <p>Pembajakan biasanya dilakukan dua kali. Dengan pembajakan ini                                     diharapkan gumpalan–gumpalan tanah terpecah menjadi kecil–kecil.                                     Gumpalan tanah tersebut kemudian dihancurkan dengan garu sehingga                                     menjadi lumpur halus yang rata. Keuntungan tanah yang telah diolah                                     tersebut yaitu air irigasi dapat merata. Pada petakan sawah yang lebar,                                     perlu dibuatkan bedengan–bedengan. Antara bedengan satu dengan bedeng                                     lainnya berupa saluran kecil. Ujung saluran bertemu dengan parit kecil                                     di tepi pematang yang berguna untuk memperlancar air irigasi.</p>
                  <h2>D. Pelaksanaan Penanaman Bibit PADI SAWAH</h2>
                  <div id="attachment_1823"><a href="http://mitalom.com/wp-content/uploads/2016/06/Gambar-Cara-MENANAM-PADI-sawah.jpg"><img src="http://localhost/padi_bayes/14%20Tahap%20Cara%20Sukses%20TANAM%20PADI%20Yang%20Baik%20Hasil%20Melimpah%20Berkualitas_files/Gambar-Cara-MENANAM-PADI-sawah-300x188.jpg" alt="Cara MENANAM BIBIT Padi" srcset="http://mitalom.com/wp-content/uploads/2016/06/Gambar-Cara-MENANAM-PADI-sawah-300x188.jpg 300w, http://mitalom.com/wp-content/uploads/2016/06/Gambar-Cara-MENANAM-PADI-sawah.jpg 630w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="188"></a>
                    <p>Penanaman BIBIT PADI (Foto by : Nurhadiyati)</p>
                  </div>
                  <p>Setelah persiapan lahan beres maka bibit pun siap ditanam. Bibit                                     dianjurkan untuk ditanam semuda mungkin, biasanya dipindah saat umur 20                                     hari. Ciri bibit yang siap dipindah ialah berdaun 5-6 helai, tinggi                                     22-25 cm, batang bawah besar dan keras, bebas dari hama dan penyakit                                     sehingga pertumbuhannya seragam. Bibit ditanam dengan cara dipindah dari                                    bedengan persemaian ke petakan sawah, dengan cara bibit dicabut dari                                     bedengan persemaian dengan menjaga agar bagian akarnya terbawa semua dan                                    tidak rusak. Setelah itu bibit dikumpulkan dalam ikatan-ikatan lalu                                     ditaruh disawah dengan sebagian akar terbenam ke air.</p>
                  <p>Bibit ditanam cukup satu bibit per lubang tanam, dengan posisi tegak                                     dan apabila petani masih belum terbiasa dengan menanam satu bibit, pada                                     tahap awal dapat menanam 2-3 bibit per lubang tanam, dengan kedalaman                                     tanam cukup 2 cm, karena jika kurang dari 2 cm bibit akan gampang                                     hanyut. Pengaturan jarak tanam dilakukan dengan caplak, Jarak tanam padi                                    model tegel biasanya 20 cm x 20 cm atau 25 cm x 25 cm. Model sistem                                     tanam jajar legowo juga sudah banyak diterapkan yaitu legowo 2 : 1 (40 x                                    20 x 10 cm) adalah cara tanam berselang seling 2 baris dan 1 bari                                     kosong. Jarak antar baris tanaman yang dikosongkan di sebut satu unit.</p>
                  <h2>E. Cara PEMUPUKAN PADI Sawah</h2>
                  <p>Tanah yang dibudidayakan secara terus menerus cenderung kekurangan                                     unsur hara bagi tanaman, oleh karena itu diperlukan penambahan unsur                                     hara yang berasal dari pupuk organik maupun pupuk anorganik. Agar                                     efektif dan efisien penggunaan pupuk disesuaikan dengan kebutuhan                                     tanaman dan ketersediaan hara dalam tanah. Kebutuhan N tanaman dapat                                     diketahui dengan cara mengukur tingkat kehijauan warna daun padi dengan                                     menggunakan Bagan Warna Daun (BWD).</p>
                  <p>Cara menentukan waktu aplikasi pupuk N dengan menggunakan BWD dapat dilakukan dengan 2 cara sebagai berikut :</p>
                  <p>1. Cara pertama adalah waktu tetap, yaitu waktu pemupukan di tetapkan lebih dahulu berdasarkan tahap<br>
                    pertumbuhan tanaman, antara lain fase   pada saat anakan akif dan pembentukan malai dan saat primordia</p>
                  <p>2. Cara kedua adalah waku pemberian pupuk berdasarkan nilai pembacaan                                    BWD yang sebenarnya yaitu penggunaan BWD dimulai ketika tanaman 14 HST,                                    kemudian secara periodik diulangi 7-10 hari sekali sampai diketahui                                     nilai kritis saat pupuk N harus diaplikasikan.</p>
                  <h2>F. Perawatan dan Pemeliharaan PADI SAWAH</h2>
                  <p>Perawatan dan pemeliharaan tanaman sangat penting dalam pelaksanaan                                     budidaya padi sawah. Hal-hal yang sering dilakukan oleh para petani                                     adalah penyiangan (pengendalian gulma). Gulma merupakan tumbuhan                                     pengganggu yang hidup bersama tanaman yang dibudidayakan dan pada                                     umumnya sangat merugikan tanaman padi . Disamping dapat menjadi tanaman                                     inang beberapa hama dan penyebab penyakit, gulma merupakan pesaing untuk                                    unsur hara air, tempat dan sinar matahari. Apalagi gulma memiliki                                     sistem perakaran yang sama dengan padi sehingga unsur makanan yang                                     diperlukan oleh gulma dan padi berasal dari lapisan tanah yang sama.                                     Penyiangan gulma dilakukan 2 tahap, dimana tahap pertama penyiangan                                     dilakukan pada saat umur tanaman kurang lebih 15 hari dan tahap kedua                                     pada saat umur tanaman berumur 30-35 hari. Penyiangan yang dilakukan                                     dengan cara mencabut gulma dan dimatikan dengan atau tanpa menggunakan                                     alat, biasanya penyiangan ini dilakukan bersamaan dengan dengan kegiatan                                    penyulaman.</p>
                  <h2>G. Tanda-tanda Padi Siap Panen dan Cara Panen Padi</h2>
                  <div id="attachment_1824"><a href="http://mitalom.com/wp-content/uploads/2016/06/Gambar-CIRI-CIRI-Padi-Siap-Panen.jpg"><img src="http://localhost/padi_bayes/14%20Tahap%20Cara%20Sukses%20TANAM%20PADI%20Yang%20Baik%20Hasil%20Melimpah%20Berkualitas_files/Gambar-CIRI-CIRI-Padi-Siap-Panen-300x188.jpg" alt="Ciri-ciri PADI Siap Panen" srcset="http://mitalom.com/wp-content/uploads/2016/06/Gambar-CIRI-CIRI-Padi-Siap-Panen-300x188.jpg 300w, http://mitalom.com/wp-content/uploads/2016/06/Gambar-CIRI-CIRI-Padi-Siap-Panen.jpg 630w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="188"></a>
                    <p>Padi siap panen (Foto by : Alief Adja)</p>
                  </div>
                  <p>Tujuan pemanenan padi adalah untuk mendapatkan gabah dari lapangan                                     pada tingkat kematangan optimal, mencegah kerusakan dan kehilangan hasil                                    seminimal mungkin. Pemanenan padi tidak akan menguntungkan dan                                     memuaskan jika prosesnya dilakukan dengan cara yang kurang benar dan                                     pada umur panen yang tidak tepat. Cara panen yang tidak baik akan                                     menurunkan kehilangan hasil secara kuantitatif, sedang saat panen yang                                     tepat akan menentukan kualitas gabah dan beras. Panen harus dilakukan                                     bila bulir padi sudah cukup dianggap masak. Panen yang kurang tepat                                     dapat menurunkan kualitas dari gabah maupun beras.</p>
                  <p><em>1. Ciri-ciri Padi Siap Panen ;</em></p>
                  <p>&gt; Daun bendera telah mengering dan 95% gabah sudah menguning<br>
                    &gt; Umur optimal malai 30 – 35 hari terhitung sejak hari sesudah berbunga (HSB). Tergantung varietas yang dibudidayakan<br>
                    &gt; Kadar air gabah berkisar antara 21 – 26%<br>
                    &gt; Kerontokan gabah sekitar 16 – 30 % (Cara mengukurnya dengan meremas malai dengan tangan)</p>
                  <p><em>2. Peralatan Panen Padi</em></p>
                  <p>Ada beberapa peralatan yang dibutuhkan dalam memanen padi, antara lain sebagai berikut :<br>
                    &gt; Ani-ani<br>
                    &gt; Sabit biasa<br>
                    &gt; Sabit bergerigi<br>
                    &gt; Mesin pemanen padi seperti Reaper<br>
                    &gt; Karung goni/ sak<br>
                    &gt; Tali</p>
                  <p><em>3. Cara Panen Padi</em></p>
                  <div id="attachment_1825"><a href="http://mitalom.com/wp-content/uploads/2016/06/Gambar-CARA-PANEN-Padi.jpg"><img src="http://localhost/padi_bayes/14%20Tahap%20Cara%20Sukses%20TANAM%20PADI%20Yang%20Baik%20Hasil%20Melimpah%20Berkualitas_files/Gambar-CARA-PANEN-Padi-300x188.jpg" alt="Cara Memanen Padi" srcset="http://mitalom.com/wp-content/uploads/2016/06/Gambar-CARA-PANEN-Padi-300x188.jpg 300w, http://mitalom.com/wp-content/uploads/2016/06/Gambar-CARA-PANEN-Padi.jpg 630w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="188"></a>
                    <p>Cara panen padi (Foto by : Nurhadiyati)</p>
                  </div>
                  <p>Dalam melakukan pemanenan padi dapat dilakukan dengan berbagai cara,                                     tergantung dari alat yang digunakan, varietas padi dan cara merontokkan                                     gabah yang akan dilakukan. Berikut ini beberapa cara dalam memanen padi;</p>
                  <p>&gt; Ani-ani umumnya digunakan petani untuk memanen padi lokal yang                                     tahan rontok dan tanaman padi berpostur tinggi dengan cara memotong pada                                    tangkainya.<br>
                    &gt; Cara panen padi varietas unggul baru dengan sabit dapat dilakukan                                     dengan cara potong atas, potong tengah atau potong bawah tergantung cara                                    perontokannya.<br>
                    &gt; Cara panen dengan potong bawah, umumnya dilakukan bila                                     perontokannya dengan cara dibanting/digebot atau menggunakan pedal                                     thresher<br>
                    &gt; Panen padi dengan cara potong atas atau potong tengah bila dilakukan perontokannya menggunakan mesin perontok.</p>
                  <h2>H. Paska Panen Padi</h2>
                  <p>Padi setelah dilakukan pemanenen segera dilakukan pengumpulan ke                                     suatu tempat yang dekat dengan alat perontokan. Ditempat pengumpulan                                     diberi alas dengan menggunakan terpal dengan tujuan untuk menekan                                     kehilangan hasil. Perontokan padi merupakan tahapan pasca panen padi                                     setelah pemotongan atau memanen. Tujuan tahapan ini adalah melepaskan                                     bulir-bulir gabah dari malainya. Pada saat dilakukan perontokan gabah                                     ada beberapa hal yang perlu dilakukan yaitu sebagai berikut :</p>
                  <p>&gt; Pelaksanaan perontokan harus dilakukan sesegera mungkin setelah panen.<br>
                    &gt; Untuk menghindari banyaknya gabah yang tercecer sebaiknya digunakan                                    alas, untuk alas dapat dipakai plastic, terpal, anyaman bambu atau                                     tikar.</p>
                  <div id="attachment_1826"><a href="http://mitalom.com/wp-content/uploads/2016/06/Gambar-MESIN-PERONTOK-Padi.jpg"><img src="http://localhost/padi_bayes/14%20Tahap%20Cara%20Sukses%20TANAM%20PADI%20Yang%20Baik%20Hasil%20Melimpah%20Berkualitas_files/Gambar-MESIN-PERONTOK-Padi-300x188.jpg" alt="Cara Merontokkan Gabah" srcset="http://mitalom.com/wp-content/uploads/2016/06/Gambar-MESIN-PERONTOK-Padi-300x188.jpg 300w, http://mitalom.com/wp-content/uploads/2016/06/Gambar-MESIN-PERONTOK-Padi.jpg 630w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="188"></a>
                    <p>Perontokan gabah menggunakan mesin perontok (Foto by : Nurhadiyati)</p>
                  </div>
                  <p>Setelah padi dipanen gabah harus segera dirontokkan malainya. Tempat                                     perontokan dapat dilakukan di lahan atau di halaman rumah. Perontokan                                     ini dapat dilakukan dengan tenaga manusia atau dengan alat mesin.                                     Perontokan padi merupakan salah satu tahapan pasca panen yang memberikan                                    kontribusi cukup berarti bagi kehilangan hasil dan mutu padi secara                                     keseluruhan, untuk itu diperlukan suatu usaha mencari alternative                                     perontokan yang tepat sehingga hasil perontokan padi menghasilkan gabah                                     bermutu dan kehilangan hasil yang kecil.</p>
                  <p><em>1. Cara Perontokan Gabah</em></p>
                  <p>Perontokan padi dapat dilakukan secara manual maupun dengan mesin.                                     Cara perontokan padi dapat dilakukan dengan berbagai cara, yaitu :</p>
                  <p>&gt; diiles/diinjak,<br>
                    &gt; pukul (gedig),<br>
                    &gt; banting (gebot),<br>
                    &gt; pedal tresher/ mesin perontok/power tresher</p>
                  <p><em>2. Pembersihan Gabah</em></p>
                  <p>Pembersihan adalah proses pemisahan padi atau gabah dari benda asing                                     atau kotoran lainnya yang akan merusak benih/gabah saat disimpan. Maksud                                    dan tujuan dari pembersihan gabah/padi adalah sebagai berikut ;</p>
                  <p>&gt; Mempercepat waktu pengeringan<br>
                    &gt; Memperkecil biaya pengeringan<br>
                    &gt; Menghindari memburuknya atau kerusakan gabah selama penyimpanan<br>
                    &gt; Menghindari bahan dari kerusakan conveying dan penggilingan<br>
                    &gt; Menghindari bahan dari penurunan grade<br>
                    &gt; Memperkecil kebutuhan ruang dan tempat penyimpanan</p>
                  <p><em>3. Pengeringan Gabah</em></p>
                  <div id="attachment_1827"><a href="http://mitalom.com/wp-content/uploads/2016/06/Gambar-Menjemur-Gabah.jpg"><img src="http://localhost/padi_bayes/14%20Tahap%20Cara%20Sukses%20TANAM%20PADI%20Yang%20Baik%20Hasil%20Melimpah%20Berkualitas_files/Gambar-Menjemur-Gabah-300x188.jpg" alt="Cara Mengeringkan Gabah Padi" srcset="http://mitalom.com/wp-content/uploads/2016/06/Gambar-Menjemur-Gabah-300x188.jpg 300w, http://mitalom.com/wp-content/uploads/2016/06/Gambar-Menjemur-Gabah.jpg 630w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="188"></a>
                    <p>Pengeringan / penjemuran gabah (Foto by : Nurhadiyati)</p>
                  </div>
                  <p>Kegiatan pengeringan merupakan salah satu kegiatan yang penting dalam                                    usaha mempertahankan mutu gabah. Kadar air gabah yang baru dipanen                                     berkisar antara 20 – 25 %, sehingga perlu diturunkan kadar airnya dengan                                    cara pengeringan sampai gabah mencapai kadar air maksimum 14 %. Tujuan                                     pengeringan adalah agar gabah tidak mudah rusak sewaktu disimpan,                                     rendeman giling dan mutu tetap baik. Untuk mencapai tujuan tersebut                                     sebaiknya pengeringan dilakukan segera setelah pemanenan dan perontokan                                     untuk mencegah butir kuning. Pengeringan gabah umumnya dilakukan dengan                                     memanfaatkan panas sinar matahari, tetapi jika panen terjadi musim hujan                                    disarankan menggunakan alat pengering buatan seperti mesin pengering                                     (drayer) atau silo pengering.</p>
                  <p>Sebelum melakukan penjemuran dengan sinar matahari perlu diperhatikan                                    bahwa tempat penjemuran bebas dari genangan air, terlindung dari                                     gangguan unggas dan binatang lainnya. Faktor lain yang perlu                                     diperhatikan adalah sebagai berikut:</p>
                  <p>&gt; Penjemuran dilakukan ditempat yang leluasa menerima sinar                                     matahari, bebas dari genangan air, terlindung dari gangguan unggas dan                                     binatang lainnya.<br>
                    &gt; Membuat lantai jemur dengan permukaan dari semen dan dibuat gelombang.<br>
                    &gt; Jika terjadi cuaca cerah penjemuran gabah sebaiknya dengan                                     ketebalan 5 – 7 cm dan dibolak balik 1 – 2 jam sekali dengan menggunakan                                    alat yang terbuat dari kayu atau bambu. Bila menggunakan alas jemur,                                     jangan menggunakan terpal berbahan plastik karena dapat mempengaruhi                                     peningkatan kadar air.<br>
                    &gt; Waktu penjemuran dianjurkan mulai pukul 08.00 pagi sampai jam 16.00<br>
                    &gt; Jika pengeringan gabah dalam jumlah besar maka pada malam hari                                     tetap dibiarkan diatas jemuran dengan cara digundukkan dan ditutupi                                     dengan plastic, terpal, untuk menghindari hujan dan embun. Jika                                     gabah-gabah yang dikeringkan dalam jumlah kecil, sebaiknya gabah                                     diusahakan dalam ruangan dengan memakai alas tikar atau plastic.</p>
                  <p>Setelah dijemur selesai (pukul 16.00) gabah dapat dimasukkan ke                                     karung dan disimpan dalam ruangan jika volumenya tidak banyak. Namun                                     jika volumenya besar gabah dapat dibiarkan di luar, tetapi harus                                     ditumpuk dan ditutupi dengan plastic agar tidak terkena embun dan hujan.                                    Dengan cara penjemuran seperti ini selama 2 – 3 hari pada cuaca baik                                     akan diperoleh gabah dengan kadar air kurang lebih 14 %. Penjemuran yang                                    terlalu lama dapat berakibat gabah banyak yang pecah saat penggilingan.                                    Ada beberapa hal yang perlu diperhatikan dalam pengeringan, antara lain                                    sebagai berikut ;</p>
                  <p>&gt; Pengeringan dilakukan sesegera mungkin setelah perontokan<br>
                    &gt; Tempat pengeringan harus memperoleh penyinaran matahari serta bebas dari gangguan ayam atau unggas lainnya.<br>
                    &gt; Jika kondisi cuaca tidak memungkinkan untuk penjemuran, gabah dapat                                    dipanaskan pada ruangan di dalam rumah. Untuk menggantikan panas dapat                                     digunakan lampu petromaks atau sumber panas yang lain. Tebal hamparannya                                    antara 2 – 3 cm dan pembalikan juga harus tetap dilakukan</p>
                  <p><em>4. Penyimpanan Gabah Kering</em></p>
                  <p>Tujuan penyimpanan adalah untuk memperpanjang masa penyediaan bahan                                     pangan. Hal-hal yang perlu diperhatikan dalam penyimpanan adalah sebagai                                    berikut :</p>
                  <p>&gt; Gabah yang disimpan dengan kadar air maksimum 14 % bersih dari kotoran, gabah hampa maksimal 3 %.<br>
                    &gt; Menggunakan wadah karung yang bersih dan bebas hama.<br>
                    &gt; Gudang atau lumbung penyimpanan diusahakan agar dibangun memanjang                                     dari arah timur barat. Untuk menghindari luasnya dinding yang terkena                                     sinar matahari terlalu lama, sehingga gudang cukup sejuk.<br>
                    &gt; Gudang atau lumbung harus dibersihkan dari hama gudang dan                                     disemprot dengan insektisida yang telah dianjurkan, termasuk dari                                     serangan tikus.<br>
                    &gt; Sirkulasi udara cukup baik guna menjaga kelembaban dan suhu yang seragam.<br>
                    &gt; Jika lantai gudang dibuat dari semen, maka harus menggunakan alas                                     kayu, guna menghindari kontak langsung antara wadah gabah dengan lantai                                     semen.<br>
                    &gt; Dinding gudang dibuat sedemikian rupa, sehingga dapat menghindari hama bersembunyi</p>
                  <div></div>
                </div>
                <div></div>
                <p align="justify"><br/><br/>
			</p></center>
		</div>
		<!-- akhir jumbotron -->

		<div class="col-sm-6 col-md-3">
	  
		</div>

		<br><br><br>
        <br><br><br>
	</div>
	<br/>
	
	
	<div class="clearfix"></div>
		
	<nav class="navbar navbar-default" style="bottom: 0;margin: 0">
		<div class="container">	
			<center>
				
			<ul class="nav navbar-nav">
				<li><a href="#">Copyright @ 2020 Rose House Squad. All rights reserved.</a></li>				
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Develop by RH Squad</a></li>									
			</ul>
			</center>		
		</div>
	</nav>
	
</body>
</html>