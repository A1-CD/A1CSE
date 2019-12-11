<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>A1 Search Design concept Beta</title>
        <link rel="stylesheet" href="System/Assets/css/A1.min.css">
        <link rel="stylesheet" href="System/Assets/css/A1.css">

    </head>
    
    <body style="background-color:#474747;">
        <!-- partial:index.partial.html -->
        <div id="containter">
            <img src="System/Assets/images/logo.png" width="100px" height="100px"/>
            
            <form method="get" action="results.php">
                <div class="A1-div">
                    <input class="A1-input" type="text" name="Beta" id="Beta" placeholder="What are you searching for?" onEnter="send()" autocomplete="off" maxlength="60" required>
                    <input type="submit" id="search"/>
                </div>

            </form>
        </div>
        
        <div class="logo2">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
             width="700.000000pt" height="200.000000pt" viewBox="0 0 700.000000 200.000000"
             preserveAspectRatio="xMidYMid meet">

            <g transform="translate(0.000000,200.000000) scale(0.100000,-0.100000)"
            fill="#000000" stroke="none">
            <path d="M2227 1493 l-27 -4 2 -557 3 -557 365 -3 c449 -4 526 6 618 75 58 43
            76 94 77 208 0 107 -10 145 -53 204 -29 39 -105 77 -182 90 -30 5 -43 9 -29
            10 46 2 126 32 154 59 47 43 66 101 66 199 0 76 -4 94 -28 143 -25 48 -36 59
            -93 87 -36 18 -94 37 -130 43 -61 9 -683 12 -743 3z m665 -216 c44 -22 62 -62
            56 -122 -11 -92 -44 -105 -284 -112 l-184 -6 0 132 0 133 188 -4 c155 -3 193
            -6 224 -21z m25 -440 c43 -23 63 -64 63 -131 0 -44 -5 -60 -25 -84 -35 -42
            -92 -52 -300 -52 l-175 0 0 146 0 145 203 -3 c170 -2 207 -6 234 -21z"/>
            <path d="M3635 1472 c-64 -21 -139 -93 -154 -147 -15 -55 -15 -726 0 -780 7
            -25 29 -58 58 -86 73 -74 101 -79 446 -79 161 0 326 3 368 6 l77 7 0 66 c0 36
            -3 83 -6 103 l-7 38 -308 0 c-376 0 -349 -11 -349 145 l0 105 290 0 290 0 0
            100 0 100 -290 0 -290 0 0 88 c0 137 -28 126 343 130 l315 3 6 37 c3 20 6 67
            6 103 l0 66 -82 6 c-46 4 -213 7 -373 6 -242 0 -298 -3 -340 -17z"/>
            <path d="M4550 1370 l0 -110 220 0 220 0 0 -440 0 -440 140 0 140 0 0 440 0
            440 220 0 220 0 0 110 0 110 -580 0 -580 0 0 -110z"/>
            <path d="M6108 1453 c-15 -17 -83 -169 -168 -373 -78 -190 -172 -415 -207
            -500 -36 -85 -69 -165 -74 -177 l-9 -23 148 0 147 0 53 135 54 135 263 0 263
            0 54 -135 53 -135 148 0 147 0 -16 38 c-29 68 -235 564 -326 787 -51 123 -102
            232 -116 248 l-26 27 -181 0 -181 0 -26 -27z m237 -210 c3 -16 36 -102 72
            -193 36 -91 68 -171 70 -177 4 -10 -34 -13 -171 -13 -97 0 -176 2 -176 4 0 3
            34 90 75 194 41 104 75 194 75 201 0 6 11 11 24 11 18 0 26 -7 31 -27z"/>
            </g>
            </svg>
        </div>

        <div class="bottom-bar">
            <div class="build">
                <a>
                    Serial: ####-####-####-####
                </a>
            </div>
            
            <div class="conditions">
                <a href="#">My Account</a>
                <a href="#">Terms &amp; Conditions</a>
                <a href="#">Settings</a>
                <a href="#">About</a>
            </div>
        </div>

        <!-- partial -->
        <script src='System/Assets/js/jquery.min.js'></script>
        <script src="System/Assets/js/script.js"></script>

    </body>
</html>