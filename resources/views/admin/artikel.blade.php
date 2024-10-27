@extends('layout')
@section('sidebar')
<!DOCTYPE HTML>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <meta charset="UTF-8"/>
    <title>Tulis Artikel</title>

    <link th:rel="stylesheet" th:href="@{/assets/summernote/summernote-bs4.css}"/>
    <link th:rel="stylesheet" th:href="@{/webjars/bootstrap/4.0.0-2/css/bootstrap.min.css} "/>
</head>
<style>
  /* Styling input dan tombol submit */
  input[type="text"], input[type="email"], input[type="password"], input[type="number"], select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #7EBEF1;
      border-radius: 25px;
      font-size: 15px;
      outline: none;
      font-family: 'Poppins';
  }

  .submit-btn {
      width: 100%;
      padding: 10px;
      background-color: #7EBEF1;
      color: #fff;
      border: none;
      border-radius: 25px;
      font-size: 1rem;
      cursor: pointer;
  }

  .submit-btn:hover {
      background-color: #6aaae4;
  }

  .form-select {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #7EBEF1;
      border-radius: 25px;
      font-size: 15px;
      outline: none;
  }

  /* Perbaikan ukuran text editor */
  .editor, .editorAria {
      width: 100%; /* Lebar editor 100% */
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #7EBEF1;
      border-radius: 25px;
      font-size: 15px;
      outline: none;
      min-height: 400px;
      box-sizing: border-box; /* Pastikan padding tidak menambah lebar */
  }

  /* Styling lainnya tetap sama */
</style>
<body>
<!-- Navbar -->
<nav class="navbar">
  <div class="navbar-left">
      <img src="{{ asset('assets/img/logo.png') }}" alt="CaremaL Logo" class="logo">
  </div>
  <div class="navbar-right">
    <img src="{{ asset('assets/img/hero-bg.jpg') }}" alt="profil" class="profil">
      <span class="user-greeting">Hi, {{ session('name') }}</span>
      <a href="#" class="language-switch">EN</a>
  </div>
</nav>

<!-- Header -->
<header id="header" class="header d-flex flex-column justify-content-center">
  <i class="header-toggle d-xl-none bi bi-list"></i>
  <nav id="navmenu" class="navmenu">
      <ul>
          <li><a href="#artikel"><i class="bi bi-newspaper"></i><span>Artikel</span></a></li>
          <li><a href="/admin/daftarkontak"><i class="bi bi-telephone"></i><span>Kontak Darurat</span></a></li>
          <li><a href="/admin/daftardoktor" class="active"><i class="fa fa-user-md"></i><span>Doktor Hewan</span></a></li>
          <li><a href="/admin/daftarpuskeswan"><i class="bi bi-hospital"></i><span>Puskeswan</span></a></li>
      </ul>
  </nav>
</header>


<div class="container">

    <div class="row">
        <div class="col-md-8 mt-5">
            <form method="post" th:object="${post}">

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="title" placeholder="Title" autocomplete="off" class="form-control"
                           th:field="*{title}"/>
                </div>

                <div class="form-group">
                    <label for="content">Content:</label>
                    <textarea type="text" rows="4" id="content" placeholder="Content" class="form-control"
                              th:field="*{content}" autocomplete="off"></textarea>
                </div>

                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
        </div>
    </div>

</div>


<script th:src="@{/webjars/jquery/jquery.min.js}"></script>
<script th:src="@{/webjars/popper.js/umd/popper.min.js}"></script>
<script th:src="@{/webjars/bootstrap/js/bootstrap.min.js}"></script>
<script th:src="@{/assets/summernote/summernote-bs4.js}"></script>

<script>
$('#content').summernote({
    height: 200
});
</script>

</body>
</html>