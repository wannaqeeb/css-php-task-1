<?php
// Door 3 story content
$title = "The Pirate’s Treasure";
$story = "You step onto a sandy beach where a pirate ship awaits. Captain Patches gives you a treasure map and together you dig up a chest full of sparkling gold and gems. You’re a pirate hero now!";

// Output the entire page
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>' . htmlspecialchars($title, ENT_QUOTES, "UTF-8") . '</title>
    <style>
        @keyframes text-glow {
            0% {
                text-shadow: 0 0 5px #f4d03f, 0 0 10px #f4d03f, 0 0 20px #f4d03f, 0 0 30px #e67e22, 0 0 40px #e67e22;
            }
            50% {
                text-shadow: 0 0 10px #e67e22, 0 0 20px #e67e22, 0 0 30px #d35400, 0 0 40px #d35400;
            }
            100% {
                text-shadow: 0 0 5px rgb(255, 225, 107), 0 0 10pxrgb(240, 208, 76), 0 0 20pxrgb(255, 222, 89), 0 0 30pxrgb(255, 161, 80), 0 0 40px #e67e22;
            }
        }

        body {
            font-family: "Comic Sans MS", sans-serif;
            background-image: url(pirates.png);
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
            padding: 20px;
        }
        h1 {
            color: #daa520;
            font-size: 3em;
            animation: text-glow 2s infinite;
        }
        .story {
            margin-top: 20px;
            font-size: 1.2em;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .back-button {
            margin-top: 40px;
            padding: 10px 20px;
            background-color: #8b4513;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .back-button:hover {
            background-color: #5d3317;
        }
    </style>
</head>
<body>
    <h1>' . htmlspecialchars($title, ENT_QUOTES, "UTF-8") . '</h1>
    <div class="story">
        <p>' . htmlspecialchars($story, ENT_QUOTES, "UTF-8") . '</p>
    </div>
    <a href="index.html" class="back-button">Back to Start</a>
</body>
</html>';
?>