<?php
    if(isset($_POST["add_new_contact"])){
        $name=$_POST["name"];
        $phone=$_POST["phone"];
        $email=$_POST["email"];
        
        if(checkIfContactIsValid($name,$phone,$email)){
            $host="localhost";
            $dbname="test";
            $username="root";

            $dsn="mysql:host=$host;dbname=$dbname";

            $pdo=new PDO($dsn, $username);

            $sql = "INSERT INTO contacts (name, phone, email) VALUES (:name, :phone, :email)";
            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(':name', $name);
            $stmt->bindValue(':phone', $phone);
            $stmt->bindValue(':email', $email);

            $stmt->execute();

            echo "a new contat successfully added!";
        }else{
            echo "contact is not valid! <br>";
        }
    }

    function checkIfStringHaveNumbers($string){
        return preg_match('/[0-9]/', $string);
    }

    function checkIfStringHaveLetters($string){
        return preg_match('/[a-zA-Z]/', $string);
    }

    function checkIfStringIsEmail($string){
        return filter_var($string, FILTER_VALIDATE_EMAIL);
    }

    function checkIfContactIsValid($name, $phone, $email){
        $isValidName=false;
        $isValidPhone=false;
        $isValidEmail=false;

        if(checkIfStringHaveNumbers($name)){
            echo "name can't contain numbers! <br>";
        }else{
            $isValidName=true;
        }
        if(checkIfStringHaveLetters($phone)){
            echo "phone can't contain letters! <br>";
        }else{
            $isValidPhone=true;
        }
        if(!checkIfStringIsEmail($email)){
            echo "your email is not valid! <br>";
        }else{
            $isValidEmail=true;
        }

        if($isValidName && $isValidPhone && $isValidEmail){
            $isValidContact=true;
            return true;
        }else{
            return false;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" placeholder="name" name="name">
        <br>
        <input type="text" placeholder="phone" name="phone">
        <br>
        <input type="text" placeholder="email" name="email">
        <br>
        <input type="submit" value="Add New Contact" name="add_new_contact">
    </form>
</body>
</html>