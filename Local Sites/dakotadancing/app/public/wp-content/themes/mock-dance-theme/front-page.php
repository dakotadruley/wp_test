<?php get_header(); ?>

<div class="page-banner">
<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/screenshot.png') ?>);"></div>
<div class="page-banner__content container t-center c-white">
  <h3 class="headline headline--small">Insert Quote Here</h3>
</div>
</div>

<div class="full-width-split">
  <div>
    <h2 class="headline headline--small-plus t-center">Classes</h2>

<?php
// custom query
$homepageClasses = new WP_Query(array(
  'posts_per_page' => -1,
  'post_type' => 'class',
  'orderby' => 'meta_value_num', 
  'order' => 'ASC',
  'meta_query' => array(
    array(
      'key' => 'class_date',
      'compare' => '>=',
      'type' => 'numeric'
    ),
  )
));

while($homepageClasses->have_posts()) {
$homepageClasses->the_post(); ?>
        <h5 class="class-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
        <p><?php wp_trim_words(get_the_content(), 18); ?><a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
<?php }
?>

    <p class="t-center no-margin"><a href=<?php echo site_url('/class'); ?>" class="btn btn--blue">View All Classes</a></p>
  </div>
</div>

<?php get_footer(); ?>
