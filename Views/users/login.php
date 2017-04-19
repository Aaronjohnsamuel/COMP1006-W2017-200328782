<?php

if(isset($_POST["username"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    include_once("Controllers/users.php");

    $messages = Login($username, $password);
}
else {
    $messages = "";
}

$title = "Login";
?>

<main class="container">
    <?php if ($messages != "") : ?>
        <div class="alert alert-danger"><?php echo $messages ?></div>
    <?php endif ?>
      <div class="row">
        <div class="col-md-offset-4 col-md-4">
           <h1>Please Login</h1>
           <form method="post" action="index.php?pageId=Login">
                <fieldset class="form-group">
                    <label>Username:</label>
                    <input type="text" class="form-control" name="username" required autofocus/>
                 </fieldset>
                 <fieldset class="form-group">
                    <label>Password:</label>
                    <input type="password" class="form-control" name="password" required/>
                    or <a href="index.php?pageId=Register">Register</a>
                </fieldset>
                <fieldset class="form-group text-right">
                    <input type="submit" class="btn btn-success" value="Log In"/>
                    <a href="index.php">
                        <input type="button" class="btn btn-warning" value="Cancel"/>
                    </a>
               </fieldset>
            </form>
         </div>
      </div>
    </main>
