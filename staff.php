<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        background-image: url('https://cdn.pixabay.com/photo/2023/12/08/08/58/sea-8437245_960_720.jpg');
        background-size: contain;
        color: #ededed;
        }
        .aboutstaff{
            height: 85vh;
            background-color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 100px 100px;
            color: #258f94;
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
            <a href="#about" class="a">Staff</a>
            <a href="#contact" class="a">Website Settings</a>
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
    <section id="aboutstaff">
        <div class="aboutstaff">
            <h1><b>Staff Access</b></h1>
            <p>Ini adalah akses staff. Anda dapat melakukan penyesuaian dan perubahan sesuai kebutuhan pelestarian laut.
            </p>
            <div class="d-flex gap-5 mt-5">
                <div class="table-responsive d-flex flex-column align-items-center">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Biota</th>
                                <th scope="col">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once("./koneksi.php");
                            $query = "SELECT * FROM karang";
                            $hasil = mysqli_query($conn, $query);
                            while ($data = mysqli_fetch_array($hasil)) {
                                echo "<tr>";
                                echo "<th scope='row'>" . $data['no'] . "</th>";
                                echo "<td>" . $data['biota_laut'] . "</td>";
                                echo "<td>" . $data['jumlah'] . "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                    <a href="tambahadmin.php" class="btn btn-success mb-1 mt-1 "><i class="fas fa-user-plus mr-2"></i>Tambah Biota</a>
                </div>

                <div class="d-flex gap-5">
                    <div class="table-responsive d-flex flex-column align-items-center">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Ikan</th>
                                    <th scope="col">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include_once("./koneksi.php");
                                $query = "SELECT * FROM ikan";
                                $hasil = mysqli_query($conn, $query);
                                while ($data = mysqli_fetch_array($hasil)) {
                                    echo "<tr>";
                                    echo "<th scope='row'>" . $data['no'] . "</th>";
                                    echo "<td>" . $data['jenis_ikan'] . "</td>";
                                    echo "<td>" . $data['jumlah'] . "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                        <a href="tambahadmin.php" class="btn btn-success mb-1 mt-1 "><i class="fas fa-user-plus mr-2"></i>Tambah Biota</a>
                    </div>
                </div>
                
                <div class="d-flex gap-5">
                    <div class="table-responsive d-flex flex-column align-items-center">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Quality Scope</th>
                                    <th scope="col">Area</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include_once("./koneksi.php");
                                $query = "SELECT * FROM quality2";
                                $hasil = mysqli_query($conn, $query);
                                while ($data = mysqli_fetch_array($hasil)) {
                                    echo "<tr>";
                                    echo "<th scope='row'>" . $data['quality_scope'] . "</th>";
                                    echo "<td>" . $data['area'] . "</td>";
                                    echo "<td>" . $data['status'] . "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                        <a href="tambahadmin.php" class="btn btn-success mb-1 mt-1 "><i class="fas fa-user-plus mr-2"></i>Tambah Data</a>
                    </div>
                </div>

                <div class="d-flex gap-5">
                    <div class="table-responsive d-flex flex-column align-items-center">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Sensors</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include_once("./koneksi.php");
                                $query = "SELECT * FROM sensors";
                                $hasil = mysqli_query($conn, $query);
                                while ($data = mysqli_fetch_array($hasil)) {
                                    echo "<tr>";
                                    echo "<th scope='row'>" . $data['sensor_name'] . "</th>";
                                    echo "<td>" . $data['status'] . "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                        <a href="tambahadmin.php" class="btn btn-success mb-1 mt-1 "><i class="fas fa-user-plus mr-2"></i>Tambah Data</a>
                    </div>
                </div>
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