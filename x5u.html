<!DOCTYPE html>
<html>
<head>
    <title>Header x5u lab</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }
        #myButton {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 20px;
        }
        #myButton2 {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 20px;
        }
        #result {
            width: 400px;
            height: 200px;
            padding: 10px;
            border: 1px solid #ccc;
            font-family: Arial, sans-serif;
            font-size: 14px;
            resize: none;
        }
    </style>
</head>
<body>
    <button id="myButton">Gerar token</button>
    <br>
    <textarea id="result" readonly></textarea>

    <script>
        document.getElementById('myButton').addEventListener('click', function() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'cenarios/x5u/gerarToken.php', true);
            xhr.onload = function() {
                if (xhr.status >= 200 && xhr.status < 300) {
                    document.getElementById('result').value = xhr.responseText;
                } else {
                    document.getElementById('result').value = 'Erro ao executar o código PHP.';
                }
            };
            xhr.send();
        });
    </script>
    <br><br>
    
   
    
    
    <form id="tokenForm">
        <button id="myButton2" type="submit">Enviar Token</button>
        <input type="text" id="token" name="token">
        
    </form>
    <textarea id="result2" readonly></textarea>
    

    <script>
        document.getElementById('tokenForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var token = document.getElementById('token').value;

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'cenarios/x5u/validarToken.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status >= 200 && xhr.status < 300) {
                    document.getElementById('result2').textContent = xhr.responseText;
                } else {
                    document.getElementById('result2').textContent = 'Erro ao validar o token.';
                }
            };
            xhr.send('token=' + encodeURIComponent(token));
        });
    </script>



</body>
</html>