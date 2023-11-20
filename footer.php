<aside id="widget">
  <ul class="col3">
    <!-- <li><?php dynamic_sidebar('widgetLeft'); ?></li> -->
    <li><?php dynamic_sidebar('widgetCenter'); ?></li>
    <li><?php dynamic_sidebar('widgetRight'); ?></li>
  </ul> 
</aside>


<footer id="footer">		
Copyright(c) <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved. Design by <a href="http://f-tpl.com" target="_blank">http://f-tpl.com</a><!-- ←「Design by http://f-tpl.com」を外す場合はシリアルキーが必要です http://f-tpl.com/credit/ -->
</footer>

<?php wp_footer(); ?>
</body>
</html>