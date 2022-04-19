<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PasteBit | Public</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-white shadow sm:items-baseline w-full">
        <div class="mb-2 sm:mb-0 flex flex-row">
            <div class="h-10 w-10 self-center mr-2">
                <img class="h-10 w-10 self-center" src="">
            </div>
            <div>
                <a href="/" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark font-sans font-bold">PasteBit</a><br>
                <span class="text-xs text-grey-dark">Delen doe je hier!</span>
            </div>
        </div>

        <div class="sm:mb-0 self-center">
            <a href="#" class="text-md no-underline text-black hover:text-blue-dark ml-2 px-1 hover:bg-gray-200 transition duration-500 hover:scale-125">Home</a>
            <a href="public.php" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1 hover:bg-gray-200 transition duration-500 hover:scale-125">Public</a>
            <a href="./PHP/project.php" class="text-md no-underline text-black hover:text-blue-dark ml-2 px-1 hover:bg-gray-200 transition duration-500 hover:scale-125">Project PasteBit</a>
            <a href="./PHP/legaal.php" class="text-md no-underline text-black hover:text-blue-dark ml-2 px-1 hover:bg-gray-200 transition duration-500 hover:scale-125">Licenties</a>

        </div>
    </nav>

    <div class="flex flex-col space-y-4 animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none">
        <div class="flex flex-col p-8 bg-gray-800 shadow-md hover:shodow-lg rounded-2xl">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="flex flex-col ml-3">
                        <div class="font-medium leading-none text-gray-100">Public post</div>
                        <p class="text-sm text-gray-500 leading-none mt-1">HTML | Title | Date
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="flex flex-col p-8 bg-gray-800 shadow-md hover:shodow-lg rounded-2xl">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="flex flex-col ml-3">
                        <div class="font-medium leading-none text-gray-100">Public post</div>
                        <p class="text-sm text-gray-500 leading-none mt-1">CSS | Title | Date
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>