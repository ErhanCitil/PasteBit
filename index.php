<!-- PHP Begin -->
<?php
// Includes
include_once './SQL/db_connect.php';
include './SQL/queries.php';
include './PHP/functions/url_generator.php';
include './PHP/functions/datum.php';

// Variables
$url = generateUrl();
$password = generateUrl();
$datum = datum();
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

            <div class="h-10  self-center mr-2">
                <img class="logo" src="img/logo.png" alt="PasteBit Logo">
            </div>

        </div>

        <div class="sm:mb-0 self-center">
            <a href="./index.php" class="text-md no-underline text-black hover:text-blue-dark ml-2 px-1 hover:bg-gray-200 transition duration-500 hover:scale-125">Home</a>
            <a href="./PHP/posts.php" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1 hover:bg-gray-200 transition duration-500 hover:scale-125">Public</a>
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
            <form method="POST" id="pasteBinPost" action="index.php">

                <textarea id="code" name="code" class="pasteBinText" placeholder="Typ of plak hier uw code"></textarea>

                <div class="mt-16 mb-16 w-full flex ml-10">

                    <div class="float-left h-7">
                        <h4 class="mt-2.5 font-bold leading-5 text-base mb-2.5">Welke taal?</h4>
                        <h4 class="mt-7 text-base mb-2.5 leading-5 font-bold">Titel</h4>
                        <h4 class="mt-7 text-base mb-2.5 leading-5 font-bold" name="wachtwoord">Wachtwoord?</h4>
                        <p class="mb-2.5"> </p>
                    </div>

                    <div class="block float-right box-border pl-5 flex flex-col">

                        <select class="h-10 border-solid border-2 border-gray-500" name="taal" required>
                            <option value="">Selecteer een optie</option>
                            <option value="HTML">HTML</option>
                            <option value="CSS">CSS</option>
                            <option value="PHP">PHP</option>
                            <option value="SQL">MySQL</option>
                        </select>

                        <input type="text" name="titel" placeholder="Geef een titel aan" class="mt-5 text-base mb-2.5 leading-5 font-bold" required>
                        <label class="switch" for="checkbox">
                            <input type="checkbox" id="checkbox" onclick='passwordAan()' />
                            <div class="slider round"></div>
                        </label>
                        <input type="text" name="wachtwoord" id="password" value="<?= $password ?>" placeholder="Vul een wachtwoord in" class="mt-7 text-base leading-5 font-bold" id="">
                        <input type="text" hidden name="url" value="<?= $url ?>">
                        <input type="text" hidden name="datum" value="<?= $datum ?>">
                        <input type="submit" value="paste" class="bg-gray-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    </div>

                </div>
            </form>

        </article>

    </section>
    <script>
        function passwordAan() {
            var radio = document.getElementById("checkbox");
            var password = document.getElementById("password");
            if (radio.checked == true) {
                password.style.display = "block";
            } else {
                password.style.display = "none";
                password.value = null;
            }
        }
    </script>
</body>

</html>

<!-- HTML END -->