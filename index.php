<!-- PHP Begin -->
<?php
// Includes
include_once './SQL/db_connect.php';
// include_once './SQL/queries.php';
include './PHP/functions/url_generator.php';
// Url generator
$url = generateUrl();
$password = generateUrl();

?>

<!-- PHP END -->

<!-- HTML Begin -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PasteBit</title>
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="icon" href="img/icon.png" type="image/png" />
    <link rel="shortcut icon" type="image/png" href="./img/icon.png">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- OG-tags komen later -->
</head>

<body>
    <nav class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-white shadow sm:items-baseline w-full">
        <div class="mb-2 sm:mb-0 flex flex-row">
            <div class="h-10 self-center mr-2">
                <a href="index.php"><img class="logo" src="img/logo.png"></a>
            </div>
        </div>

        <div class="sm:mb-0 self-center">
            <a href="#" class="text-md no-underline text-black hover:text-blue-dark ml-2 px-1 hover:bg-gray-200 transition duration-500 hover:scale-125">Home</a>
            <a href="public.php" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1 hover:bg-gray-200 transition duration-500 hover:scale-125">Public</a>
            <a href="./PHP/project.php" class="text-md no-underline text-black hover:text-blue-dark ml-2 px-1 hover:bg-gray-200 transition duration-500 hover:scale-125">Project PasteBit</a>
            <a href="./PHP/legaal.php" class="text-md no-underline text-black hover:text-blue-dark ml-2 px-1 hover:bg-gray-200 transition duration-500 hover:scale-125">Licenties</a>

        </div>
    </nav>


    <section class="landing pt-6">

        <article id="landing-header">
            <h1>Welkom bij PasteBit!</h1>
            <p>PasteBit is een platform waarmee je eenvoudig je code online met anderen kan delen.</p>
        </article>

        <article id="landing-form">
            <form method="POST" id="pasteBinPost">
                <textarea class="pasteBinText" placeholder="Typ of plak hier uw code"></textarea>
            </form>
            <p>URL = <?= $url; ?> </p>
        </article>
    </section>

    <!-- Subheading -->
    <div class="mt-16 mb-16 w-full flex ml-10">
        <!-- Left side -->
        <div class="float-left h-7">
            <h4 class="mt-2.5 font-bold leading-5 text-base mb-2.5">Syntax Hightlighting</h4>


            <h4 class="mt-7 text-base mb-2.5 leading-5 font-bold">Password</h4>
            <p class="mb-2.5"> </p>

            <h4 class="mt-7 text-base mb-2.5 leading-5 font-bold">Titel paste</h4>

            <button class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                Paste
            </button>
        </div>

        <!-- Right side -->
        <div class="block float-right box-border pl-5 flex flex-col">
            <select class="h-10 border-solid border-2 border-gray-500">
                <option value="">Selecteer een optie</option>
                <option value="HTML">HTML</option>
                <option value="CSS">CSS</option>
                <option value="PHP">PHP</option>
                <option value="MySQL">MySQL</option>
            </select>

            <input type="text" name="password" value="<?= $password ?>" placeholder="Vul een wachtwoord in" class="mt-7 text-base leading-5 font-bold" id="">

            <input type="text" name="" class="mt-5 text-base mb-2.5 leading-5 font-bold" id="">
        </div>
    </div>

</body>

</html>

<!-- HTML END -->