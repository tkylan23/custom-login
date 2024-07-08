<?php

// Custom Login CSS
function custom_login_css() {
   echo
'style type="text/css">

</style>';
}
add_action('login_head', 'custom-login_css');

?>
