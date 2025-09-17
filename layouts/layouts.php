<?php
class layouts{
    public function heading($conf){
        echo "welcome to BBIT"; 
    }
    public function welcome($conf){
        print "<p> this is a new semester</p>";
    }
    public function footer($conf){
        echo "<footer>
     copyright &copy;" . date("y")."" .$conf['site_name']."
     Contact us at <a href='mailto:{$conf['site_email']}'>{$conf['site_email']}</a></footer>";
    }
}


