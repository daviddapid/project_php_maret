<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../views/styles/style.css">
</head>

<body style="background: linear-gradient(330deg, #000000, #2c2c2c)">
    <a style="position: absolute; top: 19px;left: 19px; color: white; text-decoration: none;" href="http://localhost/tugas%20smk/project_php_maret/public/">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16" style="vertical-align: middle; margin-right: 5px;">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
        </svg>
        Kembali Ke Beranda
    </a>
    <div class="container" style="display: flex; align-items: center; height: 100%;">
        <div class="card" style="max-width: 350px; margin-inline: auto;">
            <h1 style="text-align: center; margin-bottom: 50px;">Login User</h1>
            <form action="login" method="post" class="w-100">
                <div class="mb-3 w-100">
                    <label class="form-label" for="username" style="margin-bottom: 5px;">Username</label>
                    <input type="text" required name="username" class="form-control w-100" placeholder="masukkan username anda">
                </div>
                <div class="mb-5 w-100">
                    <label class="form-label" for="password" style="margin-bottom: 5px;">Password</label>
                    <input type="password" required name="password" class="form-control w-100" placeholder="password anda">
                </div>
                <button type="submit" class="btn w-100" style="background-color: black; color: white;">submit</button>
            </form>
            <p style="text-align: center; margin-top: 8px;">belum punya akun? <a href="register" style="color: black;">daftar disini</a></p>
        </div>
    </div>
</body>

</html>