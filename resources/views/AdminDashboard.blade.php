<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Alia Hospital</title>
    <link rel="stylesheet" href="/css/admindashboard.css">
    <script src="https://kit.fontawesome.com/88c065724b.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="content-1">
        <div class="title-1" style="text-align: center; text-decoration:underline">
            Permintaan Janji Temu Dokter</p>
        </div>
        <div class="table-1">
            <table>
                <tr>
                    <th class="kecil-1" style="border-top-left-radius:10px; border-bottom-left-radius:10px;">No</th>
                    <th class="besar-1">Nama Pasien</th>
                    <th class="kecil-1">WA</th>
                    <th class="besar-1">Nama Dokter</th>
                    <th class="besar-1">Tanggal & Waktu Kunjungan</th>
                    <th class="besar-1" style="border-top-right-radius:10px; border-bottom-right-radius:10px;">Status</th>
                </tr>
                @foreach ($janji as $janji)
                    <tr>
                        <td class="kecil-1" style="border-top-left-radius:10px; border-bottom-left-radius:10px;">
                            {{ $idjanji++ }}
                        </td>
                        <td class="besar-1">
                            <a href="/profile/{{$janji->idPengguna}}">{{ $janji->nama }}</a>
                        </td>
                        <td class="kecil-1">
                            <a href="https://wa.me/{{$janji->nomor}}" target="_blank" class="logo-wa"><i class="fa-brands fa-whatsapp"></i></a>
                        </td>
                        <td class="besar-1">
                            {{ $janji->namaDokter }}
                        </td>
                        <td class="besar-1">
                            {{$janji->tglJanji}}, {{$janji->waktuJanji}}
                        </td>
                        <td class="besar-1" style="border-top-right-radius:10px; border-bottom-right-radius:10px;">
                            @if ($janji->status == "1")
                                <span>
                                    <a href="/approve/{{$janji->id}}" class="approve">Approve</a>
                                </span>
                                <span>
                                    <a href="/decline/{{$janji->id}}" class="decline">Decline</a>
                                </span>
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
    <div class="content-2">
        <div class="title-2">
            <span class="text-title-2">Jadwal Praktek Dokter</span>
            <span class="button-title-2"><a href="/addDokter">+</a></span>
        </div>
        <div class="table-2">
            <table>
                <tr>
                    <th class="kecil-2" style="border-top-left-radius:10px; border-bottom-left-radius:10px;">No</th>
                    <th class="besar-2">Nama Dokter</th>
                    <th class="kecil-2">Foto</th>
                    <th class="besar-2">Spesialis</th>
                    <th class="besar-2">Jadwal Praktek</th>
                    <th class="besar-2" style="border-top-right-radius:10px; border-bottom-right-radius:10px;">Action</th>
                </tr>
                @foreach ($dokter as $dokter)
                    <tr>
                        <td class="kecil-2" style="border-top-left-radius:10px; border-bottom-left-radius:10px;">
                            {{ $idDokter++ }}
                        </td>
                        <td class="besar-2">
                            {{$dokter->namaDokter}}
                        </td>
                        <td class="kecil-2">
                            <img src="/images/{{$dokter->foto}}" alt="Foto Dokter" style="width: 80px; height:80px">
                        </td>
                        <td class="besar-2">
                            {{$dokter->spesialis}}
                        </td>
                        <td class="besar-2">
                            {{$dokter->hari}}, {{$dokter->waktuAwal}} - {{$dokter->waktuAkhir}}
                        </td>
                        <td class="besar-2" style="border-top-right-radius:10px; border-bottom-right-radius:10px;">
                            <div>
                                <a href="/update/{{$dokter->id}}" class="update">Update</a>
                            </div>
                            <div style="margin-top: 20px">
                                <a href="/delete/{{$dokter->id}}" class="delete">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>