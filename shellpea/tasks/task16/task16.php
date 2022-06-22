<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/styles.css">
    <title>Task_16</title>
</head>
<body>
    <form action="/index.html">
        <button>Back</button>
    </form>
    
    <form class="element" method="POST" action="task16_logic.php" enctype="multipart/form-data">
        <input type="number" name="length" placeholder="Enter fabric length (m)">
        <input type="number" name="piece" placeholder="Enter how much cut off (m)">
        <input type="number" name="amount" placeholder="Enter how many pieces you need">
        <button type="submit">Cut off</button>
    </form>
</body>
</html>