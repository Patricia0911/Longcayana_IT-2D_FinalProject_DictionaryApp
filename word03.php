<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mischievous</title>
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
        <h1 class="fw-bold">Mischievous</h1>
    </div>
    <div class="container ">
        <div class="p-5 d-flex p-2 justify-content-center text-left">
            <div class="row">

                <?php
                    echo "Behaving in a way, or describing behaviour, that is slightly bad but is not intended to cause serious harm or damage. <br>";
                    echo "Causing or likely to cause minor injury or harm a mischievous puppy <br>";
                    echo "(of a person, animal, or their behavior) causing or showing a fondness for causing trouble in a playful way. <br>";             
                     
                ?>

            </div>
        </div>
    </div>

</body>

</html>

</html>