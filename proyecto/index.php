<?php

require __DIR__ . '/vendor/autoload.php';

use App\Post;
use App\Comment;

$post= new Post();

$comment= new Comment();

$post->addComment($comment);

$comments=$post->getComments();

$total=$post->countComments($comments);

echo "el numero total de comentarios son $total";