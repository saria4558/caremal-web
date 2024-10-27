@extends('layout')
@section('sidebar')
<style>
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
        font-family: 'Poppins';
    }

    .terms {
        font-size: 0.7rem;
        text-align: center;
        color: #888;
        margin-top: 10px;
    }

    .terms a {
        color: #7EBEF1;
        text-decoration: none;
    }

    .terms a:hover {
        text-decoration: underline;
    }

    .modal-content {
        padding: 50px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        position: relative;
    }

    .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 24px;
        color: #7EBEF1;
        cursor: pointer;
    }

    h2 {
        text-align: left; /* Perbaikan text alignment */
        font-size: 1.5rem;
        color: #1a1a1a;
        margin-bottom: 20px;
    }
</style>
<nav class="navbar">
    <div class="navbar-left">
      <img src="{{ asset('assets/img/logo.png') }}" alt="CaremaL Logo" class="logo">
        {{-- <span class="brand-name">CaremaL</span> --}}
    </div>
    <div class="navbar-right">
        <img src="{{ asset('assets/img/hero-bg.jpg') }}" alt="profil" class="profil">
          <span class="user-greeting">Hi, {{ session('admin_nama') }}</span>
          <a href="#" class="language-switch">EN</a>
      </div>
</nav>
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

<div class="row justify-content-center">
    <div class="row">
        <div class="col-sm-8" style="text-align: left;">
            <h2 style="color: #005C7B; font-weight: bold;">DAFTAR DOKTOR</h2>
        </div>
        <div class="col-sm-4 text-end">
            <a href="#" class="btn-custom" data-bs-toggle="modal" data-bs-target="#tambahDoktorModal">Tambah</a>
        </div>
    </div>

    <table class="table table-borderless">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIK</th>
                <th scope="col">No. Telp</th>
                <th scope="col">Aksi</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @if (!isset($data) || $data->isEmpty())
                <tr>
                    <td colspan="6" class="text-center">Data Kosong</td>
                </tr>
            @else
                @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $row->dokter_nama }}</td>
                        <td>{{ $row->dokter_NIK }}</td>
                        <td>{{ $row->telepon }}</td>
                        <td>
                            <a data-bs-toggle="modal" data-bs-target="#editDoktorModal" 
                               class="btn btn-warning" 
                               onclick="setEditData({{ $row->id }}, '{{ $row->dokter_nama }}', '{{ $row->telepon }}', '{{ $row->dokter_Ttl }}', '{{ $row->dokter_JK }}', '{{ $row->dokter_NIK }}', '{{ $row->alamat }}', '{{ $row->email }}')">
                               <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="/deletedata/{{$row->id}}" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                        <td style="color: #45BDBF">aktif</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>

<!-- Modal Tambah Doktor -->
<div class="modal fade" id="tambahDoktorModal" tabindex="-1" aria-labelledby="tambahDoktorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="container">
                <span class="close-btn" data-bs-dismiss="modal">&times;</span>
                <h2>DAFTARKAN DOKTER</h2>
                <form action="{{ route('insert') }}" method="POST">
                    @csrf
                    <input type="text" name="dokter_nama" placeholder="Nama Lengkap" required>
                    <input type="number" name="telepon" placeholder="Nomor Telepon" required>
                    <input type="text" name="dokter_Ttl" placeholder="Tempat, Tanggal Lahir" required>
                    <select class="form-select" name="dokter_JK" required>
                        <option selected disabled>Jenis Kelamin</option>
                        <option value="laki-laki">Laki - Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    <input type="number" name="dokter_NIK" placeholder="No. KTA/SIP/NIP" required>
                    <input type="text" name="alamat" placeholder="Alamat" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required minlength="6">

                    <button type="submit" class="submit-btn">Lanjut</button>
                </form>
                <p class="terms">Dengan mendaftar, Anda menyetujui <a href="#">Syarat dan Ketentuan</a> dan membaca <a href="#">Kebijakan Privasi</a>.</p>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Doktor -->
@include('admin/editDoktorModal')

<script>
    const closeBtns = document.querySelectorAll('.close-btn');
    closeBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            window.location.href = "/admin/daftardoktor";
        });
    });

    function setEditData(id, nama, telepon, lahir, kelamin, nik, alamat, email) {
        const fields = {
            editId: document.getElementById('edit-id'),
            editNama: document.getElementById('edit-nama'),
            editTelepon: document.getElementById('edit-telepon'),
            editLahir: document.getElementById('edit-lahirdokter'),
            editKelamin: document.getElementById('edit-kelamin'),
            editNik: document.getElementById('dokter_NIK'),
            editAlamat: document.getElementById('edit-alamat'),
            editEmail: document.getElementById('edit-email')
        };

        if (fields.editId) {
            fields.editId.value = id;
            fields.editNama.value = nama;
            fields.editTelepon.value = telepon;
            fields.editLahir.value = lahir;
            fields.editKelamin.value = kelamin;
            fields.editNik.value = nik;
            fields.editAlamat.value = alamat;
            fields.editEmail.value = email;
        }
    }
</script>
@endsection
