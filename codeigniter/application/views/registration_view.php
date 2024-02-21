<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../../users/registration_login.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAD1BMVEXW6f/a6//e7f/i7//m8f+WxYWfAAAA/0lEQVR4nO3QNwEAIBAAsaf414yHW1gSCZlpVrOb09wmljhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx8vXkAS6siTqxOkQnAAAAAElFTkSuQmCC');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; 
            padding: 0; 
             
        }

        .container {
            width: 40%;
        }

        .btn-success {
            background-color: #FF8C00; /* Deep Orange color */
            border-color: #FF8C00;
        }

        .btn-success:hover,
        .btn-success:focus {
            background-color: #FF4500; /* Darker shade on hover or focus */
            border-color: #FF4500;
        }
    </style>
</head>
<body>

<div class="container"> 
    <h2 class="text-center">Registration Form</h2>
    <?php echo @$message; ?>
    <form method="post" enctype="multipart/formdata">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Email ID">
        </div>

        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="text" class="form-control" name="password" placeholder="Enter Password">
        </div>

        <input type="submit" name="register" class="btn btn-success btn-block" value="Register"/>
    </form>
<br>
    <p class="text-center">Already registered? <a href="http://localhost/OpportunityManagment/codeigniter/index.php/Login_controller">Login</a></p>
</div>

</body>
</html>
