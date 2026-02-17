
<?php 


    $listings = [
        [
            'id' => '1',
            'title' => 'Software Engineer.',
            'description' => 'We are seeking a skilled software developer to develop high quality software solutions.',
            'salary' => 70000,
            'location' => 'San Francisco',
            'tags' => ['Software development', 'Full-time', 'Remote'],
        ],

        [
            'id' => '2',
            'title' => 'Software Analyst.',
            'description' => 'We are seeking a skilled software analyst to analyze and improve software systems.',
            'salary' => 60000,
            'location' => 'Pasig',
            'tags' => ['Software development', 'Full-time', 'Remote'],
        ],

        [
            'id' => '3',
            'title' => 'Software Developer.',
            'description' => 'We are seeking a skilled software developer to develop high quality software solutions.',
            'salary' => 40000,
            'location' => 'Pasay',
            'tags' => ['Software development', 'Full-time', 'Remote'],
        ],

        [
            'id' => '4',
            'title' => 'Software Tester.',
            'description' => 'We are seeking a skilled software tester to test and improve software quality.',
            'salary' => 80000,
            'location' => 'Taguig',
            'tags' => ['Software development', 'Full-time', 'Remote'],
        ],

        [
            'id' => '5',
            'title' => 'Software Manager.',
            'description' => 'We are seeking a skilled software manager to lead software development teams.',
            'salary' => 90000,
            'location' => 'Marikina',
            'tags' => ['Software development', 'Full-time', 'Remote'],
        ]
        
    ];

    // function formatSalary($salary){
    //     return '₱' . number_format($salary);
    // }

    $formatSalary = fn ($Salary) => '$' . number_format($Salary);
   

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zalando+Sans+Expanded:ital,wght@0,200..900;1,200..900&family=Zalando+Sans:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>

        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Zalando', 'sans-serif'],
                        display: ['Zalando', 'serif'],
                    },
                },
            },
        }


    </script>

    <title>Job Listings</title>
</head>
<body class="bg-gray-200">
    <header class="bg-green-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold font-display">Job Listings</h1>
        </div>
    </header>

    <div class="container mx-auto p-4 mt-4">
        <!-- output -->
        <?php foreach ($listings as $index => $job): ?>
            <div class="my-4">
                <div class="
                <?php if ($index % 2 == 0): ?>
                    bg-green-400
                    <?php else : ?>
                        bg-white
                        <?php endif; ?>   
                        rounded-lg shadow-md">

                    <div class="p-4">
                        <h2 class="text-xl font-semibold"><?= $job['title'] ?></h2>
                        <p class="text-gray-700 text-lg mt-2"><?= $job['description'] ?></p>

                        <ul class="mt-2">
                            <li class="mb-2">
                                <strong>Salary:</strong> <?= $formatSalary($job['salary']) ?>
                                
                            </li>

                            <li class="mb-2">
                                <strong>Location:</strong> <?= $job['location'] ?>
                                    <?= $job['location'] === 'Singapore' ?  '.': '' ?>
                                        <span class="inline-flex item-center px-3 py-1 text-cs font-medium rounded-full bg-blue-500 text-white border border-blue-600">Remote</span>
                            </li>

                            <?php if(!empty($job['tags'])): ?>
                                
                                

                            <li class="mb-2">
                                <strong>Tags:</strong> <?= implode(', ', $job['tags']) ?>
                                <?php endif; ?>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
