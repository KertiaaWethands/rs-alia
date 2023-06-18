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
            <form action="/buatjanji2" method="POST" class="form">
                @csrf
                <div class="login-contain">
                    <div class="text-title">
                        Buat janji temu dokter
                    </div>
                    <div class="input-data">
                        <div class="option">
                            <select name="dokter" id="dokter">
                                <option selected disabled>Nama Dokter</option>
                                @foreach ($dokter as $dokter)
                                    <option value="{{$dokter->id}}">{{$dokter->namaDokter}}</option>
                                @endforeach
                            </select>
                        </div>
                    <div class="button">
                        <button type="submit">Pilih Dokter</button>
                    </div>
                </div>
            </form>
        </div>
    @endsection

</body>
</html>
