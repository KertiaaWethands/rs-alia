<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alia Hospital</title>
    <link rel="stylesheet" href="css/layananpenunjang.css">
    <style>
        .carousel img {
            width: 80%;
            height: auto;
            padding-left: 10px;
            position: absolute;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .carousel img.active {
            opacity: 1;
        }

        .carousel img.previous {
            left: -100%;
        }

        .carousel img.next {
            left: 100%;
        }

        .carousel img.previous.active,
        .carousel img.next.active {
            opacity: 1;
            left: 0;
        }
    </style>
</head>

<body class="page">
    @extends('Layout.app_home')

    @section('content')

    <div class="carousel">
        <img src="images/layananPenunjang31.png" alt="Gambar" class="active">
        <img src="images/layananPenunjang32.png" alt="Gambar">
    </div>
    <button class="carousel-control prev"><img src="icons/next.svg" alt=""></button>
    <button class="carousel-control next"><img src="icons/prev.svg" alt=""></button>
    @endsection
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const carousel = document.querySelector('.carousel');
            const prevButton = document.querySelector('.carousel-control.prev');
            const nextButton = document.querySelector('.carousel-control.next');
            const images = carousel.querySelectorAll('img');
            const imageCount = images.length;
            let currentIndex = 0;

            function showImage(index) {
                images.forEach((image, i) => {
                    image.classList.remove('active', 'previous', 'next');
                    if (i === index) {
                        image.classList.add('active');
                    } else if (i === currentIndex) {
                        image.classList.add('previous');
                    } else if (i === (currentIndex + 1) % imageCount || (currentIndex === imageCount - 1 && i === 0)) {
                        image.classList.add('next');
                    }
                });
            }

            prevButton.addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + imageCount) % imageCount;
                showImage(currentIndex);
            });

            nextButton.addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % imageCount;
                showImage(currentIndex);
            });

            // Show the first image initially
            showImage(currentIndex);
        });
    </script>
</body>

</html>
