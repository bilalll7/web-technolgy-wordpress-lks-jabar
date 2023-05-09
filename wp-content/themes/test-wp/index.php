<?php
get_header();
?>


  <?php get_template_directory_uri();

      get_template_part('template-parts/block-contents/hero'); 
      get_template_part('template-parts/block-contents/about'); 
			get_template_part('template-parts/block-contents/detail');
      get_template_part('template-parts/block-contents/data'); 
      get_template_part('template-parts/block-contents/contact'); 
  ?>
  


<?php

get_footer();
?>

<script src="<?= get_template_directory_uri(); ?>./assets/js/script.js"></script>
</body>
</html>