<!-- <?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;

class HalamanController extends Controller
{

    public function tampilkanHalaman($id)
    {
        $data = [];

        switch ($id) {
            case 'layanan1':
                $data = [
                    'judul' => 'Judul Layanan 1',
                    'isi' => 'Isi Layanan 1',
                    'gambar' => 'gambar1.jpg'
                ];
                break;
            case 'layanan2':
                $data = [
                    'judul' => 'Judul Layanan 2',
                    'isi' => 'Isi Layanan 2',
                    'gambar' => 'gambar2.jpg'
                ];
                break;
            case 'layanan3':
                $data = [
                    'judul' => 'Judul Layanan 3',
                    'isi' => 'Isi Layanan 3',
                    'gambar' => 'gambar3.jpg'
                ];
                break;
            case 'layanan4':
                $data = [
                    'judul' => 'Judul Layanan 4',
                    'isi' => 'Isi Layanan 4',
                    'gambar' => 'gambar4.jpg'
                ];
                break;
            case 'layanan5':
                $data = [
                    'judul' => 'Judul Layanan 5',
                    'isi' => 'Isi Layanan 5',
                    'gambar' => 'gambar5.jpg'
                ];
                break;
            case 'layanan6':
                $data = [
                    'judul' => 'Judul Layanan 6',
                    'isi' => 'Isi Layanan 6',
                    'gambar' => 'gambar6.jpg'
                ];
                break;
            case 'layanan7':
                $data = [
                    'judul' => 'Judul Layanan 7',
                    'isi' => 'Isi Layanan 7',
                    'gambar' => 'gambar7.jpg'
                ];
                break;
            case 'layanan8':
                $data = [
                    'judul' => 'Judul Layanan 8',
                    'isi' => 'Isi Layanan 8',
                    'gambar' => 'gambar8.jpg'
                ];
                break;
            case 'layanan9':
                $data = [
                    'judul' => 'Judul Layanan 9',
                    'isi' => 'Isi Layanan 9',
                    'gambar' => 'gambar9.jpg'
                ];
                break;
            default:
                // Jika parameter 'id' tidak cocok, dapatkan data default atau sesuaikan dengan kebutuhan Anda.
                $data = [
                    'judul' => 'Judul Default',
                    'isi' => 'Isi Default',
                    'gambar' => 'gambar-default.jpg'
                ];
                break;
        }

        return view('nama_halaman', compact('data'));
    }

} -->
