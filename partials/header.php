<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name ="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="./css/bs/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="./css/typography.css" />
        <link rel="stylesheet" href="./css/colours.css" />
        <link rel="stylesheet" href="./css/questionnaire.css" />
        <link rel="stylesheet" href="./css/header.css" />
        <link rel="stylesheet" href="./css/footer.css" />
        <link rel="stylesheet" href="./css/core.css" />
        
        <script src="./scripts/bs/bootstrap.bundle.min.js"></script>
        <script src="./scripts/jquery.js"></script>
    </head>
    
    <body>
        <header id="header">
            <div class="container">
                <div class="logo" onclick="window.location.href='./index.php'">
                </div>
                <span id="mobileNavOpen" onclick="mobileNavOpen()">&#9776;</span>
                <ul class="nav" id="nav">
                    <a id="mobileNavClose" onclick="mobileNavClose()">&times;</a>
                    <li class="nav-item">
                        <a class="nav-heading">About</a>
                        <ul class="dropdown">
                            <li onclick="window.location.href='./procedures.php'"><a>Procedures</a></li>
                            <li onclick="window.location.href='./hospital.php'"><a>The Hospital</a></li>
                            <li onclick="window.location.href='./meet-dr.php'"><a>Meet Dr. Smith</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-heading">Resources</a>
                        <ul class="dropdown">
                            <li onclick="window.location.href='./patient-stories.php'"><a>Patient Stories</a></li>
                            <li onclick="window.location.href='./under-construction.php'"><a>Pre- and Post-op Resources</a></li>
                            <li onclick="window.location.href='./under-construction.php'"><a>Video Gallery</a></li>
                            <li onclick="window.location.href='./under-construction.php'"><a>Blog</a></li>
                        </ul>
                    </li>
                    <li class="nav-item" onclick="window.location.href='./start-here.php'"><a class="nav-heading" style="cursor: pointer">Start Here</a></li>
                </ul>
            </div>
        </header>
        <script src="./scripts/app.js"></script>
        <script>
        function mobileNavOpen() {
          document.getElementById("nav").style.width = "100%";
        }

        function mobileNavClose() {
          document.getElementById("nav").style.width = "0";
        }
        </script>