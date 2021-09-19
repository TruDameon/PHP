<!-- PHP is just like JSX of Java -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        // echo("Hello World");
        // echo "<h1>Dameon's Site</h1>";
        // echo("<hr>");
        // echo "<p> This is my site. </p";

        // $character_name = "Dameon";
        // $character_age = "35";

        // echo("There once was a man name named $character_name. <br>"); // Similar to react
        // echo("He was $character_age years old. <br>");
        // echo("He really liked the name $character_name. <br>");
        // echo("But he didn't like being $character_age. <br>");

        // DATA TYPES
        // $phrase = "To be or not to be";
        // $age = 23;
        // $gpa = 7.43;
        // $isMale = true;
        // null;
        // echo $phrase;

        // STRINGS
        // $phrase = "Giraffe Academy";
        // echo $phrase;
        // echo strtolower($phrase);
        // echo strtoupper($phrase);
        // echo strlen($phrase);
        // echo $phrase[0];
        // $phrase[0] = "B";
        // echo $phrase;
        // echo str_replace("ffe", "Panda", $phrase);
        // echo substr($phrase, 8);
        // echo substr($phrase, 8, 3);

        // NUMBERS
        // echo 5;
        // echo -7;
        // echo 6.7;
        // echo 5 + 9;
        // echo 5 - 9;
        // echo 9 / 5;
        // echo 5 * 9;
        // echo 10 % 3;
        // echo 4 + 5 * 10;
        // $num = 10;
        // echo $num;
        // $num++;
        // echo $num;
        // $num--;
        // echo $num;
        // $num += 25;
        // echo $num;
        // echo abs(-100);
        // echo pow(2,4);
        // echo sqrt(36);
        // echo max(2,5);
        // echo min(2,5);
        // echo round(3.2);
        // echo ceil(3.3);
        // echo floor(3.3);

        // USER INPUT - we will need form for this

    ?>

    <!-- <form action="site.php" method="get">
        Name : <input type="text" name="name">
        <br>
        Age: <input type="text" name="age">
        <input type="submit">
    </form>

    Your name is: <?php echo $_GET["name"]; ?>
    <br>
    Your age is: <?php echo $_GET["age"]; ?> -->

    <!-- CALCULATOR -->
    <!-- <form action="site.php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <br>
        <input type="submit">
    </form>

    Answer: <?php
        echo $_GET["num1"] + $_GET["num2"] 
    ?> -->

    <!-- MAD LIBS GAME -->
    <!-- <form action="site.php" method="get">
        Color: <input type="text" name="color"> <br>
        Plural Noun: <input type="text" name="pluralNoun"> <br>
        Celebrity: <input type="text" name="celebrity"> <br>

        <input type="submit">
    </form>

    <?php

        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];

        echo "Roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $celebrity <br>";
    ?> -->

    <!-- URL PARAMETERS -->
    <!-- <form action="site.php" method="get">
        Name: <input type="text" name="name"> <br>
        Password: <input type="password" name="password" id="password"> <br>
        <input type="submit">
    </form>
    <br><br>

    <?php
        echo $_GET["name"];
        echo "<br>";
        echo $_GET["password"];
    ?> -->

    <!-- <form action="site.php" method="post">
        Name: <input type="text" name="name"> <br>
        Password: <input type="password" name="password" id="password"> <br>
        <input type="submit">
    </form>
    <br><br>

    <?php
        echo $_POST["name"];
        echo "<br>";
        echo $_POST["password"];
    ?> -->

    <!-- ARRAYS -->

    <!-- <?php
        $friends = array("Kevin", "Karen", "Oscar", "Jim", 1, true);
        echo $friends[1];
        $friends[1] = 400;
        echo $friends[1];
        $friends[6] = "Angela";
        echo $friends[4];
        echo count($friends);
    ?> -->

    <!-- <form action="site.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"><br>

        <input type="submit">
    </form>

    <?php
        $fruits = $_POST["fruits"];
        echo $fruits[1];
    ?> -->

    <!-- ASSOCIATIVE ARRAYS -> HASHMAPS -->
    <!-- <?php
        $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+"); //Keys should be uniques
        echo $grades["Jim"];
    ?> -->

    <!-- <form action="site.php" method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>

    <?php
        $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+"); //Keys should be uniques
        echo $grades[$_POST["student"]];
    ?> -->

</body>
</html>