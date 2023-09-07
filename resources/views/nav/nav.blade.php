
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/font.css" />
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head> 
<header>

    {{-- <label for="toggler" class="fas fa-bars"></label> --}}


    <a href="images/KanataIcons.png" class="logo">Lesyuk<span>.</span></a>

    <nav class="navbar">
      <div class="row">
      <a href="home.html">Home</a>
      <div class="foo-dropdown">
        <button class="foo-dropbtn">Temukan<i class="bi bi-caret-down-fill"></i></button>
        <div class="foo-dropdown-content">
            <a href="/outdaftar">Daftar Guru</a>
            <a href="/listteacher">Daftar Les</a>
        </div>
    </div>
      <a href="">Konsultasi</a>
      <a href="#contact">Tentang kami</a>
      </div>
    </div>
      
    </nav>

    <div class="row">

      {{-- <div class="circle">
        <a class="heart">
            <i class="bi bi-suit-heart"></i>
        </a>
    </div> --}}
    
    



    <div class="avatar-dropdown">
      <a class="avatar-dropbtn" id="avatar-button">
        <div class="row">
          <img class="avatar" src="img/org3.jpeg" alt="User Avatar">
    
        </div>
       
      </a>
      <div class="avatar-dropdown-content" id="avatar-dropdown-content">
    
        <a href="/outdaftar">Love</a>
        <a href="/outdaftar">Favorit saya</a>
        <a href="/listteacher">Transaksi History</a>
        <hr class="line">
        <a href="/profile">Profile Saya</a>
        <a href="/listteacher">Keluar</a>
      </div>
    </div>



    <script>
  
      const avatarButton = document.getElementById('avatar-button');
      const avatarDropdownContent = document.getElementById('avatar-dropdown-content');
      
      avatarButton.addEventListener('click', function() {
        if (avatarDropdownContent.style.display === 'block') {
          avatarDropdownContent.style.display = 'none';
        } else {
          avatarDropdownContent.style.display = 'block';
        }
      });
      
    
      document.addEventListener('click', function(event) {
        if (!event.target.closest('.avatar-dropdown')) {
          avatarDropdownContent.style.display = 'none';
        }
      });
      </script>
  </header>