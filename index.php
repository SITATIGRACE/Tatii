<?php
class myClass{
    public function heading(){
        echo"Welcome to BBIT DevOPs!";
    }
    public function myMethod(){
        echo "<p>This is a new semester</p>";
    }
    public function footer(){
        echo "<footer>Contact us at <a href=mailto:'info@bbit.edu'>info@bbit.edu</a></footer>";
    }
}
$instance=new myClass();

$instance->heading();
$instance->myMethod();
$instance->footer();
