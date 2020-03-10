<?php

use BasicApp\Js\TinyMce\Config\TinyMce;

?>
<script type="text/javascript" src="<?= base_url('js/tinymce/tinymce.min.js');?>"></script>
<script type="text/javascript" src="<?= base_url('js/tinymce/init.js');?>"></script>
<script type="text/javascript">
var TINYMCE_CONFIG = <?php

$config = config(TinyMce::class);

echo json_encode($config);

?>
</script>