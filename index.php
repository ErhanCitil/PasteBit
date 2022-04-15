<!-- PHP Begin -->
<?php
// Includes
// include_once './SQL/db_connect.php';
// include_once './SQL/queries.php';

?>
<!-- PHP END -->

<!-- HTML Begin -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/main.css">
    <title>PasteBit</title>
    <!-- favicon komen later -->
    <!-- OG-tags komen later -->
</head>

<body>
    <header>
        <nav>
            <a href="./index.php">Home</a>
            <a href="./PHP/posts.php">Public Posts</a>
            <a href="./PHP/project.php">Project PasteBit</a>
            <a href="./PHP/legaal.php">Licenties</a>
        </nav>
    </header>
    <section class="landing">

        <article id="landing-header">
            <h1>Welkom naar PasteBit!</h1>
            <p>PasteBit is een platform waarmee je eenvoudig je code online met anderen kan delen.</p>
        </article>

        <article id="landing-form">
            <form action="./PHP/create.php" method="POST">
                <textarea name="code" id="code" cols="30" rows="10" placeholder="Typ hier je code"></textarea>
                <input type="submit" value="Plak je code">
            </form>


    </section>
</body>

</html>

<!-- HTML END -->