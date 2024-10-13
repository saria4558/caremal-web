<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
    <style>
        body {
            padding-top: 30px; /* Sesuaikan dengan tinggi navbar */
            padding-left: 100px;
            padding-right: 20px;
            background-color: #EDFDFB;
        }

        .navbar {
            position: fixed; /* Membuat navbar tetap berada di bagian atas */
            top: 0; /* Posisi di bagian atas halaman */
            left: 0; /* Mulai dari kiri halaman */
            width: 100%; /* Membuat navbar selebar halaman */
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #EDFDFB;
        }

        .navbar .logo img {
            width: 200px;
            height: 55px;
        }

        
        .profile {
            display: flex;
            align-items: center;
        }

        .profile img {
            width: 50px; /* Ukuran gambar */
            height: 50px; /* Ukuran gambar */
            border-radius: 50%; /* Jika ingin gambar berbentuk lingkaran */
            margin-right: 20px; /*Jarak antara gambar dan teks */
            vertical-align: middle; /* Menjaga gambar sejajar dengan teks */
        }

        .profile-info {
            margin-right: 10px;
            /*margin-left: 30px;*/
            font-size: 16px;
            color: #333;
        }
        .language-switch {
            text-decoration: none;
            font-size: 14px;
            color: #7EBEF1;
            border-left: 1px solid #ccc;
            padding-left: 10px;
            margin-right: 50px;
        }
        .language-switch:hover {
            text-decoration: underline;
        }

        .search-bar {
            display: flex;
            align-items: center;
            background: #FFFFFF;
            box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.25);
            border-radius: 55px;
            padding: 10px 20px;
            width: 600px;
        }

        .search-bar input {
            border: none;
            outline: none;
            font-family: 'Poppins', sans-serif;
            font-weight: 300;
            font-size: 20px;
            color: rgba(6, 17, 19, 0.33);
            flex-grow: 1;
        }

        .search-bar img {
            width: 20px;
            height: 20px;
        }

        .title {
            margin-left: 150px;
            margin-top: 80px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 45px;
            color: #005C7B;
        }

        /*.subitle {
            position: absolute;
            width: 919px;
            height: 45px;
            left: 191px;
            top: 230px;

            font-family: 'Poppins';
            font-style: normal;
            font-weight: 275;
            font-size: 30px;
            line-height: 45px;
        }*/
        .description {
            margin-left: 150px;
            margin-top: 10px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 275;
            font-size: 30px;
            color: rgba(0, 92, 123, 0.5);
        }

        .kategori {
            display: flex;
            margin-left: 150px;
            margin-top: 30px;
        }

        .kategori div {
            margin-right: 30px;
            font-family: 'Roboto';
            font-size: 24px;
            color: #005C7B;
        }

        .artikel-list {
            margin-left: 150px;
            margin-top: 40px;
            
        }

        .artikel-item {
            display: flex;
            margin-bottom: 40px;
        }

        .artikel-item img {
            width: 200px;
            height: 150px;
            border-radius: 13.88px;
            margin-right: 30px;
        }

        .artikel-info {
            font-family: 'Poppins';
        }

        .artikel-title {
            font-weight: 600;
            font-size: 22px;
            color: #005C7B;
        }

        .artikel-description {
            font-weight: 400;
            font-size: 18px;
            color: rgba(6, 17, 19, 0.5);
            margin-top: 10px;
        }
        .read-more {
            color: #007BFF; /* Warna biru untuk tautan */
            text-decoration: none; /* Hapus garis bawah */
            font-weight: bold; /* Buat teks lebih tebal */
        }

        .read-more:hover {
            text-decoration: underline; /* Garis bawah saat hover */
            color: #0056b3; /* Warna lebih gelap saat hover */
        }


        .btn-selanjutnya {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            margin-top: 50px;
            width: 200px;
            height: 60px;
            border: 1.4px solid #458FF6;
            border-radius: 55px;
            font-family: 'Mulish', sans-serif;
            font-weight: 700;
            font-size: 18px;
            color: #458FF6;
            cursor: pointer;
        }

        /*.sidebar {
            position: absolute;
            width: 70px;
            height: 415px;
            left: 70px;
            top: 213px;
        }

        .sidebar .rectangle {
            position: absolute;
            background: #FFFFFF;
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
        }

        .sidebar img {
            width: 24px;
            height: 24px;
        }*/

        /* Footer */
        footer {
            background-color: transparant;
            padding: 50px 170px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .footer-logo {
            width: 100px;
            height: 100px;
            /*background: url('assets/img/CAREMAL (7).png') no-repeat center center;*/
            background-size: contain;
        }
        .nam-posuere{
            position: absolute;
            margin-top: 10px; /* Atur jarak antara logo dan teks */
            margin-left: 10px;
            margin-right: 750px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-size: 22.1126px;
            line-height: 33px;
            color: rgba(0, 0, 0, 0.54);
        }
        .lainnya {
            font-size: 32px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            background: linear-gradient(89.93deg, #45BDBF -2.02%, #005C7B 99.92%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;
            margin-bottom: 20px;
            margin-left: 100px;
        }

        .footer-info  {
            display: flex;
            flex-direction: column;
            font-size: 18px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            color: #005C7B;
            margin: 5px 0;
            margin-left: 100px;
        }
        .judul {
            position: relative;
            margin-left: 140px;
            margin-right: 0px;
            margin-top: 70px; /* Atur jarak dari atas sesuai kebutuhan*/ 
            font-family: 'Poppins';
            font-size: 22px;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            color: #005C7B;
            margin-bottom: 15px;

            background: linear-gradient(90deg, #45BDBF 0%, #005C7B 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;
        }
        .social-media a {
            display: flex;
            position: absolute;
            left: 80px;
            right: 4.93%;
            top: 31.56%;
            bottom: 50.99%;
            margin-left: 100px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <div class="navbar">
    <div class="logo">
        <img src="{{ asset('assets/img/CAREMAL (7).png') }}" alt="CaremaL Logo">
    </div>
    <div class="search-bar">
    <img src="assets/img/Search.png" alt="Search Icon">
        <input type="text" placeholder="Cari di CaremaL">
    </div>
    <div class="profile">
        <img src="assets/img/xiaojun.jpg" alt="Profile Picture">
        <div class="profile-info">Halo, Boyfriend</div>
        <a href="#" class="language-switch">EN</a>
    </div>
</div>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Beranda -->
    <div class="sidebar-item" id="beranda">
        <div class="rectangle">
            <img src="assets/img/icon house.png" alt="Beranda Icon">
        </div>
        <div class="description">Beranda: Halaman utama.</div>
    </div>

    <!-- Artikel -->
    <div class="sidebar-item" id="artikel">
        <div class="rectangle">
        <a href="{{ route('DashboardAdmin') }}"><img src="assets/img/icon artikel.png" alt="Artikel Icon"></a>
        </div>
        <div class="description">Artikel: Baca berbagai artikel.</div>
    </div>

    <!-- Kontak Darurat -->
    <div class="sidebar-item" id="kontak-darurat">
        <div class="rectangle">
            <img src="assets/img/icon chat.png" alt="Chatting Icon">
        </div>
        <div class="description">Chatting: Mulai chat dengan dokter hewan.</div>
    </div>
    
    <!-- Puskeswan -->
    <div class="sidebar-item" id="puskeswan">
        <div class="rectangle">
            <img src="assets/img/hospital icon.png" alt="Puskeswan Icon">
        </div>
        <div class="description">Puskeswan: Temukan puskeswan terdekat.</div>
    </div>
</div>



<!--<script>
function toggleDescription(id) {
    var description = document.getElementById(id);
    var descriptions = document.querySelectorAll('.description');
    
    // Sembunyikan semua deskripsi
    descriptions.forEach(function(desc) {
        desc.style.display = 'none';
    });

    // Tampilkan deskripsi yang diklik
    description.style.display = (description.style.display === 'block') ? 'none' : 'block';
}
</script>-->
<!--Java Script-->
<script>
function toggleDescription(id) {
    var item = document.getElementById(id);
    var items = document.getElementsByClassName('sidebar-item');
    
    // Hide descriptions of all items
    for (var i = 0; i < items.length; i++) {
        items[i].classList.remove('active');
    }

    // Show the description of the clicked item
    item.classList.toggle('active');
    <a href="/artikel" class="active"><i class="bi bi-newspaper"></i><span>Artikel</span></a>
}
</script>


    <!-- CSS -->
<style>
    /* Sidebar Container */
    .sidebar {
        position: fixed;
        top: 100px;
        left: 10px;
        width: 100px;
        background-color: transparent;
        padding-top: 20px;
        z-index: 1000;
        margin-left: 20px;
    }

    /* Sidebar Items */
    .sidebar-item {
        position: relative;
        width: 100%;
        margin-bottom: 20px;
        cursor: pointer;
    }

    /* Rectangle (Box) styling */
    .sidebar-item .rectangle {
        width: 60px;
        height: 50px;
        background-color: #FFFFFF;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        position: relative;
        transition: transform 0.3s ease-in-out, background-color 0.3s;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Hover effect */
    .sidebar-item:hover .rectangle {
        transform: scale(1.1);
        background-color: rgba(126, 190, 241, 0.5); /* Warna #7EBEF1 dengan intensitas 50% */
        color: #FFFFFF;
    }

    /* Active state */
    .sidebar-item.active .rectangle {
        background-color: rgba(126, 190, 241, 0.5); /* Warna #7EBEF1 dengan intensitas 50% */
        color: #FFFFFF;
    }

    /* Icon styling */
    .sidebar-item img {
        width: 30px;
        height: 30px;
    }

    /* Description styling */
    .sidebar-item .description {
        display: none;
        font-size: 14px;
        background-color: #FFFFFF;
        padding: 5px;
        border-radius: 5px;
        position: absolute;
        margin-left: 0px;
        white-space: nowrap;
        top: 20px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    /* Show the description on hover */
    .sidebar-item:hover .description {
        display: block;
        transform: scale(1.1);
        background-color: rgba(126, 190, 241, 0.5); /* Warna #7EBEF1 dengan intensitas 50% */
        color: #FFFFFF;
    }

    /* Responsive */
    @media screen and (max-width: 768px) {
        .sidebar {
            width: 80px;
        }

        .sidebar-item .rectangle {
            width: 80px;
            height: 60px;
        }

        .sidebar-item img {
            width: 30px;
            height: 30px;
        }

        .sidebar-item .description {
            top: 15px;
            left: 90px;
        }
    }
    </style>



    <!-- Title -->
    <div class="title">ARTIKEL</div>
    <!--<p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>-->
       <!-- Description -->
       <div class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</div>

        
 

    <!-- Kategori Artikel -->
    <div class="kategori">
        <div>Lorem Ipsum</div>
        <div>Lorem Ipsum</div>
        <div>Lorem Ipsum</div>
        <div>Lorem Ipsum</div>
        <div>Lorem Ipsum</div>
        <div>Lorem Ipsum</div>
    </div>

    <!-- Artikel List -->
<div class="artikel-list">
    <!-- Artikel 1 -->
    <div class="artikel-item">
        <img src="assets/img/image 1.png" alt="Artikel 1 Image">
        <div class="artikel-info">
            <div class="artikel-title">8 Obat Batuk Pilek Dewasa yang Paling Ampuh</div>
            <div class="artikel-description">Obat batuk pilek dewasa bisa digunakan sebagai solusi untuk mengatasi batuk, bersin-bersin, hidung meler, dan hidung mampet. Obat ini bisa meredakan gejala dan membantu proses penyembuhan sehingga aktivitas tidak terganggu.<a href="{{ route('BacaSelengkapnya') }}"><i class class="read-more"></i>Baca selengkapnya</a></div>
            
        </div>
    </div>

    <!-- Artikel 2 -->
    <div class="artikel-item">
        <img src="assets/img/image 1.png" alt="Artikel 2 Image">
        <div class="artikel-info">
            <div class="artikel-title">8 Obat Batuk Pilek Dewasa yang Paling Ampuh</div>
            <div class="artikel-description">Obat batuk pilek dewasa bisa digunakan sebagai solusi untuk mengatasi batuk, bersin-bersin, hidung meler, dan hidung mampet. Obat ini bisa meredakan gejala dan membantu proses penyembuhan sehingga aktivitas tidak terganggu.<a href="#" class="read-more">Baca selengkapnya</a></div>
        </div>
    </div>

    <!-- Artikel 3 -->
    <div class="artikel-item">
        <img src="assets/img/image 1.png" alt="Artikel 3 Image">
        <div class="artikel-info">
            <div class="artikel-title">8 Obat Batuk Pilek Dewasa yang Paling Ampuh</div>
            <div class="artikel-description">Obat batuk pilek dewasa bisa digunakan sebagai solusi untuk mengatasi batuk, bersin-bersin, hidung meler, dan hidung mampet. Obat ini bisa meredakan gejala dan membantu proses penyembuhan sehingga aktivitas tidak terganggu.<a href="#" class="read-more">Baca selengkapnya</a>.</div>
        </div>
    </div>

    <!-- Artikel 4 -->
    <div class="artikel-item">
        <img src="assets/img/image 1.png" alt="Artikel 4 Image">
        <div class="artikel-info">
            <div class="artikel-title">8 Obat Batuk Pilek Dewasa yang Paling Ampuh</div>
            <div class="artikel-description">Obat batuk pilek dewasa bisa digunakan sebagai solusi untuk mengatasi batuk, bersin-bersin, hidung meler, dan hidung mampet. Obat ini bisa meredakan gejala dan membantu proses penyembuhan sehingga aktivitas tidak terganggu.<a href="#" class="read-more">Baca selengkapnya</a></div>
        </div>
    </div>

    <!-- Artikel 5 -->
    <div class="artikel-item">
        <img src="assets/img/image 1.png" alt="Artikel 5 Image">
        <div class="artikel-info">
            <div class="artikel-title">8 Obat Batuk Pilek Dewasa yang Paling Ampuh</div>
            <div class="artikel-description">Obat batuk pilek dewasa bisa digunakan sebagai solusi untuk mengatasi batuk, bersin-bersin, hidung meler, dan hidung mampet. Obat ini bisa meredakan gejala dan membantu proses penyembuhan sehingga aktivitas tidak terganggu.<a href="#" class="read-more">Baca selengkapnya</a></div>
        </div>
    </div>

    <!-- Artikel 6 -->
    <div class="artikel-item">
        <img src="assets/img/image 1.png" alt="Artikel 6 Image">
        <div class="artikel-info">
            <div class="artikel-title">8 Obat Batuk Pilek Dewasa yang Paling Ampuh</div>
            <div class="artikel-description">Obat batuk pilek dewasa bisa digunakan sebagai solusi untuk mengatasi batuk, bersin-bersin, hidung meler, dan hidung mampet. Obat ini bisa meredakan gejala dan membantu proses penyembuhan sehingga aktivitas tidak terganggu.<a href="#" class="read-more">Baca selengkapnya</a></div>
        </div>
    </div>
</div>


    <!-- Lebih lanjut -->
    <div class="selanjutnya">
            <a href="#" class="btn-selanjutnya">Selengkapnya</a>
        </div>
    <style>
        .btn-selanjutnya {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            width: 200px;
            height: 60px;
            left: 43.06%;
            right: 43.06%;
            margin-top: 100px;
            bottom: 23.83%;
            border: 1.4px solid #458FF6;
            border-radius: 55px;
            font-family: 'Mulish', sans-serif;
            font-weight: 700;
            font-size: 18px;
            color: #458FF6;
            cursor: pointer;
        }
        /*effect*/
        .btn-lebih-lanjut:hover {
                background-color: #458FF6;
                color: white;
            }
    </style> 
      
    <!-- Footer-->
    <footer>
    <div class="footer-logo">
        <img src="{{ asset('assets/img/CAREMAL (7).png') }}" alt="CaremaL Logo" class="logo">
        <h1 class="nam-posuere">Nam posuere accumsan porta. Integer id orci sed ante tincidunt tincidunt sit amet sed libero.</h1>
    </div>

    <div class="footer-info">
        <h1 class="lainnya">Lainnya</h1>
        <h1 class="footer-info">Tentang Kami</h1>
        <h1 class="footer-info">Tim Editorial</h1>
        <h1 class="footer-info">Hubungi Kami</h1>
    </div>

    <div class="social-media">
        <p class="judul">Media Sosial</p>
        <img src="{{ asset('assets/img/Facebook.png') }}" alt="Facebook logo" class="social-media-icon">
        <img src="{{ asset('assets/img/Twitter.png') }}" alt="Twitter logo" class="social-media-icon">
        <img src="{{ asset('assets/img/Instagram.png') }}" alt="Instagram logo" class="social-media-icon">
        <img src="{{ asset('assets/img/Linkedin.png') }}" alt="Linkedin logo" class="social-media-icon">
        <img src="{{ asset('assets/img/Youtube.png') }}" alt="Youtube logo" class="social-media-icon">
    </div>
</footer>

</body>

<!--</html>
<header id="header" class="header d-flex flex-column justify-content-center">
    
    <i class="header-toggle d-xl-none bi bi-list"></i>
    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#artikel" ><i class="bi bi-newspaper"></i><span>Artikel</span></a></li>
        <li><a href="/admin/daftarkontak" ><i class="bi bi-telephone"></i><span>Kontak Darurat</span></a></li>
        <li><a href="/admin/daftardoktor"class="active"><i class="fa fa-user-md"></i><span>Doktor Hewan</span></a></li>
        <li><a href="/admin/daftarpuskeswan" ><i class="bi bi-hospital"></i><span>Puskeswan</span></a></li>
        
      </ul>
    </nav>

  </header>-->