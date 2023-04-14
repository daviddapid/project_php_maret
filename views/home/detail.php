<?php

define('HOME', 'http://localhost/tugas%20smk/project_php_maret/public/');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D'Blog</title>
    <link rel="stylesheet" href="../views/styles/style.css">
    <style>
        a {
            text-decoration: none;

        }

        .container-xl {
            padding-inline: 18vw;
        }

        nav {
            font-family: Helvetica;
            background-color: black;
            color: white;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        nav .action {
            display: flex;
            gap: 28px;
        }
    </style>
</head>

<body>
    <nav class="container-xl">
        <h1><a href="<?= HOME ?>" style="color: white;">D'Blog</a> </h1>

        <div class="action">
            <h4 style="font-weight: lighter;">SignUp</h4>
            <h4><a href="login" style="color: white;">Login</a> </h4>
        </div>

    </nav>

    <div class="container-xl" style="margin-top: 30px;">


        <a href="<?= HOME ?>" style="display: flex; align-items: center;gap: 10px; margin-bottom: 12px; color: black;">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
            </svg>
            <h3>Kembali</h3>
        </a>

        <div class="card shadow-brutal">
            <img src="<?= Storage::get($data['post']['image']) ?>" alt="" class="shadow-brutal" style="width: 100%;height: 298px; object-fit: cover;">
            <h1 style="margin-bottom: 19px; margin-top: 10px;"><?= $data['post']['title'] ?></h1>

            <p><?= $data['post']['content'] ?></p>
        </div>
    </div>

</body>

</html>