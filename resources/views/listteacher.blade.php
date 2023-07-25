<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="/css/listteacher.css" />
    <link  type="text/css" rel="stylesheet" href="/css/font.css">
    <link  rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>
    <!-- header section starts  -->
    @include('nav.nav')

    


    {{-- <section class="card-section"> --}}
    

      <div class="btn-container">
        <a class="btn" href="/detailguru"><span>Lihat Selengkapnya</span></a>
      </div>
{{-- 
      <div class="row"> --}}
    
          <div class="card">
            <div class="card-image">
              <img class="pct" src="img/org1.png" alt="Image 1">
              <div class="image-text">Adiarja Halimn</div>
              <div class="image-text1">Singocandi</div>
            </div>
            <div class="card-content">
              <div class="step">
                <div class="number"><i class="fa-solid fa-star"></i>4</div>
                <p class="ulasan"></i>(53 Ulasan)</p>
              </div>
              <div class="lokasi">Belajar Bahasa Inggris menjadi lebih mudah, nyaman dan ...</div>
              
              <a class="btn" href="/detailguru"><span>Lihat Selengkapnya</span></a>
              
             
              
            </div>
          </div>

          


{{--        
          <div class="card">
            <div class="card-image">
              <img class="pct" src="img/org1.png" alt="Image 1">
              <div class="image-text">Adiarja Halimn</div>
              <div class="image-text1">Singocandi</div>
            </div>
            <div class="card-content">
              <div class="step">
                <div class="number"><i class="fa-solid fa-star"></i>4</div>
                <p class="ulasan"></i>(53 Ulasan)</p>
              </div>
              <div class="lokasi">Belajar Bahasa Inggris menjadi lebih mudah, nyaman dan ...</div>
              
              <div class="spc">
                <a class="button" href="/detailguru">Lihat Selengkapnya</a>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-image">
              <img class="pct" src="img/org1.png" alt="Image 1">
              <div class="image-text">Adiarja Halimn</div>
              <div class="image-text1">Singocandi</div>
            </div>
            <div class="card-content">
              <div class="step">
                <div class="number"><i class="fa-solid fa-star"></i>4</div>
                <p class="ulasan"></i>(53 Ulasan)</p>
              </div>
              <div class="lokasi">Belajar Bahasa Inggris menjadi lebih mudah, nyaman dan ...</div>
              
              <div class="spc">
                <a class="button" href="/detailguru">Lihat Selengkapnya</a>
              </div>
            </div>
          </div>

      </div>

      <div class="row">

          <div class="card">
            <div class="card-image">
              <img class="pct" src="img/org1.png" alt="Image 1">
              <div class="image-text">Adiarja Halimn</div>
              <div class="image-text1">Singocandi</div>
            </div>
            <div class="card-content">
              <div class="step">
                <div class="number"><i class="fa-solid fa-star"></i>4</div>
                <p class="ulasan"></i>(53 Ulasan)</p>
              </div>
              <div class="lokasi">Belajar Bahasa Inggris menjadi lebih mudah, nyaman dan ...</div>
              
              <div class="spc">
                <a class="button" href="/detailguru">Lihat Selengkapnya</a>
              </div>
            </div>
          </div>

         <div class="card">
            <div class="card-image">
              <img class="pct" src="img/org1.png" alt="Image 1">
              <div class="image-text">Adiarja Halimn</div>
              <div class="image-text1">Singocandi</div>
            </div>
            <div class="card-content">
              <div class="step">
                <div class="number"><i class="fa-solid fa-star"></i>4</div>
                <p class="ulasan"></i>(53 Ulasan)</p>
              </div>
              <div class="lokasi">Belajar Bahasa Inggris menjadi lebih mudah, nyaman dan ...</div>
              
              <div class="spc">
                <a class="button" href="/detailguru">Lihat Selengkapnya</a>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-image">
              <img class="pct" src="img/org1.png" alt="Image 1">
              <div class="image-text">Adiarja Halimn</div>
              <div class="image-text1">Singocandi</div>
            </div>
            <div class="card-content">
              <div class="step">
                <div class="number"><i class="fa-solid fa-star"></i>4</div>
                <p class="ulasan"></i>(53 Ulasan)</p>
              </div>
              <div class="lokasi">Belajar Bahasa Inggris menjadi lebih mudah, nyaman dan ...</div>
              
              <div class="spc">
                <a class="button" href="/detailguru">Lihat Selengkapnya</a>
              </div>
            </div>
          </div>

      </div>


      <div class="row">

         <div class="card">
            <div class="card-image">
              <img class="pct" src="img/org1.png" alt="Image 1">
              <div class="image-text">Adiarja Halimn</div>
              <div class="image-text1">Singocandi</div>
            </div>
            <div class="card-content">
              <div class="step">
                <div class="number"><i class="fa-solid fa-star"></i>4</div>
                <p class="ulasan"></i>(53 Ulasan)</p>
              </div>
              <div class="lokasi">Belajar Bahasa Inggris menjadi lebih mudah, nyaman dan ...</div>
              
              <div class="spc">
                <a class="button" href="/detailguru">Lihat Selengkapnya</a>
              </div>
            </div>
          </div>


         <div class="card">
            <div class="card-image">
              <img class="pct" src="img/org1.png" alt="Image 1">
              <div class="image-text">Adiarja Halimn</div>
              <div class="image-text1">Singocandi</div>
            </div>
            <div class="card-content">
              <div class="step">
                <div class="number"><i class="fa-solid fa-star"></i>4</div>
                <p class="ulasan"></i>(53 Ulasan)</p>
              </div>
              <div class="lokasi">Belajar Bahasa Inggris menjadi lebih mudah, nyaman dan ...</div>
              
              <div class="spc">
                <a class="button" href="/detailguru">Lihat Selengkapnya</a>
              </div>
            </div>
          </div>
          

          <div class="card">
            <div class="card-image">
              <img class="pct" src="img/org1.png" alt="Image 1">
              <div class="image-text">Adiarja Halimn</div>
              <div class="image-text1">Singocandi</div>
            </div>
            <div class="card-content">
              <div class="step">
                <div class="number"><i class="fa-solid fa-star"></i>4</div>
                <p class="ulasan"></i>(53 Ulasan)</p>
              </div>
              <div class="lokasi">Belajar Bahasa Inggris menjadi lebih mudah, nyaman dan ...</div>
              
              <div class="spc">
                <a class="button" href="/detailguru">Lihat Selengkapnya</a>
              </div>
            </div>
          </div>

      </div>   --}}

        



        
    
      </section>
      
      @include('nav.footer')

      <script>
        const btn = document.querySelector(".btn");
        btn.onmousemove = function (e){
          const x = e.pageX - btn.offsetLeft;
          const y = e.pageY - btn.offsetTop;

          btn.style.setProperty("--x", x + "px");
          btn.style.setProperty("--y", y + "px");
        };
       
      </script>
</body>
</html>