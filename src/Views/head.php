<?php

use BasicApp\Js\TinyMce\Config\TinyMce;
?>
<script type="text/javascript" src="<?= base_url('assets/tinymce/tinymce.min.js');?>"></script>
<script type="text/javascript">
function init_tinymce()
{
    tinymce.init(TINYMCE_CONFIG);
}

var TINYMCE_CONFIG = <?php

$config = config(TinyMce::class);

echo json_encode($config);

?>
</script>