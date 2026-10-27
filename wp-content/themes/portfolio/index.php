<?php get_header(); ?>

<h1>Something went wrong</h1>

<?php
echo 'skdjfhshk';
if (get_field('git_repo')) {
    echo '<a href="' . get_field('git_repo') . '"> git repo </a>';
}

echo get_the_title();
echo the_content();
if (has_post_thumbnail()) {
    the_post_thumbnail('medium'); // Formaten: 'thumbnail', 'medium', 'large', 'full'
}
get_footer(); ?>