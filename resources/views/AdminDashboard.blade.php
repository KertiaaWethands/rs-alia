<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Alia Hospital</title>
    <link rel="stylesheet" href="/css/admindashboard.css">
    <script src="https://kit.fontawesome.com/88c065724b.js" crossorigin="anonymous"></script>
    <style>
        .content-1 {
            position: relative;
        }

        .form-pop {
            display: none;
            position: fixed;
            z-index: 999;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(5px);
            max-width: 300px;
        }

        .form-pop::before {
            content: '';
            position: fixed;
            z-index: -1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .form-pop.visible {
            display: block;
        }

    </style>
</head>

<body>
    <a href="/logout"><img class="logout" src="images/logout.png" alt=""></a>
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
                    <th class="besar-1" style="border-top-right-radius:10px; border-bottom-right-radius:10px;">Status
                    </th>
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
                        <a href="https://wa.me/{{$janji->nomor}}" target="_blank" class="logo-wa"><i
                                class="fa-brands fa-whatsapp"></i></a>
                    </td>
                    <td class="besar-1">
                        {{ $janji->namaDokter }}
                    </td>
                    <td class="besar-1">
                        {{$janji->tglJanji}}, {{$janji->waktuJanji}}
                    </td>
                    <td class="besar-1"
                        style="border-top-right-radius:10px; border-bottom-right-radius:10px; position:relative;">
                        @if ($janji->status == "1")
                        <span>
                            <a href="/approve/{{$janji->id}}" class="approve">Approve</a>
                        </span>
                        <span>
                            <button class="decline" onclick="openForm('myForm{{$janji->id}}')">Decline</button>
                        </span>
                        @elseif ($janji->status == "2")
                        Approve
                        @elseif ($janji->status == "0")
                        Decline
                        @endif
                        <div class="form-pop" id="myForm{{$janji->id}}">
                            <form action="/decline" method="POST">
                                @csrf
                                <input type="text" name="id" value="{{$janji->id}}" hidden readonly>
                                <select name="alasan" id="alasan">
                                    <option selected disabled>Alasan</option>
                                    <option value="Dokter Berhalangan">Dokter Berhalangan</option>
                                    <option value="Hari Libur">Hari Libur</option>
                                </select>
                                <button type="submit">Decline</button>
                            </form>
                        </div>
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
                    <th class="besar-2" style="border-top-right-radius:10px; border-bottom-right-radius:10px;">Action
                    </th>
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
                        @foreach ($jadwal as $item)
                            @if ($dokter->id == $item->idDokter)
                                {{$item->hari}}, {{$item->waktuAwal}} - {{$item->waktuAkhir}}
                                <br>
                            @endif
                        @endforeach
                    </td>
                    <td class="besar-2" style="border-top-right-radius:10px; border-bottom-right-radius:10px;">
                        <div>
                            <a href="/update/{{$dokter->id}}" class="update">Update</a>
                        </div>
                        <div style="margin-top: 20px">
                            <a href="/delete/{{$dokter->id}}" class="delete">Delete</a>
                        </div>
                        <div style="margin-top: 20px">
                            <a href="/addJadwal/{{$dokter->id}}" class="update">+ Jadwal</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <script>
        function openForm(formId) {
            document.getElementById(formId).classList.add("visible");
        }

    </script>
</body>

</html>
