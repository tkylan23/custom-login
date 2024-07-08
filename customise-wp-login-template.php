<?php

function custom_login_css() {
   echo '
<style type="text/css">
// Custom CSS here


}
</style>';
}
add_action('login_head', 'custom_login_css');

?>
