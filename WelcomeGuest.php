<?php
    $isLoggedin = true;
    $name = null;
    $title = "Welcome Page";
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title ?>PHP</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP</h1>
        </div> 
    </header>

    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- <h1 class="text-3xl mb-4">Welcome</h1> -->

            <?php if($isLoggedin && isset($name)): ?>
                <h2 class="text-2xl">Welcome <?= $name ?>!</h2>
            <?php elseif($isLoggedin): ?>
                <h2 class="text-2xl">Welcome Guest!</h2>
            <?php endif; ?>

        </div>
    </div>
</body>
</html>
