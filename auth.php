<?php
$conn = mysqli_connect("localhost", "root", "", "db_adminsiopel");

if (!$conn) {
    echo "koneksi gagal!";
    die();
}

session_start();
// $users = array(
//     'admin' => array('password' => 'admin', 'role' => 'admin'),
//     'user' => array('password' => 'user', 'role' => 'user'),
//     'staff' => array('password' => 'staff', 'role' => 'staff')
// );

function init_login() {

    global $conn;

    if (isset($_POST['nama']) && isset($_POST['pass'])) {
        $n = trim($_POST['nama']);
        $p = trim($_POST['pass']);

        // Prepare SQL statement to prevent SQL injection
        $stmt = mysqli_prepare($conn, "SELECT password, role FROM users WHERE username = ?");
        mysqli_stmt_bind_param($stmt, "s", $n);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($p === $row['password']) { // Compare plain text passwords (not recommended)
            $_SESSION['login'] = $n;
            $_SESSION['time'] = time();

            if ($row['role'] === 'admin') {
            header('location: ./admin.php');
            } elseif ($row['role'] === 'user') {
            header('location: ./index.php');
            } elseif ($row['role'] === 'staff') {
            header('location: ./staff.php');
            }
            exit;
        }
        }

        echo 'Username/Password is incorrect';
        mysqli_stmt_close($stmt);
        return false;
    }
  }
  


function validate() {
    if (!isset($_SESSION['login']) || !isset($_SESSION['time']) ) { 
    ?>
    <div class='containerr'>
        <h1 class='header1'>LOGIN</h1>
        <div class="loginn">
            <form action="" method="post">
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input class="inputtt" type="text" name="nama" /></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input class="inputtt" type="password" name="pass" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input class="buttonnnn" type="submit" value="LOGIN" /></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <?php
    exit;
    }
    if (isset($_GET['m']) && $_GET['m'] == 'logout') {
    unset($_SESSION['login']) ;
    unset($_SESSION['time']) ;
    header('location: ./index.php');
    exit;
    }
}

?>