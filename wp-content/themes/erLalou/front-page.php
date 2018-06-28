<?php get_header() ?>
<?php if(have_posts()) : while (have_posts()) : the_post(); ?>
  <h1 style="display: none;"><?= get_the_title()?></h1>
  <section class="slide -presentation -active" style="background-image: url('<?= wp_get_attachment_url(36) ?>');">
    <div class="wrapper">
      <div class="inner-wrapper">
        <h2 class="title"><?= __('Lauriane&nbsp;Roulland', 'erLalou') ?></h2>
        <p class="subtitle"><?= __('Com&eacute;dienne & sc&eacute;nartiste') ?></p>

        <?php $content = get_the_content() ?>
        <?php if(!empty($content)) : ?>
          <div class="wysiwyg-content">
            <?= $content ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <section class="slide -formation" style="background-image: url('<?= wp_get_attachment_url(39) ?>');">
    <div class="wrapper">
      <div class="inner-wrapper">
        <h2 class="title"><?= __('Formations', 'erLalou') ?></h2>
        <p class="subtitle">Si vous avez un cerveau, vous êtes obligés de l'utiliser - Meryl Streep</p>

        <?php
        $args = array(
          'post_type' => 'formation',
          'posts_per_page' => '6'
        );
        $query = new WP_Query($args);

        if($query->have_posts()) :
        ?>
          <div class="content">
            <ul>
            <?php
            while($query->have_posts()): $query->the_post();
            ?>
              <li><p>
                <strong class="date"><?= get_field('date') ?></strong>
                -
                <span class="title"><?= get_the_title() ?></span>
              </p></li>
            <?php
            endwhile;
            wp_reset_query();
            ?>
            </ul>
            <a href="<?= get_post_type_archive_link('formation'); ?>" class="btn-innerlink">
              Toutes mes formations
            </a>
          </div>
        <?php
        endif;
        ?>
      </div>
    </div>
  </section>
  <section class="slide -experiences" style="background-image: url('<?= wp_get_attachment_url(42) ?>');">
    <div class="wrapper">
      <div class="inner-wrapper">
        <h2 class="title"><?= __('Exp&eacute;riences', 'erLalou') ?></h2>

        <?php
        $terms = get_terms('xp_cat');

        if(count($terms) > 0) :
        ?>
          <div class="content">
            <ul>
            <?php foreach ($terms as $term) : ?>
              <li><a href="<?= get_term_link($term->term_id) ?>">
                <?= $term->name; ?>
              </a></li>
            <?php
            endforeach;
            ?>
            </ul>
          </div>
        <?php
        endif;
        ?>
      </div>
    </div>
  </section>
  <section class="slide -ecritures" style="background-image: url('<?= wp_get_attachment_url(44) ?>');">
    <div class="wrapper">
      <div class="inner-wrapper">
        <h2 class="title"><?= __('&Eacute;critures', 'erLalou') ?></h2>

        <?php
        $args = array(
          'post_type' => 'ecriture',
          'posts_per_page' => '6'
        );
        $query = new WP_Query($args);

        if($query->have_posts()) :
          ?>
          <div class="content">
            <ul>
              <?php
              while($query->have_posts()): $query->the_post();
                ?>
                <li>
                  <p>
                    <span class="date"><?= get_field('date');?></span>
                    <span class="title"><?= get_the_title() ?></span>
                  </p>
                  <p><?= get_the_excerpt() ?></p>
                </li>
              <?php
              endwhile;
              wp_reset_query();
              ?>
            </ul>
            <a href="<?= get_post_type_archive_link('formation'); ?>" class="btn-innerlink">
              Tous mes &eacute;crits
            </a>
          </div>
        <?php
        endif;
        ?>
      </div>
    </div>
  </section>
  <section class="slide -galerie" style="background-image: url('<?= wp_get_attachment_url(40) ?>');">
    <div class="wrapper">
      <div class="inner-wrapper">
        <h2 class="title"><?= __('Galerie', 'erLalou') ?></h2>
        <div class="content">
          <?= do_shortcode('[instagram-feed]'); ?>
        </div>
      </div>
    </div>
  </section>
<?php endwhile; endif; ?>
<?php get_footer('home') ?>
