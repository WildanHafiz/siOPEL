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
</head>

<style>
    .tabeladmin{
        border: 1px solid black;
    }

    .footer{
            background-color: #258f94;
        }
</style>
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
            <a href="#about" class="a">Database</a>
            <a href="#contact" class="a">All Admin and Staff</a>
            <a href="?m=logout" class="logout">Logout</a>
        </nav>
    </header>
    <!-- END HEADER -->

    <!-- SECTION -->
    <section id="home">
        <div class="home-content">
            <h1>Selamat Datang ADMIN!</h1>
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
    <section id="about" class="d-flex flex-column pt-5">
    <div class="about">
        <h1>ADMIN Access</h1>
        <p>Ini adalah akses SuperAdmin. Anda dapat melakukan apapun sebagai berikut :</p>
    </div>
    <div class="d-flex m-5">
        <div class="d-flex flex-column gap-3 ml-5">
            <div class="d-flex gap-5">
                <div class="table-responsive d-flex flex-column align-items-center">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">ID Staff</th>
                                <th scope="col">Name</th>
                                <th scope="col">Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once("./koneksi.php");
                            $query = "SELECT * FROM staff";
                            $hasil = mysqli_query($conn, $query);
                            while ($data = mysqli_fetch_array($hasil)) {
                                echo "<tr>";
                                echo "<th scope='row'>" . $data['no'] . "</th>";
                                echo "<td>" . $data['id_staff'] . "</td>";
                                echo "<td>" . $data['name'] . "</td>";
                                echo "<td>" . $data['role'] . "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                    <a href="tambahadmin.php" class="btn btn-primary mb-1 mt-1 "><i class="fas fa-user-plus mr-2"></i>Tambah staff</a>
                </div>

                <div class="table-responsive d-flex flex-column align-items-center">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID Admin</th>
                                <th scope="col">Name</th>
                                <th scope="col">Role</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once("./koneksi.php");
                            $query = "SELECT * FROM admins";
                            $hasil = mysqli_query($conn, $query);
                            while ($data = mysqli_fetch_array($hasil)) {
                                echo "<tr>";
                                echo "<th scope='row'>" . $data['id_admin'] . "</th>";
                                echo "<td>" . $data['name'] . "</td>";
                                echo "<td>" . $data['role'] . "</td>";
                                echo "<td>";
                                echo "<a href='editadmin.php?id=" . $data['id_admin'] . "' class='btn btn-sm btn-warning'>Edit</a> ";
                                echo "<a href='deleteadmin.php?id=" . $data['id_admin'] . "' class='btn btn-sm btn-danger'>Delete</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                    <a href="tambahadmin.php" class="btn btn-primary mb-1 mt-1"><i class="fas fa-user-plus mr-2"></i>Tambah Admin</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>