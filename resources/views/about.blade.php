<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <link rel="stylesheet" href="/css/about.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('partial.navbar')
        <!-- home section starts  -->
        <section>
            <div class="container">
                <div class="row">
                    <div>
                        <h1 class="kata1">Cari beberapa guru yang menarik</h1>
                        <p class="kata2">Daftarkan diri anda dan <br>dengan beberapa guru terbaik, <br>
                            di lesyuk dengan mudah dan aman </i></p>
                        <button class="btn1">Daftarkan</button>
                    </div>
                    <div>
                        <img class="foto1" src="image/sma.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div>
                    <h1 class="kata3">Bagaimana Mendaftarkan Tempat Les Anda</h1>
                </div>
                <div class="row1">
                    <div>
                        <img class="foto2" src="image/smp.png" alt="">
                    </div>
                    <div class="txt">
                        <div class="step">
                            <div class="numbered-box">1</div>
                            <p>Isi informasi tempat les, nama, alamat, nomor telepon, jenis les, dan biaya.</p>
                        </div>
                        <br>
                        <div class="step">
                            <div class="numbered-box">2</div>
                            <p>Unggah foto tempat les anda yang menarik dan relevan. Pastikan foto-foto tersebut berkualitas dan memberikan gambaran yang baik tentang tempat les Anda.</p>
                        </div>
                        <br>
                        <div class="step">
                            <div class="numbered-box">3</div>
                            <p>Tentukan target pasar yang ingin Anda capai dengan tempat les Anda. Apakah Anda ingin menjangkau pelajar sekolah dasar, atau pelajar sekolah menengah.</p>
                        </div>
                        <br>
                        <div class="step">
                            <div class="numbered-box">4</div>
                            <p>Terus perbarui informasi tentang tempat les anda di website untuk memastikan informasi yang diberikan selalu akurat dan terbaru.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="container">
                <div>
                    <h1 class="kata3">Ada pertanyaan tentang pendaftaran anda? Kami punya jawaban!</h1>
                </div>
                <div class="row2">
                    <div>
                        <div class="dropdown">
                            <div class="dropdown-toggle" href="#">
                                <p>Bagaimana cara menentukan harga<br>dan biaya yang tepat untuk kursus di<br>tempat les? <i class="fa fa-chevron-down"></i></p>
                            </div>
                            <div class="dropdown-menu">
                                <p>Bagaimana cara menentukan harga<br>dan biaya yang tepat untuk kursus di<br>tempat les?</p>
                            </div>
                        </div>
                        <p>
                        <div class="dropdown">
                            <div class="dropdown-toggle" href="#">
                                <p>Bagaimana cara menentukan harga<br>dan biaya yang tepat untuk kursus di<br>tempat les? <i class="fa fa-chevron-down"></i></p>
                            </div>
                            <div class="dropdown-menu">
                                <p>Bagaimana cara menentukan harga<br>dan biaya yang tepat untuk kursus di<br>tempat les?</p>
                            </div>
                        </div>
                        </p>
                        <p>
                        <div class="dropdown">
                            <div class="dropdown-toggle" href="#">
                                <p>Bagaimana cara menentukan harga<br>dan biaya yang tepat untuk kursus di<br>tempat les? <i class="fa fa-chevron-down"></i></p>
                            </div>
                            <div class="dropdown-menu">
                                <p>Bagaimana cara menentukan harga<br>dan biaya yang tepat untuk kursus di<br>tempat les?</p>
                            </div>
                        </div>
                        </p>
                    </div>
                    <div>
                        <img class="foto3" src="image/sd.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- REQUIRED SCRIPTS -->

        @include('admin.script')
</body>

</html>