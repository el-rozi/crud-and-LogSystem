

<!DOCTYPE html>
<html>
<title>Tugas Akhir 10</title>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
        <section>
            <form action="login_proses.php" method="post">
                <h1>Login</h1>
                <div>
                <?php 
                if(isset($_GET['message'])){
                echo "<p style='color: red; font-size: 18px; font-weight: bold;'>".$_GET['message']."</p>";
                }
                ?>
                </div>
                <div class="inputbox">
                <input type="email" name="email" class="form-control" required>
                <label for="email">Email</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" class="form-control">
                    <label for="password">Password</label>
                </div>
                <div class="forget">
                    <label for=""><input type="checkbox">Remember Me</label>
                </div>
                <input type="submit" name="login" value="Login" class="btn btn-success">
            </form>
        </section>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>