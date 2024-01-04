<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }

        #container {
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .section {
            flex: 1;
            box-sizing: border-box;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            opacity: 0; 
            transition: opacity 0.5s ease-in-out;
        }

        #section1:hover,
        #section2:hover
        {
            opacity: 1; 
        }

        #section1 { background-color: #87CEEB; }
        #section2 { background-color: #98FB98; }
        
        /* Add more sections as needed */
    </style>
</head>
<body>
    <div id="container">
        <div id="section1" class="section">Section 1</div>
        <div id="section2" class="section">Section 2</div>
        
    </div>
</body>
</html>
