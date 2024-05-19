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
<body>
    
    <?php
        require_once('./auth.php');
        init_login();
        validate();
    ?>

<section id="admin-about" class="d-flex flex-column mt-5">
    <div class="p-5">
        <h1>ADMIN List</h1>
        <p>Ini adalah akses SuperAdmin. Berikut adalah list admin :</p>
    </div>
    <div class="table-responsive p-5">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col mr-3">ID Admin</th>
                            <th scope="col mr-3">Name</th>
                            <th scope="col mr-3">Role</th>
                            <th scope="col pr-3">Actions</th>
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
            </div>
    </div>
</section>

    <section class="d-flex flex-column justify-content-center align-items-center gap-5">
        <form method="post"
        action="prosestambahadmin.php" class="ml-5">
            <div class="form-group row mb-3">
                <label for="id_admin" class="col-sm-5 col-form-
                label">id_admin</label>
                <div class="col-sm-3">
                <input type="text" name="id-admin" class="form-control" placeholder="ID Admin">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="name" class="col-sm-5 col-form-
                label">Nama Admin</label>
                <div class="col-sm-5">
                <input type="text" name="name"
                class="form-control" placeholder="Nama Admin">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="role" class="col-sm-5 col-form-
                label">Role</label>
                <div class="col-sm-3">
                <input type="text" name="role"
                class="form-control" placeholder="ROle">
                </div>
            </div>

            <button type="submit" class="btn btn-success mb-1
            mt-1 ml-0 mr-0" >Kirim</button>
            <a href="admin.php" class="btn btn-primary mb-1 mt-1
            ml-0"><i class="fas fa-user-plus mr-0"></i>Admin Page
            </a>
        </form>
    </section>
    


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