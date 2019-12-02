<?php

require_once file_require(get_template_directory() . '/framework/addons/lessphp/lessc.inc.php');

// Enable caching
header('Cache-Control: public');
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 86400) . ' GMT');
 
// Set the correct MIME type, because Apache won't set it for us
header("Content-type: text/css");

$less = new lessc;
echo $less->compile(".block { padding: 3 + 4px }");
echo $less->compileFile("../../../assets/plugins/font-awesome/less/font-awesome.less");

?>