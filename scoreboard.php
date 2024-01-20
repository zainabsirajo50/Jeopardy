<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Jeopardy Scoreboard</title>
</head>
<body>

<div class="scoreboard">
    <?php include 'update.php'; ?>
</div>

</body>
</html>

<?php
    session_destroy();
    header("Location: end.html");
    exit();
?>