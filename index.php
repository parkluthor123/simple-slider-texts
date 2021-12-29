<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel de texto</title>
    <style>
        *{
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Arial, Helvetica, sans-serif;
        }

        .list-text-wrapper
        {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .list-text-wrapper .list-text{
            list-style: none;
            position: relative;
            width: 220px;
        }

        .list-text-wrapper .list-text li
        {   
            font-size: 32px;
            opacity: 0;
            transition: all 0.3s ease-in-out;
            position: absolute;
            left: 0;
            top: 0;
        }
        .item-enabled
        {
            transition: all 0.3s ease-in-out !important;
            opacity: 1 !important;
        }
    </style>
</head>
<body>
<div class="list-text-wrapper">
    <ul class="list-text" data-list="list-text">
        <li class="item-enabled">Biden Lixo</li>
        <li>Lula Lixo</li>
        <li>Bolsonaro Lixo</li>
        <li>Quero Dólar</li>
    </ul>
</div>
    <script>
        const time = 4000;
        let currentTextIndex = 0;
        const texts = document.querySelectorAll(".list-text li");
        const maxText = texts.length;

        function nextText()
        {
            texts[currentTextIndex].classList.remove("item-enabled");

            currentTextIndex++
            
            if(currentTextIndex >= maxText)
            {
                currentTextIndex = 0;
            }

            texts[currentTextIndex].classList.add("item-enabled");

        }

        function animationText()
        {   
            setInterval(()=>{
                nextText()
            }, time)
        }

        window.addEventListener("load", animationText)
    </script>
</body>
</html>