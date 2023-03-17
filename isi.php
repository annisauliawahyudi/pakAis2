<?php
include "kon2.php";
session_start();

if(!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>

</head>
<body>
    <section>
    <div >
        <form action="" method="post">
            <?php echo "<h1>saya" . $_SESSION['username'] . " ankank" . "</h1>"; ?>
            <div>
                <a href="logout.php">logout</a>
            </div>
    </div>
    </section>
</body>
</html>