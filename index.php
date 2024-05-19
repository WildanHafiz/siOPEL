<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIOPEL</title>
    <link rel="stylesheet" href="./styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/c
    ss/bootstrap.min.css" integrity="sha384-
    Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263X
    mFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
    <style>
         main{
    background-image: url('https://images.pexels.com/photos/1139962/pexels-photo-1139962.jpeg');
    background-size: contain;
    color: #ededed;
}
        #about{
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 0 10%;
            color: #258f94;
            background-color: white;
        }

        .home-content{
            padding-top: 100px;
        }

        .containerr {
            display: flex;
            flex-direction: column;
            height: 720px;
            background-color: rgb(128, 128, 128, 0.5);
            justify-content: center;
            align-items: center;
        }

        .header1{
            transform: translateY(-10%);
            font-size: 50px;
            margin-block: 1rem;
        }
        .loginn {
            background-color: white;
            padding: 20px;
            width: 20%;
            border: 1px solid gray;
            border-radius: 20px;
            color: gray;
            transform: translateY(-10%);
        }

        .inputtt {
            border-radius: 16px;
            border: none;
            padding: 1rem;
            margin-left: 15px;
            margin-top: 10px;
        }

        .buttonnnn {
            font-size: 20px;
            border: none;
            background-color: #258f94;
            color: white;
            padding: 1rem;
            width: 100px;
            border-radius: 16px;
            margin-block: 15px ;
            cursor: pointer;
            text-decoration: none;
        }

        .video {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        #articles{
            background-color: #258f94;
            padding: 50px;
        }

        .small {
            font-size: 14px;
        }

        .cards {
            box-shadow: 1px 1px 7px 2px rgb(0, 0, 0, 0.5) ;

        }

        .bgcard{
            height: 400px;
        }

        .footer{
            background-color: #258f94;
        }
    </style>
</head>
<body>
    
    <?php
        require_once('./auth.php');
        init_login();
        validate();
    ?>
    
    <main>
    <!-- HEADER -->
    <header class="header">
        <a href="#" class="logo">SIOPEL</a>

        <nav class="navbar">
            <a href="#" class="a">Home</a>
            <a href="#about" class="a">About</a>
            <a href="#contact" class="a">Contact</a>
            <a href="?m=logout" class="logout">Logout</a>
        </nav>
    </header>
    <!-- END HEADER -->

    <!-- SECTION -->
    <section id="home">
        <div class="home-content">
            <h1>Selamat Datang di SIOPEL!</h1>
            <h3>Sistem Informasi Pelestarian Ekosistem Laut</h3>
            <p>ChatGPT
                Sistem informasi pelestarian ekosistem laut adalah platform yang menyediakan data dan informasi terkait kondisi, kesehatan, dan keberlanjutan ekosistem laut. Ini mencakup informasi tentang spesies laut, habitat, pola migrasi, ancaman lingkungan, kebijakan konservasi, serta upaya pelestarian dan pemulihan. Tujuannya adalah untuk memantau, mengelola, dan melindungi keanekaragaman hayati serta sumber daya alam laut untuk menjaga keseimbangan ekosistem dan mendukung keberlangsungan hidup manusia..</p>
            <div class="btn-box">
                <a href="#about">Let's Go</a>
            </div>
        </div>
    </section>
    <!-- END SECTION -->

    <section id="articles">
    <div class="container mt-5">
    <h2 class="mb-5 text-center"><b>Ekosistem Laut Indonesia</b> <br> <small class="small">Kekayaan alam yang menawan dan berperan penting</small></h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card cards">
          <img src="karang.jpg" class="card-img-top bgcard" alt="Terumbu Karang">
          <div class="card-body">
            <h5 class="card-title">Terumbu Karang</h5>
            <p class="card-text">Indonesia memiliki terumbu karang terluas di dunia, menjadi rumah bagi beragam biota laut. Terumbu karang berperan penting dalam menjaga ekosistem laut, melindungi pantai dari abrasi, dan sumber pendapatan masyarakat pesisir.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card cards">
          <img src="mangrove.jpg" class="card-img-top bgcard" alt="Hutan Mangrove">
          <div class="card-body">
            <h5 class="card-title">Hutan Mangrove</h5>
            <p class="card-text">Hutan mangrove tumbuh di daerah perairan payau, menjadi habitat penting bagi berbagai biota laut seperti ikan, kepiting, dan burung. Mangrove juga berperan dalam mencegah intrusi air laut, menjaga kualitas air, dan menjadi benteng alami saat terjadi bencana.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card cards">
          <img src="rumputlaut.jpg" class="card-img-top bgcard" alt="Rumput Laut">
          <div class="card-body">
            <h5 class="card-title">Rumput Laut</h5>
            <p class="card-text">Indonesia merupakan produsen rumput laut terbesar dunia. Rumput laut memiliki manfaat ekologis seperti menyerap CO2 dan sebagai habitat biota laut. Rumput laut juga menjadi sumber pendapatan masyarakat pesisir dan bahan baku berbagai produk industri.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
    </section>

    <!-- SECTION 2 -->
    <section id="about">
        <div class="about">
            <h1>About SIOPEL</h1>
            <p>Sistem informasi pelestarian ekosistem laut adalah platform yang menyediakan data dan informasi terkait kondisi, kesehatan, dan keberlanjutan ekosistem laut. Ini mencakup informasi tentang spesies laut, habitat, pola migrasi, ancaman lingkungan, kebijakan konservasi, serta upaya pelestarian dan pemulihan. Tujuannya adalah untuk memantau, mengelola, dan melindungi keanekaragaman hayati serta sumber daya alam laut untuk menjaga keseimbangan ekosistem dan mendukung keberlangsungan hidup manusia.
            </p>
        </div>

        <!-- VIDEO -->
        <div class="video">
            <h2>About Ekosistem Laut</h2>
            <div>
                <video width="560" height="315" controls>
                    <source src="laut.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>
    <!-- END SECTION 2-->

    


    <!-- FOOTER -->
    <footer id="contact" class="footer">
        <h3>Thank you</h3>
        <div class="copyright">
            <p>Copyright &copy; 2024 website blog created by KELOMPOK 2</p>
        </div>
    </footer>
    </main>
</body>
</html>