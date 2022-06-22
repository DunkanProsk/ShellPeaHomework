<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/styles.css">
    <title>Task_9</title>
</head>
<body>
    <form action="/index.html">
        <button>Back</button>
    </form>
    
   <form class="element" method="POST" action="task9_logic.php" enctype="multipart/form-data">
        <input type="number" name="a" placeholder="Enter A side (cm)">
        <input type="number" name="b" placeholder="Enter B side (cm)">
        <input type="number" name="c" placeholder="Enter C side (cm)">
        <button type="submit">Send</button>
    </form>
</body>
</html>