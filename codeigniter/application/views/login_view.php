<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAD1BMVEXW6f/a6//e7f/i7//m8f+WxYWfAAAA/0lEQVR4nO3QNwEAIBAAsaf414yHW1gSCZlpVrOb09wmljhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx8vXkAS6siTqxOkQnAAAAAElFTkSuQmCC');
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
    <h2 class="text-center">Login Form</h2>
    <?php echo @$message; ?>
    <form method="post" enctype="multipart/formdata">
        <div class="form-group">
            <label for="username">Enter Email ID or Contact Number:</label>
            <input type="text" class="form-control" name="username" placeholder="Enter Email ID">
        </div>

        <div class="form-group">
            <label for="password">Enter Password:</label>
            <input type="password" class="form-control" name="password" placeholder="Enter Password">
        </div>

        <input type="submit" name="login" class="btn btn-success btn-block" value="Login"/>
    </form>
<br>
    <p class="text-center">Not Registered? <a href="http://localhost/OpportunityManagment/codeigniter/index.php/Register_controller">Register</a></p><br>
    <p class="text-center">Forgot Password?<a href="<?php echo base_url('forgotpassword_controller'); ?>"> Reset</a>
</p>
</div>

</body>
</html>
