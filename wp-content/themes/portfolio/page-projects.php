<?php
get_header();
?>
<main>
    <div class="projects-heading">
        <h1 class="projects-page-title">All Projects</h1>
        <p><a class="view-projects-link" href="<?php echo esc_url(home_url('/')); ?>">&larr; Back to home</a></p>
    </div>

    <div id="projects_container">
        <?php
        $project_arguments = [
            'post_type'      => 'project',
            'posts_per_page' => -1,
        ];

        $projects_query = new WP_Query($project_arguments);

        if ($projects_query->have_posts()) {
            while ($projects_query->have_posts()) {
                $projects_query->the_post();
                $project_skills = get_the_terms(get_the_ID(), 'skill');
        ?>
                <div class="project_card">
                    <div class="project_image">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('medium');
                        } else {
                            echo '<div class="placeholder-image">Geen afbeelding</div>';
                        }
                        ?>
                    </div>
                    <h3><?php the_title(); ?></h3>

                    <div class="skills-container skills-container-project">
                        <?php
                        if (!empty($project_skills) && !is_wp_error($project_skills)) {
                            foreach ($project_skills as $skill) {
                                echo '<div class="skill">' . esc_html($skill->name) . '</div>';
                            }
                        }
                        ?>
                    </div>
                </div>
        <?php
            }
        } else {
            echo 'no projects found';
        }

        wp_reset_postdata();
        ?>
    </div>
</main>
<?php get_footer(); ?>