<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 *

  For uninstalling ME , first remove/comment all FreiChat related code i.e below code
  Then remove FreiChat tables frei_session & frei_chat if necessary
  The best/recommended way is using the module for installation                         -->
 */

$ses = null;

if (!function_exists("freichatx_get_hash")) {

    function freichatx_get_hash($ses) {

        if (is_file("/var/www/html/freichat/hardcode.php")) {

            require "/var/www/html/freichat/hardcode.php";

            $temp_id = $ses . $uid;

            return md5($temp_id);
        } else {
            echo "<script>alert('module freichatx says: hardcode.php file not found!');</script>";
        }

        return 0;
    }

}
?>
<script type="text/javascript" language="javascipt" src="http://localhost/freichat/client/main.php?id=<?php echo $ses; ?>&xhash=<?php echo freichatx_get_hash($ses); ?>"></script>
<link rel="stylesheet" href="http://localhost/freichat/client/jquery/freichat_themes/freichatcss.php" type="text/css">
