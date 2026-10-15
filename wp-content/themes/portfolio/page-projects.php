<?php
get_header();

$projects = [
    [
        'title' => 'Portfolio Website',
        'skills' => ['HTML', 'CSS', 'PHP'],
    ],
    [
        'title' => 'Task Manager',
        'skills' => ['JavaScript', 'CSS'],
    ],
    [
        'title' => 'Analytics Dashboard',
        'skills' => ['React', 'SQL'],
    ],
];
?>
<main>
    <div class="projects-heading">
        <h1 class="projects-page-title">All Projects</h1>
        <p><a class="view-projects-link" href="<?php echo esc_url(home_url('/')); ?>">&larr; Back to home</a></p>
    </div>
    <div id="projects_container">
        <?php foreach ($projects as $project) : ?>
            <div class="project_card">
                <div class="project_image" role="img" aria-label="<?php echo esc_attr($project['title']); ?> image placeholder"></div>
                <h3><?php echo esc_html($project['title']); ?></h3>
                <div class="skills-container skills-container-project">
                    <?php foreach ($project['skills'] as $skill) : ?>
                        <div class="skill"><?php echo esc_html($skill); ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>
<?php get_footer(); ?>