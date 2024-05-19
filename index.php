<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIOPEL</title>
    <link rel="stylesheet" href="./styles.css">
    <style>
         main{
    background-image: url('https://cdn.pixabay.com/photo/2022/08/09/16/19/sea-7375377_960_720.jpg');
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


        .containerr {
            display: flex;
            flex-direction: column;
            height: 100vh;
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

    <!-- SECTION 2 -->
    <section id="about">
        <div class="about">
            <h1>Skenario</h1>
            <p>Sistem informasi pelestarian ekosistem laut adalah platform yang menyediakan data dan informasi terkait kondisi, kesehatan, dan keberlanjutan ekosistem laut. Ini mencakup informasi tentang spesies laut, habitat, pola migrasi, ancaman lingkungan, kebijakan konservasi, serta upaya pelestarian dan pemulihan. Tujuannya adalah untuk memantau, mengelola, dan melindungi keanekaragaman hayati serta sumber daya alam laut untuk menjaga keseimbangan ekosistem dan mendukung keberlangsungan hidup manusia.
            </p>
        </div>

        <!-- VIDEO -->
        <div class="video">
            <h2>Introduction Video</h2>
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