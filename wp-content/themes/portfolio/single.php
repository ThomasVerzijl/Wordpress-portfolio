<?php get_header();
$project_title = get_the_title();
$project_image = get_the_post_thumbnail_url();
$project_desc = get_the_content();
$project_skills = get_the_terms(get_the_ID(), 'skill');


if ($project_image) {
    $project_image_html = '<img src="' . esc_url($project_image) . '" alt="' . esc_attr($project_title) . '">';
} else {
    $project_image_html = '<div class="placeholder-image">Geen afbeelding</div>';
}

if (!empty($project_skills) && !is_wp_error($project_skills)) {
    $skills_html = '<section class="project-skills"><h2>Skills used</h2><div class="skills-container single-project-skills">';
    foreach ($project_skills as $skill) {
        $skills_html .= '<div class="skill">' . esc_html($skill->name) . '</div>';
    }
    $skills_html .= '</div></section>';
} else {
    $skills_html = '';
}
if ($project_desc) {
    $project_desc_html = '<div class="project-description">' . wp_kses_post($project_desc) . '</div>';
} else {
    $project_desc_html = '';
}
if ($project_title) {
    $project_title_html = '<h1 class="project-title">' . esc_html($project_title) . '</h1>';
} else {
    $project_title_html = '';
}
if ($project_image_html || $skills_html || $project_desc_html || $project_title_html) {
    echo '<main class="single-project">';
    echo '<a class="back-home-link" href="' . esc_url(home_url('/')) . '">&larr; Back to home</a>';
    echo '<div class="project-content">';
    echo $project_title_html;
    echo $project_image_html;
    echo $skills_html;
    echo $project_desc_html;
    echo '</div>';
    echo '</main>';
} else {
    echo '<p>No project details available.</p>';
}

get_footer();
