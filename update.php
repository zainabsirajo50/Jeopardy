<?php

session_start();
?>


<!DOCTYPE html>
<html>

<link rel="stylesheet" href="styles.css">
<body>



<?php

   

   // Initialize scores in session
   if (!isset($_SESSION['scores'])) {
    $_SESSION['scores'] = [
        'team1' => 0,
        'team2' => 0,
        'team3' => 0,
        'team4' => 0,
        'team5' => 0,
    ];
}

    // Handle form submissions to update scores
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['team1'])) {
            $_SESSION['scores']['team1'] += intval($_POST['team1']);
        }
        if (isset($_POST['team2'])) {
            $_SESSION['scores']['team2'] += intval($_POST['team2']);
        }
        if (isset($_POST['team3'])) {
            $_SESSION['scores']['team3'] += intval($_POST['team3']);
        }
        if (isset($_POST['team4'])) {
            $_SESSION['scores']['team4'] += intval($_POST['team4']);
        } 
        if (isset($_POST['team5'])) {
            $_SESSION['scores']['team5'] += intval($_POST['team5']);
        }
    }
?>

<div class="add">
    <h1>Scoreboard</h1>

    <table>
        <tr>
            <td>Team 1</td>
            <td>Team 2</td>
            <td>Team 3</td>
            <td>Team 4</td>
            <td>Team 5</td>
        </tr>
        <tr>
            <td><?php echo  $_SESSION['scores']['team1']; ?></td>
            <td><?php echo  $_SESSION['scores']['team2']; ?></td>
            <td><?php echo  $_SESSION['scores']['team3']; ?></td>
            <td><?php echo  $_SESSION['scores']['team4']; ?></td>
            <td><?php echo  $_SESSION['scores']['team5']; ?></td>
        </tr>
    </table>





    <form method="post" action="">
        <label for="team1">Add points for Team 1:</label>
        <input type="number" name="team1" id="team1" value="0">
        <input type="submit" value="Update">

        <br>

        

        <label for="team2">Add points for Team 2:</label>
        <input type="number" name="team2" id="team2" value="0">
        <input type="submit" value="Update">

        <br>
	

        <label for="team3">Add points for Team 3:</label>
        <input type="number" name="team3" id="team3" value="0">
        <input type="submit" value="Update">

        <br>


        <label for="team4">Add points for Team 4:</label>
        <input type="number" name="team4" id="team4" value="0">
        <input type="submit" value="Update">
        
        <br>
	

        <label for="team5">Add points for Team 5:</label>
        <input type="number" name="team5" id="team5" value="0">
        <input type="submit" value="Update">
    </form>
</div>
<a href="scoreboard.php" class="button">End Game</a>
<br>
<a href="jeopardy.html" class="button4">Back to Game</a>
</body>
</html>


