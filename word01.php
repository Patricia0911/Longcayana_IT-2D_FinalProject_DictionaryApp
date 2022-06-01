<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Riddle1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

    body {
        animation: fadeInPage ease 1.5s;
        /* fade page in */
        animation-iteration-count: 1;
        /* fade page in */
        animation-fill-mode: forwards;
        /* fade page in */
        background-color: lightseagreen;
        font-family: 'Montserrat', sans-serif;
        color: #fef9d5;
        margin: 0;
    }
    </style>
</head>

<body>
    <div class="position-absolute top-0 start-0">
        <input class="btn btn-primary fw-bold" type="button" value="Back" onclick="history.back()">
    </div><br><br><br>
    <div class="p-3 text-center">
        <h1 class="fw-bold">Onomatopoeia</h1>
    </div>
    <div class="container ">
        <div class="p-5 d-flex p-2 justify-content-center text-left">
            <div class="row">

                <?php
                    echo "An onomatopoeia is a word that sounds like the noise it describes. The spelling and pronunciation of that word is directly influenced by the sound it defines in real life. All onomatopoeia words describe specific sounds. <br>";
                    echo "An onomatopoeia is a word that smacks the reader’s ears and makes them pop. Onomatopoeia words describe sounds by copying the sound itself. <br>";
                    echo "An onomatopoeia is the forming of a word by imitating the sound the word is referring to, as in bang, meaning “a loud, explosive sound,” and meow, meaning “the sound a cat makes.” <br>";             

                                        
                ?>

            </div>
        </div>
    </div>

</body>

</html>

</html>