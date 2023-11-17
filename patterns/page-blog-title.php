<?php

/**
 * Title: page-blog-title
 * Slug: page-blog-title
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */

?>
<?php
echo (get_page_link() == 'https://pbgorski.webo.design/pl/?page_id=1817') ? 'hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed' : null;
if (!is_front_page() && is_home()) {
  echo 'blog page';
};
?>
<?php if (is_blog()) {
  echo 'You are on a blog page';
}
global $wp_query;

if (isset($wp_query) && (bool) $wp_query->is_posts_page) {
  //static blog page
  echo 'blog page3';
}

// Get body classes as array
$body_classes = get_body_class();
echo $body_classes;
// Check if "blog" class exists in the array
if (in_array("page-template-page-blog", $body_classes)) {
  // Do stuff
  echo 'body_class check';
}

?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="blog-post" class="wp-block-group page-blog-test relative">
  <!-- wp:group -->
  <div class="wp-block-group title-wrapper py-[20px] desktop:py-[48px] bg-[#f5f7fa]">
    <!-- wp:group -->
    <div class="wp-block-group container mx-auto desktop:px-0 px-[20px]">
      <!-- wp:group -->
      <div class="wp-block-group">
        <!-- wp:heading {"level":1} -->
        <h1><span class="block mx-auto mb-[40px] text-[36px] desktop:text-[60px] text-[#2e384c] font-bold" data-aos="fade-right" data-aos-offset="30">Aktualności2</span></h1>
        <!-- /wp:heading -->

        <!-- wp:group -->
        <div class="wp-block-group flex gap-[20px]">
          <!-- wp:paragraph -->
          <p class="inline ">
            <!-- wp:paragraph -->
            <a href="<?php echo get_home_url() . '/blog'; ?>" class="inline-block allTabBtn _old hidden text-[#8A8F99] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer 

            <?php
            echo (get_page_link() == 'https://pbgorski.webo.design/pl/?page_id=1817') ? 'hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed' : null;
            if (!is_front_page() && is_home()) {
              echo 'blog page';
            };
            ?>
            <?php if (is_blog()) {
              echo 'You are on a blog page';
            } ?>
            
            ">



              Wszystkie2</a>
            <!-- /wp:paragraph -->
          </p>
          <!-- /wp:paragraph -->

          <!-- wp:core/categories {"showPostCounts":false,"displayAsDropdown":false,"showHierarchy":false} /-->

        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->