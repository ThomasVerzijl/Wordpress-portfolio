

    <?php get_header(); ?>
    <div id="content">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                ?>
                <h2><?php the_title(); ?></h2>
                <div><?php the_content(); ?></div>
                <?php
                if ( function_exists( 'get_field' ) ) {
                    $telefoonnummer = get_field( 'telefoonnummer', get_the_ID() );

                    if ( $telefoonnummer ) {
                        echo '<p>Telefoonnummer: ' . esc_html( $telefoonnummer ) . '</p>';
                    }
                }

                if ( function_exists( 'get_field' ) ) {
                    $email = get_field( 'email', get_the_ID() );

                    if ( $email ) {
                        echo '<p>Email: ' . esc_html( $email ) . '</p>';
                    }
                }
                if ( function_exists( 'get_field' ) ) {
                    $bericht = get_field( 'bericht', get_the_ID() );

                    if ( $bericht ) {
                        echo '<p>Bericht: ' . esc_html( $bericht) . '</p>';
                    }
                }
                ?>
                <?php
            endwhile;
        else :
            echo '<p>Geen berichten gevonden.</p>';
        endif;
        ?>
      

    </div>
    <?php get_sidebar( 'primary' ); ?>
<?php get_footer(); ?>
  
