<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

     <footer class="site-footer clearfix">
            <section class="copyright"><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> &copy; <?php echo date('Y'); ?></section>
            <section class="poweredby">Proudly using <a href="http://typecho.org">Typecho</a></section>
     </footer>


</div>
<script>
var casper = <?php footer_json();?>
</script>
<script src="<?php $this->options->themeUrl('assets/js/jquery.js');?>"></script>
<script src="<?php $this->options->themeUrl('assets/js/jquery.fitvids.js');?>"></script>
<script src="<?php $this->options->themeUrl('assets/js/index.js');?>"></script>
<script src="<?php $this->options->themeUrl('assets/js/site.js');?>"></script>


<?php $this->footer(); ?>
</body>
</html>
