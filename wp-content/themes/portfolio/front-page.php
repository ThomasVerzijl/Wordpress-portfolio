<?php get_header(); ?>
<div class="top-content">
    <div class="hero-intro">
        <p class="hero-content hero_intro" id="">Hi I'm</p>
        <h1>Thomas Verzijl</h1>
        <h2 class="profession">Software developer</h2>
        <p class="hero-content">This is my portfolio page. Here you'll find everything you need to know about me</p>
    </div>
    <div class="my-skills">
        <h2>My skills</h2>
        <div class="skills-container">
            <?php
            $skills = get_terms([
                'taxonomy' => 'skill',
                'hide_empty' => false,
            ]);

            if (is_wp_error($skills)) {
                echo '<p>Could not load skills.</p>';
            } else {
                foreach ($skills as $skill) {
                    echo '<div class="skill">' . esc_html($skill->name) . '</div>';
                }
            }
            ?>
        </div>
    </div>
</div>
<div class="projects-heading">
    <h2 id="top-projects-title">Some of my best work</h2>
    <div class="view-projects-link"><a class="view-projects-link" href="<?php echo esc_url(home_url('/projects/')); ?>">View all projects <span aria-hidden="true">→</span></a></div>
</div>
<div id="projects_container">
    <?php
    $project_arguments = [
        'post_type' => 'project',
        'posts_per_page' => 3,
        'meta_query' => [
            [
                'key' => 'featured_project',
                'value' => '1',
                'compare' => '='
            ],
        ],
    ];
    $projects_query = new WP_Query($project_arguments);

    if ($projects_query->have_posts()) {
        while ($projects_query->have_posts()) {
            $projects_query->the_post();
            $project_skills = get_the_terms(get_the_ID(), 'skill');

            //project card
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


<div class="aboutme">
    <h2 id="about-me-title">About me</h2>
    <div class="about-me-content">
        <div class="about-me-copy">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis ipsum enim earum quaerat nostrum similique id fugit cupiditate optio quasi quam, distinctio eos corporis ducimus. Quas ullam similique culpa repellendus?</p>
            <p>Ea mollitia, harum incidunt facilis omnis aliquid ipsum? Exercitationem nulla at accusantium eum minima consectetur sequi placeat voluptatibus quas nam, ipsum natus quisquam similique sapiente repudiandae commodi excepturi. Assumenda, non!</p>
            <p>Laborum necessitatibus molestiae odit dolore temporibus aut eaque, fuga magni culpa obcaecati maiores officia eveniet! Pariatur corrupti eius, expedita iusto ad illum ullam inventore aliquid fugit eaque, laboriosam maiores eum.</p>
            <p>Ut enim voluptas consectetur atque aliquam harum veritatis dolor, quo, facilis similique, accusantium maxime rem a. Ullam, dicta nemo rem incidunt soluta id reprehenderit minus. Iure veritatis voluptatem inventore quod?</p>
            <p>Excepturi repellat, dolor modi nesciunt reprehenderit inventore aliquam. Velit fugiat optio tempore deleniti magnam aut cum. Porro, voluptatem, tempora alias dolores est doloribus assumenda itaque dolor odit eius repellat exercitationem!</p>
        </div>

        <div class="about-me-img">
            <div class="project_image" role="img" aria-label="About me image placeholder"></div>
        </div>
    </div>



</div>
<?php get_footer(); ?>