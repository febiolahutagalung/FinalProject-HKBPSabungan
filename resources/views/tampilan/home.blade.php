@extends('layout.user')

@section('container')

      
            <!-- Carousel Start -->
            <div class="carousel-header">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="{{ URL::asset('Template/img/GEREJA1.jpg') }}" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Horas!!</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">Selamat Datang Di HKBP Sabungan!</h1>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{URL::asset('Template/img/GEREJA2.jpg')}}" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Horas!!</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">Selamat Datang Di HKBP Sabungan!</h1>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ URL::asset('Template/img/GEREJA3.jpg') }}" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Horas!!</h4>
                                    <h1 class="display-2 text-capitalize text-white mb-4">Selamat Datang Di HKBP Sabungan!</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
       
        <!-- Navbar & Hero End -->

        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="h-100" style="border: 10px solid; border-color: transparent transparent transparent ">
                            <img src="{{ URL::asset('Template/img/GEREJA4.png') }}" class="img-fluid w-10 h-10" alt="">
                        </div>
                    </div>
                    
                    <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), ">
                        <h5 class="section-about-title pe-3">Sejarah Gereja</h5>
                        <h1 class="mb-4">Selamat Datang di HKBP Sabungan Kota</span></h1>
                        <p class="mb-4">Gereja HKBP Sabungan, sebagian dari sejarah gereja di Indonesia, 
                                        berakar dalam perjalanan iman dan perjuangan masyarakat Batak Toba sejak awal abad ke-19.
                                         Meskipun dihadapkan pada tantangan budaya dan sosial, 
                                         pendirian gereja ini pada tahun 1861 menjadi titik awal bagi komunitas yang berkumpul di Sabungan untuk memperkuat iman mereka.</p>
                        <p class="mb-4">Sebagai pusat kegiatan ibadah, sosial, dan pendidikan bagi masyarakat, 
                                        HKBP Sabungan telah menjadi lambang kekuatan iman dan pelayanan dalam menghadapi berbagai cobaan. 
                                        Dengan fondasi sejarah yang kokoh, gereja ini terus menjadi terang bagi dunia sekitarnya, memperkuat komunitasnya,
                                         dan memberkati masyarakat yang dilayaninya.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <div class="container-fluid bg-light service py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">FAQ</h5>
                    <h1 class="mb-0">Frequently Asked Question</h1>
                </div>
                <div class="row g-4">
                    @foreach ($dataFaq as $key => $item)
                        <div class="col-lg-6">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0" onclick="toggleAnswer(this)">
                                        <div class="service-icon p-4">
                                            <i class="fa fa-globe fa-4x text-primary"></i>
                                        </div>
                                        <div class="service-content">
                                            <h5 class="mb-4 question">{{ $item->pertanyaan }}</h5>
                                            <p class="mb-0 answer" style="display: none;">{{ $item->jawaban }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        <script>
            function toggleAnswer(element) {
                var answer = element.querySelector('.answer');
                if (answer.style.display === "none") {
                    answer.style.display = "block";
                } else {
                    answer.style.display = "none";
                }
            }
        </script>
         
        

       
        

               
@endsection
       
    