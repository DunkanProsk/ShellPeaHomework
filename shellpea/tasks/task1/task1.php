<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/styles.css">
    <title>Task_1</title>
</head>
<body>
    <form action="/index.html">
        <button>Back</button>
    </form>
    
    <form class="element" method="POST" action="task1_logic.php" enctype="multipart/form-data">
        <input type="number" name="first" placeholder="First number">
        <input type="number" name="second" placeholder="Second number">
        <button type="submit">Send</button>
    </form>
</body>
</html>