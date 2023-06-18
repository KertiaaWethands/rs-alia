<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Alia Hospital</title>
    <link rel="stylesheet" href="/css/adminprofile.css">
    <script src="https://kit.fontawesome.com/88c065724b.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="profile-content">
        <div class="title">
            Profile-Pasien
        </div>
        <div class="profile-body">
            <div class="nama">
                <label for="nama" style="margin-right: 193px">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" value="{{$user->nama}}" readonly>
            </div>
            <div class="username">
                <label for="username" style="margin-right: 230px">Username</label>
                <input type="text" id="username" name="username" value="{{$user->username}}" readonly>
            </div>
            <div class="tglLahir">
                <label for="tglLahir" style="margin-right: 200px">Tanggal Lahir</label>
                <input type="text" id="tglLahir" name="tglLahir" value="{{$user->tglLahir}}" readonly>
            </div>
            <div class="noWA">
                <label for="noWA" style="margin-right: 175px">Nomor Whatsapp</label>
                <input type="text" id="noWA" name="noWA" value="{{$user->nomor}}" readonly>
            </div>            
            <div class="pict">
                <div>
                    <img src="/icons/dokter.svg" alt="Profile Picture">
                </div>
                <div class="logoWA">
                    Whatsapp <a href="https://wa.me/{{$user->nomor}}" class="logo-wa"><img src="/icons/wa.svg" alt=""></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="content-1">
        <div class="title-1" style="text-align: center; text-decoration:underline">
            Permintaan Janji Temu Dokter
        </div>
        <div class="table-1">
            <table>
                <tr>
                    <th class="kecil-1" style="border-top-left-radius:10px; border-bottom-left-radius:10px;">No</th>
                    <th class="besar-1">Nama Dokter</th>
                    <th class="besar-1">Tanggal Kunjungan</th>
                    <th class="besar-1">Waktu Kunjungan</th>
                    <th class="besar-1" style="border-top-right-radius:10px; border-bottom-right-radius:10px;">Status</th>
                </tr>
                @foreach ($janji as $janji)
                    <tr>
                        <td class="kecil-1" style="border-top-left-radius:10px; border-bottom-left-radius:10px;">
                            {{$idjanji++}}
                        </td>
                        <td class="besar-1">
                            {{$janji->namaDokter}}
                        </td>
                        <td class="besar-1">
                            {{$janji->tglJanji}}
                        </td>
                        <td class="besar-1">
                            {{$janji->waktuJanji}}
                        </td>
                        <td class="besar-1" style="border-top-right-radius:10px; border-bottom-right-radius:10px;">
                            @if ($janji->status == "1")
                                Waiting
                            @elseif ($janji->status == "2")
                                Approve
                            @elseif ($janji->status == "0")
                                Decline
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>