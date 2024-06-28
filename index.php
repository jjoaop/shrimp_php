<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Don't click on the shrimp</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Hello friend. Don't click on the shrimp!</h1>

    <script>
        const h1Element = document.querySelector('h1');
        //cores
        const colors = ['#84FFFC', '#33FF57', '#5733FF', '#FF00FF']; // Pode adicionar mais cores se desejar
        //função para alternar as cores
        function alternateColors() {
            let index = 0;
            setInterval(() => {
                h1Element.style.color = colors[index];
                index = (index + 1) % colors.length;
            }, 200); //alterna a cada 0.2 segundos
        }
        alternateColors();

    </script>

    <form method="POST">
        <button type="submit" name="botaoshrimp" class="botaoshrimp">🦐</button>
    </form>

    <?php
        $c = 0;
        function ReturnShrimp() {
            global $shrimp, $c;
            while(true){
                echo '<p>';
                while($c < 1){
                    $c++;
                    echo '<p class="megashrimp"> 🦐 </p>';
                };
            };
        };
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['botaoshrimp'])){
                ReturnShrimp();
            }
        }
    ?>
</body>
</html>