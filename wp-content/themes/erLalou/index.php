<?php get_header() ?>
  <section>
    <?php while(have_posts()) : the_post() ?>
      <header>
        <h1><?= get_the_title() ?></h1>
      </header>
      <main>
        <?= get_the_content() ?>
      </main>
    <?php endwhile; ?>
  </section>
</main>
<?php get_footer() ?>
