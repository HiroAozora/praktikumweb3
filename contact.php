<!DOCTYPE html>
<html>
<head>
    <title>Hubungi Kami - HAIDAR NEWS</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div id="wrapper">
        <div id="container">            
            <header><img src="header.png"></header>            
            <nav>
                <ul>
                    <li><a href="index.php">Beranda</a></li>
                    <li><a href="index.php">Artikel</a></li>
                    <li><a href="#">Profil</a>
                        <ul class="submenu">
                             <li><a href="contact.php">Hub Kami</a></li>
                            <li><a href="about.php">Tentang Kami</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>            
            <article>
                <div class="page-content">
                    <h2>Hubungi Kami</h2>
                    <p>Punya pertanyaan, kritik, atau saran? Jangan ragu untuk menghubungi kami melalui formulir di bawah ini atau datang langsung ke kantor kami.</p>

                    <div class="contact-info">
                        <h3>Informasi Kontak</h3>
                        <p><strong>Alamat:</strong><br>Jl. Pembangunan, Tuntungan II, Deli Serdang</p>
                        <p><strong>Telepon:</strong><br>+62-8123456789</p>
                        <p><strong>Email:</strong><br><a href="mailto:haidar0701232073@uinsu.ac.id">haidar0701232073@uinsu.ac.id</a></p>
                    </div>

                    <form class="contact-form" action="#" method="post">
                        <h3>Kirim Pesan</h3>
                        <div class="form-group">
                            <label for="name">Nama Lengkap:</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Alamat Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subjek:</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan:</label>
                            <textarea id="message" name="message" rows="6" required></textarea>
                        </div>
                        <button type="submit" class="submit-btn">Kirim Pesan</button>
                    </form>
                </div>
            </article>            
            <aside>
                <li class="widget">
                    <h2>Berita Populer</h2>
                    <ul>
                    <li><a href="article1.php">Satelit Nusantara-5 Sukses Mengorbit</a></li>
                    <li><a href="article2.php">Teknologi Modifikasi Cuaca Terbaru</a></li>
                    <li><a href="article3.php">Anthony Ginting Rebut Gelar Juara</a></li>
                    </ul>
                </li>
            </aside>            
            <footer>
                <div id="column">
					<h2>LAYANAN</h2>
					E-Mail<br>
					Langganan<br>
				</div>
                <div id="column">
                    <h2>Business Hour</h2>
                    Silahkan hubungi admin HAIDAR NEWS telp 08123456789 pada jam kerja atau email <a href="mailto:haidar0701232073@uinsu.ac.id">haidar0701232073@uinsu.ac.id</a>
                </div>
                <div id="column">
                    <h2>Head Office</h2>
                    Jl. Pembangunan, Tuntungan II, Deli Serdang<br>
                    Tel : +62-8123456789<br>
                    Email : haidar0701232073@uinsu.ac.id<br>
                </div>
            </footer>        
        </div>
    </div>
</body>
</html>