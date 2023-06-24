<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alia Hospital</title>
    <link rel="stylesheet" href="css/profil.css">
</head>

<body class="bg">
    @extends('Layout.app_home')

    @section('content')

    <div class="profil">
        <div class="profil-box">
            <h3><u>Data Saya</u></h3>
            <form action="/update-profile" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="text">
                    <div class="text-profil">
                        <div class="form">
                            <label for="nama">Nama Lengkap:</label>
                            <input type="text" id="nama" name="nama" value="{{ $user->nama }}">
                        </div>
                        @error('nama')
                                <div>{{$message}}</div>
                        @enderror

                        <div class="form">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" value="{{ $user->username }}">
                        </div>
                        @error('username')
                                <div>{{$message}}</div>
                        @enderror

                        <div class="form">
                            <label for="tanggal_lahir">Tanggal Lahir:</label>
                            <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ $user->tglLahir }}">
                        </div>
                        @error('tanggal_lahir')
                                <div>{{$message}}</div>
                        @enderror

                        <div class="form">
                            <label for="whatsapp">No Whatsapp:</label>
                            <input type="text" id="whatsapp" name="whatsapp" value="{{ $user->nomor }}">
                        </div>
                        @error('whatsapp')
                                <div>{{$message}}</div>
                        @enderror

                        <div class="form">
                            <label for="password">Buat Kata Sandi Baru:</label>
                            <input type="password" id="password" name="password" placeholder="Masukkan Kata Sandi Terbaru">
                        </div>
                        @error('password')
                                <div>{{$message}}</div>
                        @enderror
                    </div>
                    <div class="img-con">
                        <img src=" {{ $user->foto == null ? 'icons/user.svg' : '/images/'.$user->foto }}" alt="foto">
                        <div class="change-photo">
                            <label for="foto" class="btn">Upload Photo</label>
                            <input id="foto" name="foto" type="file" hidden>
                        </div>
                        @error('foto')
                                <div>{{$message}}</div>
                        @enderror
                        <button type="submit">Update Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="riwayat">
        <table class="riwayat-table">
            <thead>
                <tr>
                    <th colspan="5">Riwayat Janji Temu Dokter</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>No</td>
                    <td>Nama Dokter</td>
                    <td>Tanggal Kunjungan</td>
                    <td>Waktu Kunjungan</td>
                    <td>Status</td>
                </tr>
                @foreach ($janji as $janji)
                    <tr class="white-row">
                        <td>{{$noJanji++}}</td>
                        <td>{{$janji->namaDokter}}</td>
                        <td>{{$janji->tglJanji}}</td>
                        <td>{{$janji->waktuJanji}}</td>
                        <td>
                            @if ($janji->status == "1")
                               Menunggu <a href="/batal/{{$janji->id}}" class="Batal">X</a>
                            @elseif ($janji->status == "2")
                                Diterima
                            @elseif ($janji->status == "0")
                                Ditolak <p class="infoJanji">i</p>
                                <p class="theInfo">{{ $janji->alasan }}</p>
                            @endif
                        </td>
                    </tr>
                @endforeach
                <!-- tambahkan baris sesuai dengan data yang ada -->
            </tbody>
        </table>
    </div>





    @endsection



</body>

</html>
