<?php
include_once('Controllers/users.php');
CheckIfAuthenticated();

include_once('Controllers/games.php');

$gameID = $_GET["gameID"]; // assigns the gameID from the URL

if($gameID == 0) {
    $game = null;
    $isAddition = 1;
} else {
    $isAddition = 0;
    $game = GetGameById($gameID);
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <h1>Game Details</h1>
            <form action="index.php?pageId=GameUpdate" method="post">
                <div class="form-group">
                    <label for="IDTextField" hidden>Game ID</label>
                    <input type="hidden" class="form-control" id="IDTextField" name="IDTextField"
                           placeholder="Game ID" value="<?php echo $game['Id']; ?>">
                </div>
                <div class="form-group">
                    <label for="NameTextField">Game Name</label>
                    <input type="text" class="form-control" id="NameTextField"  name="NameTextField"
                           placeholder="Game Name" required  value="<?php echo $game['Name']; ?>">
                </div>
                <div class="form-group">
                    <label for="CostTextField">Game Cost</label>
                    <input type="text" class="form-control" id="CostTextField" name="CostTextField"
                           placeholder="Game Cost" required  value="<?php echo $game['Cost']; ?>">
                </div>
                    <input type="hidden" name="isAddition" value="<?php echo $isAddition; ?>">
                <button type="submit" id="SubmitButton" class="btn btn-primary">Submit</button>
                <a href="index.php?pageId=GamesList">
                    <input type="button" class="btn btn-warning" value="Cancel"/>
                </a>

            </form>

        </div>
    </div>
</div>


