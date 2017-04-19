<!--
 Author: Aaron John Samuel
 Stutent ID: 200328782
 File name: COMP 1004-W2017-200328782
  -->


<?php
    include_once('Controllers/users.php');
    CheckIfAuthenticated();
?>

<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <h1>Dashboard</h1>

            <ul>
                <li><a href="index.php?pageId=GamesList"><i class="fa fa-gamepad fa-lg" ></i> Games List</a></li>
                <li>================</li>
                <!-- New button to add new games -->
                <a class="btn btn-primary" href="index.php?pageId=GameDetails&gameID=0">
                    <i class="fa fa-plus"></i> Add New Game</a>
            </ul>


        </div>
    </div>
</div>