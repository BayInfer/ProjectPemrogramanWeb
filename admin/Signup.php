<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup_style.css"> <!-- Sisipkan file CSS eksternal jika ada -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap">
</head>
<body>
    <!-- Kotak container -->
    <div class="container">
        <div class="registration-form">
            <div class="registration-content">
                <h1>Sign Up</h1>
                <form class="validate" method="post" action="signup_procces.php">

                    <!-- Konten formulir di sini -->

                    <!-- Username -->
                    <div>
                        <label for="username">Username</label>
                        <br>
                        <input type="text" id="username" name="username" required> <!-- Tambahkan atribut name -->
                    </div>

                    <br>

                    <!-- Password -->
                    <div>
                        <label for="password">Password</label>
                        <br>
                        <input type="password" id="password" name="password" required> <!-- Tambahkan atribut name dan ubah type menjadi password -->
                    </div>

                    <br>

                    <!-- Email -->
                    
                    <div>
                        <label for="email">Email</label>
                        <br>
                        <input type="text" id="email" name="email" required> <!-- Tambahkan atribut name -->
                    </div>

                    <br>

                    <!-- Peran -->
                        <div>
                            <label for="peran">Peran</label>
                            <select class="form-select" id="peran" name="peran" required> <!-- Tambahkan atribut name dan id -->
                                <option selected disabled value="">Choose...</option>
                                <option value="Admin">Admin</option> <!-- Tambahkan value untuk setiap opsi peran -->
                                <option value="User">User</option>
                            </select>
                        </div>

                    <br>
                    

                    <!-- Tombol Submit -->
                    <div class="login">
                        <button type="submit">Create Account</button>
                        <!-- Sudah Punya Akun -->
                        <p>Already have an Account? <a href="index.php">Log In</a></p>
                    </div>
                </form>
            </div>
            <!-- Gambar di samping formulir -->
            <div class="registration-image">
                <img src="../Gambar/Log In & Sign Up/Signup1.png" alt="Gambar1">
            </div>
        </div>
    </div>
</body>
</html>
