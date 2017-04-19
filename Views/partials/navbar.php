<!--
 Author: Aaron John Samuel
 Stutent ID: 200328782
 File name: COMP 1004-W2017-200328782
  -->


<?php
    session_start();
?>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">My Favourite Games</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">


                <li class=<?php echo ($title == "Home") ? "active" : "" ?>><a href="index.php">
                        <i class="fa fa-home fa-lg"></i> Home</a></li>
                <li class=<?php echo ($title == "About") ? "active" : "" ?>><a href="index.php?pageId=About">
                        <i class="fa fa-info fa-lg"></i> About</a></li>
                <li class=<?php echo ($title == "Contact") ? "active" : "" ?>><a href="index.php?pageId=Contact">
                        <i class="fa fa-phone fa-lg"></i> Contact</a></li>


                <?php if(isset($_SESSION["is_logged_in"])) : ?>

                    <!-- ENTER CODE TO COMPLETE YOUR NAVBAR HERE -->
                    <li><p class="navbar-text">Welcome, <?php echo $_SESSION["displayName"]; ?></p></li> <!-- displaying welcome, "the name of the user logged in" -->
                    <li><a href=index.php?pageId=Dashboard><i class="fa fa-tachometer fa-lg" ></i> Dashboard</a></li> <!-- activating the dashbord -->

                    <li><a href=index.php?pageId=Logout><i class="fa fa-sign-out fa-lg" ></i> Logout</a></li>
                <?php else: ?>
                    <li class=<?php echo ($title == "Login") ? "active" : "" ?>><a href="index.php?pageId=Login"><i class="fa fa-sign-in fa-lg" ></i> Login</a></li>
                <?php endif ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>