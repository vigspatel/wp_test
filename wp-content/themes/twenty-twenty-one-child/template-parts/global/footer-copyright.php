<?php 
$footer_copyrights_text = get_field('footer_copyrights_text','option');
$back_to_top_on_off = geT_field('back_to_top_on_off','option');
?>
<div class="wrapper wrp-copyright">
    <div class="container">
    <div class="row justify-content-sm-center">
        <div class="col-12 col-sm-6 col-md-3 copy-text footlogo">
            <p>© <?php echo date('Y'); ?><br/><?php echo $footer_copyrights_text; ?></p>
        </div>
        <div class="col-12 col-sm-6 col-md-5 copy-by footlogo">
            <a href="http://www.gibsonads.com" target="_blank"><img src="http://trautmanninsurance.com/themes/Trautmann_v01/img/siteimages/lws.png" title="Gibson Design" alt="Gibson Design" /></a>
            <p class="imgmid">Design and Development <a href="http://www.gibsonads.com" target="_blank" title="Gibson Design">Gibson Design</a></p>
        </div>
        <div class="col-12 col-sm-6 col-md-4 copy-by copy-by-last footlogo">
        <a href="http://www.gibsonads.com" target="_blank"><img src="http://trautmanninsurance.com/themes/Trautmann_v01/img/siteimages/spartan.png" title="Gibson Design" alt="Gibson Design" /></a>
            <p class="imgmid">Site Powered by <a href="#" title="SiteChamber">SiteChamber<sup>TM</sup></a></p>
        </div>
    </div>
    </div>
</div>
<?php if($back_to_top_on_off == "On"): ?>
<div class="wrapper back-to-top">
    <a id="toTop" href="javascript:void(0)"><img src="<?php echo get_template_directory_uri() ?>/images/back-top.png" title="Back To Top" alt="back" /></a>
</div>
<?php endif; ?>