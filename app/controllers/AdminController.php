<?php
require_once 'Controller.php';
require_once 'C:\xampp\htdocs\tugas smk\project_php_maret\app\services\Storage.php';

class AdminController extends Controller
{

    public static function index()
    {
        if (!Auth::is_login()) {
            return Route::redirect('/login');
        }
        $data = [
            'posts' => Auth::user()->posts()
        ];
        parent::view('admin/index', $data);
    }
    public static function create()
    {
        if (!Auth::is_login()) {
            return Route::redirect('/login');
        }

        parent::view('admin/create');
    }
    public static function store($request, $foto)
    {
        Debug::dd($request, $foto['foto']['tmp_name']);

        try {
            //code...
            $up_file = Storage::save($foto['foto'], '/images/posts');

            $post = new Post();
            $post->title = $request['title'];
            $post->content = $request['content'];
            $post->image = $up_file;
            $post->user_id = Auth::user()->id;
            $post->save();

            $_SESSION['success'] = 'Sukses Menambah Data';
            Route::redirect('/admin/post/create');
        } catch (\Throwable $th) {
            Debug::dd($th->getMessage());
        }
    }
    public static function edit($request)
    {
        if (!Auth::is_login()) {
            return Route::redirect('/login');
        }
        $data = [
            'post' => Post::find($request['post_id'])
        ];

        parent::view('admin/edit', $data);
    }
    public static function update($request, $file)
    {
        try {
            $post = Post::find($request['id']);

            // check if request->file
            if (!$file['foto']['size'] <= 0) {
                if ($post['image'] != null) {
                    Storage::delete($post['image']);
                }
                $post['image'] = Storage::save($file['foto'], '/images/posts');
            }
            $post['title'] = $request['title'];
            $post['content'] = $request['content'];
            $post['title'] = $request['title'];

            Post::update($post);
            $_SESSION['success'] = 'Sukses Memperbarui Data';
            Route::redirect('/admin/post/edit?post_id=' . $post['id']);
        } catch (\Throwable $th) {
            Debug::dd($th->getMessage());
        }
    }
    public static function delete($request)
    {
        $post = Post::find($request['post_id']);

        Storage::delete($post['image']);
        Post::delete($post);

        $_SESSION['success'] = 'Sukses Menghapus Data';
        Route::redirect('/admin');
    }
}
