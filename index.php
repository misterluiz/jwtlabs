<!DOCTYPE html>
<html>
<head>
    <title>Cenarios JWT</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .button-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            margin: 10px;
            transition-duration: 0.4s;
            border-radius: 8px;
        }
        .button:hover {
            background-color: white;
            color: black;
            border: 2px solid #4CAF50;
        }
        h1 {
            font-size: 36px;
            margin: 0;
        }
    </style>
</head>
<body>
    <h1>Cenários</h1>
    <div class="button-container">
        <a href="weaksecret.php" ><button class="button">Weak secret</button></a>
        <a href="none.php" ><button class="button">None Attack</button></a>
        <a href="x5u.php" ><button class="button">X5u</button></a>
    </div>
</body>
</html>
