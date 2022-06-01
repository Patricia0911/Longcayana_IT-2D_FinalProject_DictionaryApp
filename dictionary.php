<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dictionary</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
</head>

<header class="mb-auto p-3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top">TrishDictionary</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-light" href="index.php">HOME</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="dictionary.php">DICTIONARY</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="about.php">ABOUT</a></li>
                        <li class="nav-item"><a class="nav-link text-light" href="contact.php">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
            
</header>

<body class="background">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        

        <div class="container"><br><br>

            <table class="table table-sm table-striped table-condensed" style="margin-top:20px;">
                <thead class="table-dark">
                    <th scope="col">Number</th>
                    <th scope="col">Word</th>
                    <th scope="col"></th>
                </thead>
                <tbody>
                        <tr>
                            <td>01</td>
                            <td>Onomatopoeia</td>
                            <td>
                                <a class="btn btn-dark btn-sm float-end" href="word01.php" role="button">See Meaning</a>
                            </td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Worcestershire</td>
                            <td>
                                <a class="btn btn-dark btn-sm float-end" href="word02.php" role="button">See Meaning</a>
                            </td>
                        </tr>
                        

                </tbody>
                <tfoot>
                    <th scope="col">Number</th>
                    <th scope="col">Word</th>
                    <th scope="col"></th>                        
                </tfoot>
            </table>

        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>

</html>