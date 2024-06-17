<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In Page</title>
    <link rel="stylesheet" href="login_style.css"> <!-- Sisipkan file CSS eksternal jika ada -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap">
</head>
<body>
    <!-- Kotak container -->
    <div class="container">
        <div class="registration-form">
            <div class="registration-content">
                <h1>Log In</h1>
                <form class="validate" method="post" action="login_procces.php"> <!-- Ganti action dengan nama file untuk proses login -->
                    <!-- Konten formulir di sini -->
                    <!-- Email -->
                    <div>
                        <label for="email">Email</label>
                        <br>
                        <input type="text" id="email" name="email" required> <!-- Tambahkan atribut name -->
                    </div>

                    <br>

                    <!-- Password -->
                    <div>
                        <label for="password">Password</label>
                        <br>
                        <input type="password" id="password" name="password" aria-describedby="passwordHelpBlock"  required> <!-- Tambahkan atribut name -->
                    </div>

                    <br>

                    <!-- Tombol Submit -->
                    <div class="login">
                        <button type="submit">Log In</button>
                        <!-- Tombol Sign Up -->
                        <p>Don't have account? <a href="Signup.php">Register Here</a></p>
                    </div>
                </form>
            </div>
            <!-- Gambar di samping formulir -->
            <div class="registration-image">
                <img src="../Gambar/Log In & Sign Up/Login1.png" alt="Gambar1">
            </div>
        </div>
    </div>
</body>
</html>
