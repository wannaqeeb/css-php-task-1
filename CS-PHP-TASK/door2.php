<?php
// Door 2 story content
$title = "The Talking Animal Forest";
$story = "You enter a magical forest where animals can talk! A wise owl greets you and introduces you to the other animals. The squirrels offer you nuts, and the rabbits invite you to a hopping race. It’s a day full of fun and new friends!";

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
                text-shadow: 0 0 5px #7fff00, 0 0 10px #7fff00, 0 0 20px #32cd32, 0 0 30px #32cd32, 0 0 40px #7fff00;
            }
            50% {
                text-shadow: 0 0 10px #32cd32, 0 0 20px #7fff00, 0 0 30px #7fff00, 0 0 40px #32cd32;
            }
            100% {
                text-shadow: 0 0 5px #7fff00, 0 0 10px #7fff00, 0 0 20px #32cd32, 0 0 30px #32cd32, 0 0 40px #7fff00;
            }
        }

        body {
            font-family: "Comic Sans MS", sans-serif;
            background-image: url(jungle.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
            padding: 20px;
        }
        h1 {
            color: #228b22;
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
            background-color: #228b22;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .back-button:hover {
            background-color: #006400;
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
