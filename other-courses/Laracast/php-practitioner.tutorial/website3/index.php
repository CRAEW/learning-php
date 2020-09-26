<?php

// BOOT UP SERVER
// php -S localhost:8888


class Post
{

    public $title;
    public $author;

    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }

}

$posts = [
    new Post('My First Post', 'mine', true),
    new Post('My Second Post', 'mine', true),
    new Post('My Third Post', 'mine', true),
    new Post('My Fourth Post', 'someone else', false)
];


// $unpublishedPosts = array_filter($posts, function($post) {
//  return ! $post->published;
// });

// $publishedPosts = array_filter($posts, function($post) {
//  return $post->published;
// });


//var_dump($publishedPosts);

// foreach($posts as $post) {
//     $post->published = true;
// }

// $modified = array_map(function ($post) {
//     //return (array) $post;
//     //return ['title' => $post->title];
//     return $post->title;
// }, $posts);

// var_dump($modified);



$posts = array_map(function($post) {
    return (array) $post;
}, $posts);

var_dump($posts);

$authors = array_column($posts, 'author', 'title');
var_dump($authors);