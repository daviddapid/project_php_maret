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
                <a href="logout" style="text-decoration: none;color: white;">

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left sidebar-icon" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                    </svg>
                    Signout
                </a>
            </li>
            <li class="sidebar-item">
                <a href="<?= Route::to('/') ?>" style="text-decoration: none;color: white;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house sidebar-icon" viewBox="0 0 16 16">
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                    </svg>
                    Home
                </a>
            </li>

        </ul>
    </aside>
    <div class="container-sidebar" style="padding-left: 22vw; padding-right: 25px; padding-block: 50px;">
        <div class="card shadow-brutal">
            <div class="card-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 19px;">
                <h1>Daftar Post Anda</h1>
                <a href="<?= Route::to('/admin/post/create') ?>">
                    <button class="btn" style="background-color: black; color: white; font-weight: bold;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-plus-lg" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                        </svg>
                        <span>Tambah</span>
                    </button>
                </a>
            </div>
            <table class="table shadow-brutal w-100">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Konten</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['posts'] as $index => $post) : ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $post['title'] ?></td>
                            <td><?= $post['content'] ?></td>
                            <td style="text-align: center; width: 9px; white-space: nowrap;">
                                <img src="<?= Storage::get($post['image']) ?>" alt="" style="width: 100px;height: 50px;">
                            </td>
                            <td style="white-space: nowrap; width: 9px;">
                                <a href="<?= Route::to('/admin/post/edit?post_id=' . $post['id']) ?>">
                                    <button class="btn btn-blue">Edit</button>
                                </a>
                                <button class="btn btn-red" onclick="showModal(<?= $post['id'] ?>)" type="button">Delete</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Hapus Data</h3>
                <svg onclick="closeModal()" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </div>
            <div class="modal-body">
                <form action="<?= Route::to('/admin/post/delete') ?>" method="post" id="form-delete">
                    <input type="hidden" id="id-delete" name="post_id">
                    Apa Anda Yakin Untuk Menghapus Data Ini ?
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn " style="outline: 1px solid grey; background-color: transparent;">Batal</button>
                <button class="btn btn-red" form="form-delete" type="submit">Hapus</button>
            </div>
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
    <script>
        function showModal(post_id) {
            const modal = document.querySelector('.modal');
            const inputId = document.querySelector('#id-delete');

            modal.classList.add('show');
            inputId.value = post_id;
        }

        function closeModal() {
            const modal = document.querySelector('.modal');
            modal.classList.remove('show')
        }
    </script>
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