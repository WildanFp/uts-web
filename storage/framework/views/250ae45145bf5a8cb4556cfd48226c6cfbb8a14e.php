<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Catalog</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-video-catalog.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>

    <style>
        #mapid {
            height: 400px;
        }

    </style>
    <!--

TemplateMo 552 Video Catalog

https://templatemo.com/tm-552-video-catalog

-->
</head>

<body>
    <div class="tm-page-wrap mx-auto">
        <div class="position-relative">
            <div class="position-absolute tm-site-header">
                <div class="container-fluid position-relative">
                    <div class="row">
                        <div class="col-7 col-md-4">

                        </div>
                        <div class="col-5 col-md-8 ml-auto mr-0">
                            <div class="tm-site-nav">
                                <nav class="navbar navbar-expand-lg mr-0 ml-auto" id="tm-main-nav">
                                    <button class="navbar-toggler tm-bg-black py-2 px-3 mr-0 ml-auto collapsed"
                                        type="button" data-toggle="collapse" data-target="#navbar-nav"
                                        aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                                        <span>
                                            <i class="fas fa-bars tm-menu-closed-icon"></i>
                                            <i class="fas fa-times tm-menu-opened-icon"></i>
                                        </span>
                                    </button>
                                    <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                                        <ul class="navbar-nav text-uppercase">
                                            <li class="nav-item active">
                                                <a class="nav-link tm-nav-link" href="#">Videos <span
                                                        class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="about.html"></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="contact.html"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-welcome-container text-center text-white">
                <div class="tm-welcome-container-inner">
                    <p class="tm-welcome-text mb-1 text-white">Wisata Jatim Park 3 di Batu!</p>
                    <p class="tm-welcome-text mb-5 text-white">mari telusuri</p>
                    <a href="#content" class="btn tm-btn-animate tm-btn-cta tm-icon-down">
                        <span>Discover</span>
                    </a>
                </div>
            </div>

            <div id="tm-video-container">
                <video autoplay muted loop id="tm-video">
                    <!-- <source src="video/sunset-timelapse-video.mp4" type="video/mp4"> -->
                    <source src="video/wheat-field.mp4" type="video/mp4">
                </video>
            </div>

            <i id="tm-video-control-button" class="fas fa-pause"></i>
        </div>

        <div class="container-fluid">
            <div id="content" class="mx-auto tm-content-container">
                <main>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-page-title mb-4">Objek wahana Di jatimpark 3</h2>
                           
                        </div>
                    </div>

                    <div class="row tm-catalog-item-list">
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/tn-01.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                               
                            </div>
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Dino Park</h3>
                                <p class="tm-catalog-item-text">Wahana yang pertama bernama Dino Park, sesuai namanya
                                    kamu akan mendapatkan banyak sekali informasi tentang semua hal yang berkaitan
                                    dengan Dinosaurus.

                                    Untuk para Dinoholic pasti akan bersemangat ketika mengunjungi Dino Park, yang
                                    paling seru ialah ketika kamu memasuki wahana berkeliling 5 zaman dengan menggunakan
                                    sebuah kereta layaknya roller coaster..</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/tn-02.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                               
                            </div>
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">the Legend Stars</h3>
                                <p class="tm-catalog-item-text">Wahana seru yang kedua ialah sebuah tempat yang mirip
                                    dengan Museum Madame Tussauds, yang berisikan tokoh-tokoh dunia yang terbuat dari
                                    lilin.

                                    The Legend Stars merupakan lokasi pertama yang ada di Indonesia dengan menyajikan
                                    ratusan patung lilin dari tokoh-tokoh serta artis-artis dunia. Pengunjung yang
                                    datang banyak yang mengabadikan momen ketika bersama dengan tokoh yang diimpikannya.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/tn-03.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                                
                            </div>
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Fun Tech Plaza</h3>
                                <p class="tm-catalog-item-text">Fun Tech Plaza merupakan sebuah atraksi atau wahana yang
                                    berbalut teknologi dan dijamin seru banget, berikut beberapa atraksi yang bisa kamu
                                    coba:

                                    Aqua Sketch, 
                                    Giant Piano, 
                                    Zumba Dance, 
                                    Laser Action, 
                                    Virtual 6, 
                                    Geosand Map, 
                                    Bomb Hunter, 
                                    Tiket masuk Fun Tech Plaza yakni Rp. 40.000,- di weekday dan Rp. 50.000,- untuk
                                    weekend dan hari libur lainnya.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/tn-04.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                                
                            </div>
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Museum musik dunia</h3>
                                <p class="tm-catalog-item-text">Untuk kamu para pecinta musik, lengkapi pengetahuan
                                    bermusik kamu dengan mengunjungi Museum Musik Dunia di Jatim Park 3. Di sini kamu
                                    akan menemukan berbagai alat musik yang berasal dari Indonesia hingga mancanegara.

                                    Selain alat musik, kamu juga akan mendapatkan wawasan tentang alat-alat musik
                                    kebanggan dari berbagai benua, mengenal genre musik, serta ada pula memorabilia dan
                                    simple audio dari masing-masing musisi.



                                    Selain itu ada pula berbagai koleksi alat musik klasik dan music box yang berasal
                                    dari puluhan tahun yang lalu. Pokoknya pengetahuan musik kamu akan bertambah deh.

                                    Museum Musik Dunia dibuka mulai pukul 11 siang hingga pukul 7 malam, dengan harga
                                    tiket masuk sebesar Rp. 40.000,- untuk hari Senin hingga Kamis dan Rp. 50.000,-
                                    untuk hari Jumat hingga Minggu serta hari-hari libur lainnya.

                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/tn-05.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                               
                            </div>
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Milenial Glow Garden</h3>
                                <p class="tm-catalog-item-text">Luas dari Milenial Glow Garden sekitar 2 hektar, dan
                                    terbagi kedalam dua area yakni outdoor dan indoor. Untuk area indoor terdapat
                                    sedikitnya 16 titik dengan tema yang berbeda-beda.

                                    Dengan menyajikan perpaduan antara teknologi proyeksi dan sensor sehingga
                                    menampilkan pencahayaan yang interaktif. Sehingga menjadikannya sebagai tempat yang
                                    kece banget untuk berfoto.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/tn-06.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                               
                            </div>
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Keliling dunia</h3>
                                <p class="tm-catalog-item-text">Atraksi seru yang selanjutnya ialah mengelilingi dunia
                                    dalam satu waktu, negara-negara tersebut diantaranya:

                                    Kampung Jepang
                                    Little Amsterdam
                                    Taj Mahal dan bangunan-bangunan lain ala-ala India
                                    Korea
                                    Istana Negara
                                    White House
                                    Wahana yang satu ini menjadi salah satu lokasi favorit pengunjung untuk berfoto,
                                    kamu akan mendapatkan suasana yang sama seperti di negera asalnya.

                                </p>
                            </div>
                        </div>
                </main>

                 <div id="mapid"></div>

                <footer class="row pt-5">
                    <div class="col-12">
                        <p class="text-right">Copyright 2020 The Video Catalog Company

                            - Designed by <a href="https://templatemo.com" rel="nofollow"
                                target="_parent">TemplateMo</a></p>
                    </div>
                </footer>
            </div> <!-- tm-content-container -->
        </div>

    </div> <!-- .tm-page-wrap -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function setVideoSize() {
            const vidWidth = 1920;
            const vidHeight = 1080;
            let windowWidth = window.innerWidth;
            let newVidWidth = windowWidth;
            let newVidHeight = windowWidth * vidHeight / vidWidth;
            let marginLeft = 0;
            let marginTop = 0;

            if (newVidHeight < 500) {
                newVidHeight = 500;
                newVidWidth = newVidHeight * vidWidth / vidHeight;
            }

            if (newVidWidth > windowWidth) {
                marginLeft = -((newVidWidth - windowWidth) / 2);
            }

            if (newVidHeight > 720) {
                marginTop = -((newVidHeight - $('#tm-video-container').height()) / 2);
            }

            const tmVideo = $('#tm-video');

            tmVideo.css('width', newVidWidth);
            tmVideo.css('height', newVidHeight);
            tmVideo.css('margin-left', marginLeft);
            tmVideo.css('margin-top', marginTop);
        }

        $(document).ready(function () {
            /************** Video background *********/

            setVideoSize();

            // Set video background size based on window size
            let timeout;
            window.onresize = function () {
                clearTimeout(timeout);
                timeout = setTimeout(setVideoSize, 100);
            };

            // Play/Pause button for video background      
            const btn = $("#tm-video-control-button");

            btn.on("click", function (e) {
                const video = document.getElementById("tm-video");
                $(this).removeClass();

                if (video.paused) {
                    video.play();
                    $(this).addClass("fas fa-pause");
                } else {
                    video.pause();
                    $(this).addClass("fas fa-play");
                }
            });
        })

        
        var mymap = L.map('mapid').setView([-7.8974657,112.5519547], 19);
        L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                maxZoom: 18,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1
            }).addTo(mymap);

        // ------------------ destination 1 ---------------------------
        var m1 = L.marker([-7.8974657,112.5519547]).addTo(mymap);
        m1.bindPopup("<h1>Jatimpark 3</h1>")

    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\uts-web\resources\views/layouts/index.blade.php ENDPATH**/ ?>