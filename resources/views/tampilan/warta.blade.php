<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warta Jemaat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
</head>
<body>

@extends('layout.user')

@section('container')
    <!-- Header Start -->
    <header class="bg-breadcrumb" style="background-image: url('{{ URL::asset('Template/img/bg1.png')}}');">
        <div class="container text-center py-5">
            <h3 class="text-white display-3 mb-4">Warta Jemaat</h3>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
            </ol>
        </div>
    </header>
    <!-- Header End -->

    <!-- Packages Start -->
    <div class="packages py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5">
                <h5 class="section-title px-3">-</h5>
                <h1 class="mb-0">Warta Jemaat</h1>
            </div>
            <div class="packages-carousel owl-carousel">
                @foreach ($dataWarta as $item)
                    <div class="packages-item">
                        <a href="{{ URL::asset('Admin/photo/'.$item->photo) }}" data-lightbox="image">
                            <img src="{{ URL::asset('Admin/photo/'.$item->photo) }}" class="img-fluid w-100 rounded-top" alt="Image">
                        </a>
                        <div class="packages-content bg-light">
                            <h5 class="mb-0">{{ $item->judul }}</h5>
                            <div class="mb-3">
                                <small class="fa fa-window-minimize text-primary"></small>
                                <small class="fa fa-window-minimize text-primary"></small>
                                <small class="fa fa-window-minimize text-primary"></small>
                                <small class="fa fa-window-minimize text-primary"></small>
                                <small class="fa fa-window-minimize text-primary"></small>
                            </div>
                            <p class="mb-4">{{ $item->keterangan }}</p>
                        </div>
                        <div class="row bg-primary rounded-bottom mx-0">
                            <div class="col-6 text-start px-0">
                                <a href="#" class="btn-hover btn text-white py-2 px-4">{{ $item->tanggal }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(document).ready(function() {
        $('.packages-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    });
</script>

</body>
</html>
