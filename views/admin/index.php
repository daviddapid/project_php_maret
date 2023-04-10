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

        /* .table th {
            font-weight: bold;
        } */
    </style>
</head>

<body style="background-color: aliceblue;">
    <aside class="sidebar">
        <h1 style="text-align: center; margin-top: 30px;margin-bottom: 50px;">Dashboard</h1>
        <ul class="sidebar-menu">
            <li class="sidebar-item">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-journal-text sidebar-icon" viewBox="0 0 16 16">
                    <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                </svg>
                My Blogs
            </li>
            <li class="sidebar-item">
                <a href="logout" style="text-decoration: none;color: white;">

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
        <div class="card shadow-brutal">
            <div class="card-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 19px;">
                <h1>Daftar Post Anda</h1>
                <button class="btn" style="background-color: black; color: white; font-weight: bold;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-plus-lg" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                    </svg>
                    <span>Tambah</span>
                </button>
            </div>
            <table class="table shadow-brutal">
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
                    <tr>
                        <td>1</td>
                        <td>Judul</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor iusto exercitationem delectus soluta, facere optio similique maxime, rem nulla maiores placeat voluptas, dolore veniam odio aspernatur laudantium aliquid illum culpa!</td>
                        <td>
                            <img src="https://images.unsplash.com/photo-1454372182658-c712e4c5a1db?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="" style="width: 100px;height: 50px;">
                        </td>
                        <td style="white-space: nowrap;">
                            <button class="btn">Edit</button>
                            <button class="btn">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>