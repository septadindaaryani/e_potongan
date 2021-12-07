$(document).ready(function(){
  $("#title").autocomplete({
    source : "<?php echo site_url('umum/get_autocomplete') ?>"
  });

});
