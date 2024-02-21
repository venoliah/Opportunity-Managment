<!-- application/views/forgotpassword_view.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
            background-color: #fff; /* White background */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
        <h2 class="text-center">Forgot Password</h2>
        <?php echo @$message; ?>
        <form method="post" action="<?php echo base_url('forgotpassword_controller/reset_password'); ?>">
            <div class="form-group">
                <label for="email">Enter your Email ID:</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email ID" required>
            </div>
            <input type="submit" name="reset" class="btn btn-success btn-block" value="Reset Password">
        </form>
    </div>
</body>
</html>
