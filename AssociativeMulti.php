<?php
$names = ["Paolo Vincent", "Keneth Kenechiwa", "Jomar dageru", "Diana Milbi"];
$users = [
    ['name' => 'Paolo', 'email' => 'paolo@gmail.com'],
    ['name' => 'Keneth', 'email' => 'keneth@gmail.com'],
    ['name' => 'Jomar', 'email' => 'jomar@gmail.com'],
    ['name' => 'Diana', 'email' => 'diana@gmail.com']
];

?>


<DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Asso & Multi</title>
  </head>
    <body class="bg-gray-100">
      <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
          <h1 class="text-3xl font-semibold">PHP</h1>
        </div>
      </header>

<div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
        
        <h3 class="text-xl font-semibold mb-4">Using a for loop</h3>
        <ul class="mb-6"><?php for ($i = 0; $i < count($names); $i++):?>
            <li><?= $names[$i] ?></li>
            <?php endfor; ?>
        </ul>
        

        <h3 class="text-xl font-semibold mb-4">Using a foreach loop</h3>
        <ul class="mb-6">
            <?php foreach ($names as $Name): ?>
            <li><?= $Name ?></li>
            <?php endforeach; ?>
        </ul>
            

        <h3 class="text-xl font-semibold mb-4">Using a foreach loop with index</h3>
        <ul class="mb-6">
          <?php foreach ($names as $index => $Name): ?>
            <li><?= $index . ': ' . $Name ?></li>
            <?php endforeach; ?>
        </ul>

        <h3 class="text-xl font-semibold mb-4">Using a foreach loop with associative arrays</h3>
        <ul class="mb-6">
            <?php foreach ($users as $user): ?>
                <li><?= $user['name'] . ': ' . $user['email'] ?></li>
            <?php endforeach; ?>
        </ul>


        <h3 class="text-xl font-semibold mb-4">Getting key names and values from associative arrays</h3>
        <ul class="mb-6">
          <?php foreach ($users as $user): ?>
            <?php foreach ($user as $key => $value): ?>
                <li><?= $key . ': ' . $value ?></li>
            <?php endforeach; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
</body>
</html>