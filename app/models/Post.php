<?php
require_once 'Model.php';

class Post extends Model
{
    public $title;
    public $content;
    public $image;
    public $user_id;

    public static function all()
    {
        $conn = parent::startConnection();

        $sql = "SELECT * FROM posts";
        $result = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
        $conn->close();

        return $result;
    }
    public function save()
    {
        $conn = parent::startConnection();
        $sql = "INSERT INTO posts (title, content, image, user_id) VALUES ('$this->title', '$this->content', '$this->image', '$this->user_id')";
        $result = $conn->query($sql);
        $conn->close();

        return $result;
    }
    public static function update(array $post)
    {
        try {
            $conn = parent::startConnection();
            $id = $post['id'];
            $title = $post['title'];
            $content = $post['content'];
            $image = $post['image'];
            $sql = "UPDATE posts
                SET title = '$title', content =  '$content', image = '$image'
                WHERE id = $id;";
            $conn->query($sql);

            $conn->close();

            return $post;
        } catch (\Throwable $th) {
            var_dump($th->getMessage());
        }
    }
    public static function toObject($post_array)
    {
        $post = new Post();
        $post->title = $post_array['title'];
        $post->content = $post_array['content'];
        $post->image = $post_array['image'];
        return $post;
    }
    public static function find($id)
    {
        $conn = parent::startConnection();
        $sql = "SELECT * FROM posts WHERE id = $id";
        $result = $conn->query($sql)->fetch_assoc();
        $conn->close();

        return $result;
    }
    public static function delete(array $post)
    {
        $conn = parent::startConnection();
        $post_id = $post['id'];
        $sql = "DELETE FROM posts WHERE id = '$post_id';";
        $result = $conn->query($sql);
        $conn->close();

        return $result;
    }
}
