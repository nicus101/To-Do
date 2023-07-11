<?php
require("sqllogin.php");


?>




<html>

<head>
    <title>Musisz być zalogowany</title>
    <style>
        body {
            display: flex;
        }
        form {
            display: flex;
            justify-content: center;
            margin: auto;
            flex-direction: column;

            background-color: grey;
            padding: 0.5rem;
            gap: 0.5rem;
        }
    </style>
</head>

<body>
    <form method="POST">
        <input name="userName" placeholder="Login" type="text" />
        <input name="pass" placeholder="Hasło" type="password" />
        <button type="submit">Zaloguj</button>
        <p><?php 
        if ($message = null) {
            echo "Wpisz login i hasło";}
            else
        echo $message ; ?></p>
    </form>

</body>

</html>