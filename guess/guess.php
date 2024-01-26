<html>
<head>
    <title>c41d2575</title>
</head>
<body>
    <h1>Madhavan Vinu PHP</h1>
    <pre>
        ____  
       /    \ 
      |      |
      |      |
       \____/
    </pre>
    <?php
        if (isset($_GET['guess'])) {
            $guess = $_GET['guess'];

            if ($guess === '') {
                echo "Your guess is too short";
            } elseif (!is_numeric($guess)) {
                echo "Your guess is not a number";
            } elseif ($guess < 68) {
                echo "Your guess is too low";
            } elseif ($guess > 69) {
                echo "Your guess is too high";
            } elseif ($guess == 69) {
                echo "Congratulations - You are right";
            }
        } else {
            echo "Missing guess parameter";
        }
    ?>

    <a href="http://localhost/guess/fail.php">Click here to check the error setting</a> 
    <br>
    <a href="http://localhost/guess/check.php">Click here to cause a traceback</a>
</body>
</html>

