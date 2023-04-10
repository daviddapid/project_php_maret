<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../views/styles/style.css">
    <style>
        aside li {
            list-style: none;
        }

        .sidebar {
            background: linear-gradient(330deg, #F2542D, #ff7d00);
            color: white;
            width: 20vw;
            height: 100%;
            box-shadow: 0 0 9px #cbcbcb4d;
            position: fixed;
        }

        .sidebar-menu {
            background-color: #F2542D;
            width: 85%;
            border-radius: 10px;
            margin-inline: auto;
            padding: 20px;
        }

        .sidebar-menu hr {
            margin-block: 10px;
        }
    </style>
</head>

<body style="background-color: aliceblue;">
    <aside class="sidebar">
        <h1 style="text-align: center; margin-top: 30px;margin-bottom: 50px;">Dashboard</h1>
        <h4 style="margin-left: 30px; margin-bottom: 5px;">Menu</h4>
        <ul class="sidebar-menu">
            <li class="sidebar-item">My Blogs</li>
            <!-- <hr>
            <li class="sidebar-item">Menu A</li>
            <hr>
            <li class="sidebar-item">Menu B</li>
            <hr>
            <li class="sidebar-item">Menu C</li> -->
        </ul>
    </aside>
    <div class="container-sidebar">

        <h1><?= Auth::user()->name ?></h1>
    </div>
</body>

</html>