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
    <div class="container" style="display: flex; align-items: center; height: 100%;">
        <div class="card" style="max-width: 399px; margin-inline: auto;">
            <h1 style="text-align: center; margin-bottom: 50px;">Register User</h1>
            <form action="register" method="post" class="w-100">
                <div class="mb-3 w-100">
                    <label class="form-label" for="nama" style="margin-bottom: 5px;">Nama</label>
                    <input type="text" required name="name" class="form-control w-100" placeholder="masukkan nama anda">
                </div>
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
            <p style="text-align: center; margin-top: 8px;">sudah punya akun? <a href="login" style="color: black;">login disini</a></p>

        </div>
    </div>

    <div class="modal" id="modal-failed">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Hapus Data</h3>
                <svg onclick="closeModal()" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </div>
            <div class="modal-body" style="text-align: center;">
                <svg style="color: red; width: 90; height: 90;" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                </svg>
                <h1 style="margin-bottom: 8px; margin-top: 15px;">Gagal Register</h1>
                <p>Username <b>"<?= $_SESSION['failed-register'] ?>"</b> Telah Digunakan</p>
            </div>
            <div class="modal-footer">
                <!-- <button class="btn " style="outline: 1px solid grey; background-color: transparent;">Batal</button> -->
                <button class="btn btn-red w-100" form="form-delete" type="button" onclick="closeModal()" style="margin-inline: auto; border-radius: 90px;">Ok</button>
            </div>
        </div>
    </div>
    <script>
        function closeModal() {
            const modal = document.querySelector('#modal-failed')
            modal.classList.remove('show')
        }
    </script>
    <?php if (isset($_SESSION['failed-register'])) : ?>
        <script>
            const modal = document.querySelector('#modal-failed')
            modal.classList.add('show')
        </script>
        <?php unset($_SESSION['failed-register']); ?>
    <?php endif; ?>
</body>

</html>