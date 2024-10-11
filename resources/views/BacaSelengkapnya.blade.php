<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel Baca Selengkapnya</title>
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
            position: absolute;
            width: 762px;
            height: 48px;
            left: 30px;
            top: 210px; 
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            font-size: 32px;
            line-height: 48px;
        }
        .image-container {
            position: absolute;
            width: 862px;
            height: 328px;
            left: 68px;
            top: 354px;
            background: url('assets/img/image 1.png') no-repeat center center;
        }
        .description {
            position: absolute;
            width: 972px;
            height: 90px;
            left: 68px;
            top: 722px;

            font-family: 'Poppins';
            font-style: normal;
            font-weight: 500;
            font-size: 20px;
            line-height: 30px;

            color: #005C7B;
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
    <div class="image-container"></div>
    <h1 class="title">8 Obat Batuk Pilek Dewasa yang Paling Ampuh</h1>
    <p class="description">
        Obat batuk pilek dewasa bisa digunakan sebagai solusi untuk mengatasi batuk, bersin-bersin, hidung meler, dan hidung mampet. Obat ini bisa meredakan gejala dan membantu proses penyembuhan sehingga aktivitas tidak terganggu dan kegiatan tetap produktif. Batuk pilek yang terjadi pada orang dewasa umumnya disebabkan oleh infeksi virus. Gejala batuk pilek sering kali menyebabkan pusing, lemas, dan sulit berkonsentrasi sehingga mengganggu aktivitas dan menurunkan produktivitas.

        Meski umumnya sembuh dengan sendirinya, batuk pilek sebaiknya tidak dibiarkan. Mengonsumsi obat batuk pilek dewasa dapat meringankan gejala dan membantu proses penyembuhan. Dengan begitu, sakit tidak menghalangi Anda untuk tetap produktif.

        Pilihan Obat Batuk Pilek Dewasa
        Ada beragam pilihan obat batuk pilek dewasa yang bisa digunakan untuk mengatasi gejala-gejala yang mengganggu. Obat ini tersedia dalam bentuk obat sirup, tablet, hingga obat semprot dan tetes hidung. 

        Inilah beberapa obat batuk pilek dewasa yang bisa Anda beli, baik secara bebas maupun dengan resep dokter:
    </p>


    
 