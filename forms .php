<?php
class user_forms{
    public function signup_form(){
     ?>
     <h2>signup form</h2>
    <form action='submit_signup.php' method='post'>
<label for='username'>Username:</label>
<input type='text' id='username' name='username' required><br><br>
<label for='email'>email:</label>
<input type='email' id='email' name='email' required><br><br>
<label for='password'>password_verify:</label>
<input type='password' id='password' name='password' required><br><br>

<input type='submit' id='submit' name='username' required><br><br>




   
    </form>
    <?php
    }
}