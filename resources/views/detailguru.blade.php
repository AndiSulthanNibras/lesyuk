<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  type="text/css" rel="stylesheet" href="/css/detailguru.css">
    <link  type="text/css" rel="stylesheet" href="/css/font.css">
    <link  rel="stylesheet" href="fontawesome/css/all.css">
    <title>Document</title>
</head>
<body>
    <div class="row1">
        <div>
            <div class="brd">

                <p>Bahasa Ingris</p>
                <h1>Belajar Bahasa Inggris<br> menjadi lebih mudah,<br> nyaman dan menyenangkan<br> bersama mentor 12 tahun <br>pengalaman.</h1>
            </div>
            <div class="tmpt">
                <h2>Tempat Kursus</h2>
                <div class="row">
                    <p><i class="fa-regular fa-location-dot"></i> Rumah Alan:Gribig</p>
                    <p class="ap"> <i class="fa-regular fa-video"></i>  Melalui aplikasi Zoom</p>
                </div>
            </div>
            <div class="tnt">
                <h2>Tentang Alan</h2>
                <p>Mau belajar bahasa Inggris? Ayo belajar bareng bersama saya~ <br>Gak ada kata terlambat untuk belajar bahasa inggris</p>
                <p>Saya sudah memeberikan materi bahasa inggris selama 2 <br>tahun. Pengalaman yang saya miliki pun hanya dari pelajaran <br>bahasa inggris disekolah saya dulu yang sekarang saya menjadi<br> guru bahasa inggris di SMK Raden Umar Said Kudus.</p>
                <p>Sampai saat ini saya sudah mengajar beberapa anak baik <br>secara privat maupun secara group. </p>
                <p>Saya mengedepankan hubungan intrapersonal yang baik <br>antara tutor dan pelajar sehingga pelajar memiliki kepercayaan <br>diri untuk belajar</p>
            </div>
        </div>
       

        <div class="card">
            <div class="mdl">
                <i class="fa-solid fa-medal"></i>
                <a class="fa-sharp fa-regular fa-heart"></a>
            </div>
            <img class="foto1" src="img/org1.png" alt="">
            <div class="card-content">
              <h1>ALAN</h1>
              <div class="step">
                <div class="number"><i class="fa-solid fa-star"></i>5</div>
                <p class="ulasan"></i>(53 Ulasan)</p>
              </div>
      
              <div class="step">
                <div class="tarif">Tarif per bulan</div>
                <p class="harga">Rp120.000</p>
              </div>
      
              <div class="step">
                <div class="waktu">Lama waktu</div>
                <p class="jm">2j/hari</p>
              </div> 

              <div class="step">
                <div class="jmlh">Jumlah murid</div>
                <p class="no">21</p>
              </div>
              <div class="bt">
                    <a class="btn" href="/pembayaran" >
                        Reservesi Kursus</a>
              </div>
            </div> 
        </div>
    </div>

    <div>
        <h2 class="tentang">Tentang kursus ini</h2>
        <div class="klmp">
            <i class="fa-solid fa-graduation-cap"></i>
            <p>Sekolah Dasar<br>(SD)</p>
            <p>Sekolah Menengah Pertama<br>(SMP)</p>
            <p>Sekolah Menengah Atas <br>(SMA)</p>
        </div>
    </div>  
    <div class="row2">
        <h2>Ulasan</h2>
        <div class="pas">
            <div class="jjm"><i class="fa-solid fa-star"></i>5</div>
            <p class="ull">(47 ulasan)</p>
        </div>
        
    </div>

    <div class="card1">
        <div class="avatar">
            <img src="img/org1.png" alt="Avatar">
            <h2>Andi</h2>
        </div>
        <div class="container">
            <p>Alan adalah guru yang baik dan sabar. Saya sangat senang belajar bersama Alan. Saya sangat merekomendasikan Alan sebagai guru bahasa Inggris.</p>
        </div>
    </div>

    <div class="card1">
        <div class="avatar">
            <img src="img/org1.png" alt="Avatar">
            <h2>Andi</h2>
        </div>
        <div class="container">
            <p>Alan adalah guru yang baik dan sabar. Saya sangat senang belajar bersama Alan. Saya sangat merekomendasikan Alan sebagai guru bahasa Inggris.</p>
        </div>
    </div>

    <div class="card1">
        <div class="avatar">
            <img src="img/org1.png" alt="Avatar">
            <h2>Andi</h2>
        </div>
        <div class="container">
            <p>Alan adalah guru yang baik dan sabar. Saya sangat senang belajar bersama Alan. Saya sangat merekomendasikan Alan sebagai guru bahasa Inggris.</p>
        </div>
    </div>

    <div class="flex">
        <h2 class="guru">Guru Les Lainnya</h2>
        <div>
            <button id="backBtn"><i class="fa-solid fa-arrow-up fa-rotate-270"></i></button>
            <button  id="nextBtn"><i class="fa-solid fa-arrow-up fa-rotate-90"></i></button>
        </div>
    </div>

    <div class="gallery-wrap">
        <div class="gallery">
            <div>
                <span> <img src="img/org1.png"></span>
                <span> <img src="img/org1.png"></span>
                <span> <img src="img/org1.png"></span>
            </div>
            <div>
                <span><img src="img/org1.png"></span>
                <span> <img src="img/org1.png"></span>
                <span> <img src="img/org1.png"></span>
            </div>
        </div>
    </div>

    
    
    <script>
        let scrollContainer = document.querySelector(".gallery");
        let backBtn = document.getElementById("backBtn");
        let nextBtn = document.getElementById("nextBtn");
    
        scrollContainer.addEventListener("wheel", (evt) => {
            evt.preventDefault();
            scrollContainer.scrollLeft += evt.deltaY;
            scrollContainer.style.scrollBehavior = "auto";
        });
    
        nextBtn.addEventListener("click", () => {
            scrollContainer.style.scrollBehavior = "smooth";
            scrollContainer.scrollLeft += 950;
        });
    
        backBtn.addEventListener("click", () => {
            scrollContainer.style.scrollBehavior = "smooth";
            scrollContainer.scrollLeft -= 950;
        });
    </script>

                                

</body>


