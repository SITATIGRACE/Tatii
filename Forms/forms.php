<?php
class forms{

public function signup(){
    ?>
    <form action='submit_signup.php' method='post'>
        <label for='username'>Username:</label>
        <input type='text' id='username' name='username' required><br><br>
        <label for='email'>email:</label>
        <input type='email' id='email' name='email' required><br><br>
        <label for='password'>password_verify:</label>
        <input type='password' id='password' name='password' required><br><br>

        <?php $this->submit_button('sign up'); ?> 
        <a href='login.php'>already have an account?login</a>
    </form>
    <?php
}
public function login(){
    ?>
    <h2>Login Form</h2>
    <form action='submit_login.php' method='post'>
        <label for='username'>Username:</label>
        <input type='text' id='username' name='username' required><br><br>
        <label for='password'>password_verify:</label>
        <input type='password' id='password' name='password' required><br><br>

        <?php $this->submit_button('login'); ?> 
        <a href='signup.php'>don't have an account?signup</a>
    </form>
    <?php
}
    public function submit_button($text){
        echo "<input type='submit' value='{$text}'>";
    }
}


