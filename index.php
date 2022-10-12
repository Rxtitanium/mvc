<?php
require_once ('models/post.php');
use Post;
$post = new Post;
echo $post->gettitle();
