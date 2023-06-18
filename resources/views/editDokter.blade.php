<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alia Hospital</title>
    <link rel="stylesheet" href="/css/dokter.css">
</head>
<body>
        <div class=".container">
            <form action="/update" method="POST" class="form" style="height: 550px">
                @csrf
                <div class="login-contain">
                    <div class="text-title">
                        Update Data Dokter
                    </div>
                    <div class="input-data">
                        <div hidden>
                            <input type="text" name="id" value="{{$dokter->id}}">
                        </div>
                        <div class="option">
                            <input type="text" name="nama" value="{{$dokter->namaDokter}}">
                        </div>
                        <div>
                            <input type="text" name="spesialis" value="{{$dokter->spesialis}}">
                        </div>
                        <div>
                            <input type="text" name="hari" value="{{$dokter->hari}}">
                        </div>
                        <div>
                            <input type="text" name="waktuAwal" value="{{$dokter->waktuAwal}}">
                        </div>
                        <div>
                            <input type="text" name="waktuAkhir" value="{{$dokter->waktuAkhir}}">
                        </div>
                    </div>
                    <div class="button">
                        <button type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
</body>
</html>
