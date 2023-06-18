<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alia Hospital</title>
    <link rel="stylesheet" href="css/buatjanji.css">
</head>
<body>

    @extends('Layout.app_home')

    @section('content')
        <div class=".container">
            <form action="/buatjanji" method="POST" class="form" style="height: 400px">
                @csrf   
                <div class="login-contain">
                    <div class="text-title">
                        Buat janji temu dokter
                    </div>
                    <div class="input-data">
                        <div hidden>
                            <input type="text" name="id" value="{{$dokter->id}}">
                        </div>
                        <div class="option">
                            <input type="text" name="nama" value="{{$dokter->namaDokter}}">
                        </div>
                        <div>
                            <input type="date" name="tglJanji" placeholder="Pilih Tanggal">
                        </div>
                        <div class="option">
                            <input type="text" name="waktuJanji" value="{{$dokter->waktuAwal}}" readonly>
                        </div>
                    </div>
                    <div class="button">
                        <button type="submit">Buat Janji</button>
                    </div>
                </div>
            </form>
        </div>
    @endsection

</body>
</html>
