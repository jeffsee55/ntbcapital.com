<div class="section plain-text-section" id="section11">
  <?php dynamic_sidebar( 'sidebar-footer' ) ?>
</div>
<footer class="content-info" role="contentinfo">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-sm-6 col-xs-12">
        <?php dynamic_sidebar( 'footer-left' ) ?>
      </div>
      <div class="col-lg-offset-6 col-lg-3 col-sm-6 col-xs-12 footer-right">
        <?php dynamic_sidebar( 'footer-right' ) ?>
      </div>
    </div>
    <div class="bottom-footer">
      © NTB Capital | <?php echo date('Y'); ?>
    </div>
  </div>
</footer>
