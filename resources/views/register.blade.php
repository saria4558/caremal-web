<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register - CaremaL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f1f4ff;
        }

        .register-container {
            max-width: 400px;
            margin: auto;
            margin-top: 50px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .register-container img {
            width: 80px;
        }

        .register-container h2 {
            margin: 20px 0;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            border-radius: 30px;
        }

        .btn-primary,
        .btn-secondary {
            border-radius: 30px;
            width: 100%;
            padding: 10px;
            border: none;
        }

        .btn-secondary {
            background-color: #6c757d;
        }

        .terms {
            font-size: 12px;
            color: #888;
        }

        .terms a {
            text-decoration: none;
            color: #007bff;
        }

        /* Hidden by default */
        .hidden {
            display: none;
        }
    </style>
</head>

<body>

    <div class="register-container">
        <img src="{{ asset('images/logoo.png') }}" alt="CaremaL Logo" style="width: 200px;">
        <h2>Mulai saja di CaremaL!</h2>
        <p>You can connect directly, quickly, and easily.</p>


        <!-- Form pertama -->
        <!-- Form pertama -->
        <form method="POST" action="{{ route('register.first') }}" id="initial-form">
            @csrf
            <div class="form-group">
                <input type="text" name="masy_nama" class="form-control" placeholder="Nama Lengkap" required
                    autofocus>
            </div>
            <div class="form-group">
                <select name="masy_JK" class="form-control" required>
                    <option value="" disabled selected>Jenis kelamin</option>
                    <option value="male">Laki-laki</option>
                    <option value="female">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <input type="date" name="masy_Ttl" class="form-control" placeholder="Tanggal lahir" required>
            </div>
            <div class="form-group">
                <input type="email" name="masy_email" class="form-control" placeholder="Email" required>
            </div>  
            <div class="form-group">
                <input type="text" name="masy_Telepon" class="form-control" placeholder="Nomor telepon" required>
            </div>

            <!-- Input Nomor Induk Pegawai dan alamat yang awalnya disembunyikan -->
            <div class="form-group hidden" id="nip-field">
                <input type="text" name="nip" class="form-control" placeholder="Nomor Induk Pegawai">
            </div>
            <div class="form-group hidden" id="alamat-field">
                <input type="text" name="alamat" class="form-control" placeholder="Kota tempat tinggal">
            </div>

            <button type="submit" class="btn btn-primary" id="next-button">Lanjut</button>
            <button type="button" class="btn btn-secondary mt-2" id="toggle-employee">Daftar Sebagai Dokter</button>
        </form>

        <p class="terms">By creating an account, you accept our <a href="#">Terms and Conditions</a> and <a
                href="#">Privacy Policy</a>.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Script to toggle the Nomor Induk Pegawai field
        document.getElementById('toggle-employee').addEventListener('click', function() {
            var nipField = document.getElementById('nip-field');
            var nipField = document.getElementById('alamat-field');
            if (nipField.classList.contains('hidden')) {
                nipField.classList.remove('hidden');
            } else {
                nipField.classList.add('hidden');
            }
        });

        // // Script to switch between forms
        // document.getElementById('next-button').addEventListener('click', function() {
        //     // Sembunyikan form pertama
        //     document.getElementById('initial-form').classList.add('hidden');

        //     // Tampilkan form kedua
        //     document.getElementById('second-form').classList.remove('hidden');
        // });
    </script>
</body>

</html>
