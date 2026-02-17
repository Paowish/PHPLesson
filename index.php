<?php
$User = [
    'name' => 'Paolo',
    'email' => 'paolo@example.com',
    'password' => '123456',
    'hobbies' => ['video games', 'tennis']
];

$Users = [ 
    ['name' => 'Paolo','email' => 'paolo@gmail.com','password' => '123456'],
    ['name' => 'Vincent','email' => 'vincent@gmail.com','password' => '123456'],
    ['name' => 'Carunia','email' => 'carunia@gmail.com','password' => '123456']
    ];

$Users []= ['name' => 'Paolo','email' => 'paolo@gmail.com','password' => '123456'];

$output = $User['name'];
$output = $User['hobbies'][0];
$User['address'] = ['123 CICT St'];

$fruits = [
            ['Apple', 'Red'],
            ['Orange', 'Orange'],
            ['Banana', 'Yellow']
];

$fruits[] = ['Grapes', 'Purple'];
$output = $fruits[1][0];
$output = $Users[1]['email'];
unset($Users[0]);

$output = count($Users);

class Student {
    public $name;

    public function __construct($name){
        $this->name = $name;
        echo "Object created for " . $this->name . "</br>";
    }
}

$s1 = new Student("Paolo");
$s2 = new Student(name: "Vincent");
$s3 = new Student("Carunia");

class BankAccount {
  public $owner;
  public $balance;

  public function __construct($owner, $bal){
    $this->owner = $owner;
    $this->balance = $bal;

  }
  public function deposit ($amount){
  $this  ->balance += $amount;
  }
}

$acc1 = new BankAccount("Paolo", 20000);
  echo "{$acc1->owner} has {$acc1->balance}</br>";

?>

<!DOCTYPE html>
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
            <!-- Output -->
            <p class="text-xl"><?= $output ?></p>
            <h2 class="text-xl font-semibold my-4">User Array</h2>
            <pre>
                <?php print_r($Users) ?>
            </pre>

          </div>
        </div>
    </body>
</html>