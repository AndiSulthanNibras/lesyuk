<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <link rel="stylesheet" href="/css/listteacher.css">
    @include('admin.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('partial.navbar')
        <!-- home section starts  -->

        <section class="card-section">
            <div class="card">
                <div class="card-image">
                    <img src="image/Adiarja Halimn.png" alt="Image 1">
                </div>
                <div class="card-content">
                    <h3>Card Title 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button class="card-button">Read More</button>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <img src="image/Luluh Mahendra.png" alt="Image 2">
                </div>
                <div class="card-content">
                    <h3>Card Title 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button class="card-button">Read More</button>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <img src="image/Yahya Waluyo.png" alt="Image 3">
                </div>
                <div class="card-content">
                    <h3>Card Title 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button class="card-button">Read More</button>
                </div>
            </div>
        </section>
        <section class="card-section">
            <div class="card">
                <div class="card-image">
                    <img src="image/Pia Winarsih.png" alt="Image 1">
                </div>
                <div class="card-content">
                    <h3>Card Title 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button class="card-button">Read More</button>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <img src="image/Karma SalahudinRectangle 39461.png" alt="Image 2">
                </div>
                <div class="card-content">
                    <h3>Card Title 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button class="card-button">Read More</button>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <img src="image/Anom Nugroho.png" alt="Image 3">
                </div>
                <div class="card-content">
                    <h3>Card Title 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <button class="card-button">Read More</button>
                </div>
            </div>
        </section>


        <!-- REQUIRED SCRIPTS -->

        @include('admin.script')
</body>

</html>