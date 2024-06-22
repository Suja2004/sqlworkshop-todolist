<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Website</title>
    <style>
        body{
            justify-content:center;
            align-items: center;
            display:flex;
            background-image:linear-gradient(to right, #375BDC, pink);
            background-repeat: no-repeat; 
           
            background-size: cover;
            height:100vh;
        }
        form{
            border-radius: 5px;
            width:100%;
            height:100%;
            background-color:#FDFFE2;
            color:black;
            padding:30px;
            align-items:center;
            justify-content:center;
        }
        input{
            background-color:white;
            width:400px;
            height:50px;
            border:antiquewhite;
            
        }
        label{
            font-weight:bold;
            margin-left:100px;
            font-size:25px;
            color:#1A2130;
        }
        h1{
            color:#1A2130;
        }
        button{
            background-color:#102C57;
            color:white;
            font-weight:bold;
            font-size:15px;
            border-radius:12px;
            padding:10px;
        }
#sub{
    background-color:#102C57;
            color:white;
            width:100px;
            font-weight:bold;
            font-size:15px;
            border-radius:12px;
            padding:5px;
}
    </style>
</head>
<body>
<div class="main">
    <h1>To-Do List</h1>
    <form action="create.php" method="POST">
        <input type="text" name="task" placeholder="New Task" required>
        <button type="submit">Add Task</button>
    </form>

    <h2>Tasks</h2>
    <?php include 'read.php'; ?>
    </div>
</body>
</html>

</html>
