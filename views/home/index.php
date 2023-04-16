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
        <h1>D'Blog</h1>

        <div class="action">
            <h4 style="font-weight: lighter;"><a href="register" style="color: white;">SignUp</a></h4>
            <h4><a href="login" style="color: white;">Login</a> </h4>
        </div>

    </nav>

    <div class="container-xl" style="margin-top: 50px;">
        <header style="display: flex; align-items: center;gap: 30px;">
            <h1 style="font-size: 79px;">D`Blog</h1>
            <div style="margin-top: 29px;">
                <p style="font-family: cursive;">Tempat Dimana Anda</p>
                <p style="font-family: cursive;">Dapat Menulis Kisah Anda ...</p>
            </div>
        </header>

        <section style="margin-top: 39px;">
            <div class="section-title" style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                <h4>Artikel</h4>
                <h4>
                    Lihat Semua
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg>
                </h4>
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 25px;">
                <?php foreach ($data['posts'] as $index => $post) : ?>
                    <div class="card shadow-brutal">
                        <h1><?= $post['title'] ?></h1>
                        <p><?= substr($post['content'], 0, 100) . '...' ?></p>

                        <div class="blog-footer w-100" style="display: flex; justify-content: end; margin-top: 25px;">
                            <a href="detail?postId=<?= $post['id'] ?>" style="color: black; font-weight: bold;">
                                Detail
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16" style="vertical-align:text-bottom;">
                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- <div class="card shadow-brutal">
                    <h1>Title</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, saepe nemo obcaecati architecto dignissimos est eligendi rem culpa omnis et ex. Tenetur qui optio architecto quia eos eius maxime dolores.</p>

                    <div class="blog-footer w-100" style="display: flex; justify-content: end; margin-top: 25px;">
                        <a href="" style="color: black; font-weight: bold;">
                            Detail
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16" style="vertical-align:text-bottom;">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg>
                        </a>
                    </div>
                </div> -->
                <!-- <div class="card shadow-brutal">
                    <h1>Title</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, saepe nemo obcaecati architecto dignissimos est eligendi rem culpa omnis et ex. Tenetur qui optio architecto quia eos eius maxime dolores.</p>

                    <div class="blog-footer w-100" style="display: flex; justify-content: end; margin-top: 25px;">
                        <a href="" style="color: black; font-weight: bold;">
                            Detail
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16" style="vertical-align:text-bottom;">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg>
                        </a>
                    </div>
                </div> -->
                <!-- <div class="card shadow-brutal">
                    <h1>Title</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, saepe nemo obcaecati architecto dignissimos est eligendi rem culpa omnis et ex. Tenetur qui optio architecto quia eos eius maxime dolores.</p>

                    <div class="blog-footer w-100" style="display: flex; justify-content: end; margin-top: 25px;">
                        <a href="" style="color: black; font-weight: bold;">
                            Detail
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16" style="vertical-align:text-bottom;">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg>
                        </a>
                    </div>
                </div> -->
                <!-- <div class="card shadow-brutal">
                    <h1>Title</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, saepe nemo obcaecati architecto dignissimos est eligendi rem culpa omnis et ex. Tenetur qui optio architecto quia eos eius maxime dolores.</p>

                    <div class="blog-footer w-100" style="display: flex; justify-content: end; margin-top: 25px;">
                        <a href="" style="color: black; font-weight: bold;">
                            Detail
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16" style="vertical-align:text-bottom;">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                            </svg>
                        </a>
                    </div>
                </div> -->
                <div class="card" style="border: 2px dashed black;display: flex;justify-content: center; align-items: center; gap: 9px;">
                    <a href="<?= Route::to('/admin') ?>" style="color: black; text-align: center;">
                        <h1>Mulai Kisah Anda</h1>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16" style="vertical-align: text-bottom; margin-top: 5px;">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>
        <br><br><br>
    </div>

</body>

</html>