


<?php 

    class User {
        public $name = "Paolo";
        public $email;
        private $status = 'active';
        public function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
        }

        public function login(){
            echo $this->name . ' logged in <br>';
        }

        public function getStatus(){
            echo $this->status;
        }

    }

    $user1 = new User ('Paolo', 'paolocarunia@gmail.com');

    echo $user1->login();

    $user1->getStatus();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Practice</title>
</head>
<body>

    

    
</body>
</html>