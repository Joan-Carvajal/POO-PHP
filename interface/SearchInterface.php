<?php

include_once 'Usuario.php';
include 'Post.php';
interface Search
{

    public function all();
}

$user =new Usuario();
echo $user->all();

$post =new Post();
echo $post->all();

