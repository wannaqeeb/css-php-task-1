<?php
// Door 1 story content
$title = "The Candy Castle";
$story = "You open the door and step into a world made of candy! There’s a chocolate river, lollipop trees, and marshmallow clouds. The Candy King welcomes you and invites you to eat as much candy as you want. It’s the sweetest adventure ever!";

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
                text-shadow: 0 0 5px #ff69b4, 0 0 10px #ff69b4, 0 0 20px #ff1493, 0 0 30px #ff1493, 0 0 40px #ff69b4;
            }
            50% {
                text-shadow: 0 0 10px #ff1493, 0 0 20px #ff69b4, 0 0 30px #ff69b4, 0 0 40px #ff1493;
            }
            100% {
                text-shadow: 0 0 5px #ff69b4, 0 0 10px #ff69b4, 0 0 20px #ff1493, 0 0 30px #ff1493, 0 0 40px #ff69b4;
            }
        }

        body {
            font-family: "Comic Sans MS", sans-serif;
            background-image: url(candy.png);
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
            padding: 20px;
        }
        h1 {
            color: #d2691e;
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
            background-color: #ff4500;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .back-button:hover {
            background-color: #dc143c;
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
