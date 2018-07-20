<?php

use Timber\Post;
use Timber\Timber;
use Timber\PostQuery;

function get_posts_title() {
    return new PostQuery([
        'post_type' => 'post'
    ]);
}

$context = Timber::get_context();

$context['page'] = new Post();
$context['post'] = get_posts_title();

Timber::render('./templates/home.twig',$context);