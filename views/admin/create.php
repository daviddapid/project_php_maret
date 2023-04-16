<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/tugas%20smk/project_php_maret/views/styles/style.css">
    <style>
        aside li {
            list-style: none;
        }

        .sidebar {
            background: linear-gradient(296deg, #000000, #232323);
            color: white;
            width: 20vw;
            height: 100%;
            box-shadow: 0 0 9px #cbcbcb4d;
            position: fixed;
        }

        .sidebar-menu {
            width: 85%;
            border-radius: 10px;
            margin-inline: auto;
            padding: 0;
        }

        .sidebar-item {
            margin-bottom: 16px;
        }

        .sidebar-icon {
            vertical-align: text-bottom;
            margin-right: 5px;
            width: 18px;
            height: 18px;
        }

        .table {
            border-collapse: collapse;
            /* border-radius: var(--sml-radius); */
            border: 3.9px solid black;
        }

        .table td,
        .table th {
            border: 2.5px solid black;
            padding: 12px;
        }

        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body style="background-color: aliceblue;">
    <aside class="sidebar">
        <h1 style="text-align: center; margin-top: 30px;margin-bottom: 50px;">Dashboard</h1>
        <ul class="sidebar-menu">
            <a href="<?= Route::to('/admin') ?>">
                <li class="sidebar-item">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-journal-text sidebar-icon" viewBox="0 0 16 16">
                        <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                    </svg>
                    My Blogs
                </li>
            </a>
            <li class="sidebar-item">
                <a href="<?= Route::to('/logout') ?>" style="text-decoration: none;color: white;">

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left sidebar-icon" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                    </svg>
                    Signout
                </a>
            </li>

        </ul>
    </aside>
    <div class="container-sidebar" style="padding-left: 22vw; padding-right: 25px; padding-block: 50px;">
        <div class="card shadow-brutal" style="width: 50%;">
            <div class="card-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 19px;">
                <h1>Buat Post Baru</h1>

                <button type="submit" form="form-create" class="btn" style="background-color: black; color: white; font-weight: bold;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-plus-lg" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                    </svg>
                    <span>Buat</span>
                </button>
            </div>
            <form id="form-create" action="<?= Route::to('/admin/post/store') ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input required type="text" class="form-control w-100" name="title">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Konten</label>
                    <textarea required name="content" id="content" cols="30" rows="10" class="textarea-control w-100"></textarea>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Foto</label>
                    <input required name="foto" type="file" class="form-control w-100" style="padding: 8px;">
                </div>
            </form>
        </div>
    </div>
    <div class="toast" id="toast-success">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
            </svg>
        </div>
        <div class="content">
            <h3>Sukses</h3>
            <p><?= $_SESSION['success']  ?></p>
        </div>
    </div>

    <?php if (isset($_SESSION['success'])) : ?>
        <script>
            const toast = document.querySelector('#toast-success');

            setTimeout(() => {
                toast.classList.add('show')
                setTimeout(() => {
                    toast.classList.remove('show');
                }, 2000);
            }, 100);
        </script>
        <?php unset($_SESSION['success']) ?>
    <?php endif; ?>
</body>

</html>