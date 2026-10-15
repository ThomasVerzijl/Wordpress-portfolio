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
            <div class="skill">css</div>
            <div class="skill">html</div>
            <div class="skill">php</div>
            <div class="skill">sql</div>
            <div class="skill">javascript</div>
            <div class="skill">react</div>
        </div>
    </div>
</div>
<div class="projects-heading">
    <h2 id="top-projects-title">My top 3 projects</h2>
    <div class="view-projects-link"><a class="view-projects-link" href="<?php echo esc_url(home_url('/projects/')); ?>">View all projects <span aria-hidden="true">→</span></a></div>
</div>
<div id="projects_container">
    <div class="project_card">
        <div class="project_image" role="img" aria-label="Project image placeholder"></div>
        <h3>Portfolio Website</h3>
        <div class="skills-container skills-container-project">
            <div class="skill">css</div>
            <div class="skill">html</div>
            <div class="skill">php</div>
            <div class="skill">sql</div>
            <div class="skill">javascript</div>
            <div class="skill">react</div>
        </div>
    </div>
    <div class="project_card">
        <div class="project_image" role="img" aria-label="Project image placeholder"></div>
        <h3>Task Manager</h3>
        <div class="skills-container skills-container-project">
            <div class="skill">css</div>
            <div class="skill">html</div>
            <div class="skill">php</div>
            <div class="skill">sql</div>
            <div class="skill">javascript</div>
            <div class="skill">react</div>
        </div>
    </div>
    <div class="project_card">
        <div class="project_image" role="img" aria-label="Project image placeholder"></div>
        <h3>Analytics Dashboard</h3>
        <div class="skills-container skills-container-project">
            <div class="skill">css</div>
            <div class="skill">html</div>
            <div class="skill">php</div>
            <div class="skill">sql</div>
            <div class="skill">javascript</div>
            <div class="skill">react</div>
        </div>
    </div>

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