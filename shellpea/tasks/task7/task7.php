<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/styles.css">
    <title>Task_7</title>
</head>
<body>
    <form action="/index.html">
        <button>Back</button>
    </form>
    
   <form class="element" method="POST" action="task7_logic.php" enctype="multipart/form-data">
        <input type="number" name="circle" placeholder="Enter circle area(cm²)">
        <input type="number" name="square" placeholder="Enter square area(cm²)">
        <button type="submit">Send</button>
    </form>
</body>
</html>