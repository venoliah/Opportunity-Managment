<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

   <style>
     body {
            
            margin: 0;
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAD1BMVEXW6f/a6//e7f/i7//m8f+WxYWfAAAA/0lEQVR4nO3QNwEAIBAAsaf414yHW1gSCZlpVrOb09wmljhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx8vXkAS6siTqxOkQnAAAAAElFTkSuQmCC');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; 
            padding: 0; 
        }
   </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Create a New Account</h2>
        <form action="<?php echo base_url('testing_controller/newAccount'); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="account_name">Account Name:</label>
                <input type="text" class="form-control" name="account_name" id="account_name" placeholder="i.e Safaricom" required>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="Nairobi, Kenya" required>
            </div>

            <div class="form-group">
                <label for="general_area">General Area:</label>
                <input type="text" class="form-control" name="general_area" id="general_area" placeholder="i.e Kitengela" required>
            </div>

            <div class="form-group">
                <label for="company_image">Company Image:</label>
                <input type="file" class="form-control-file" name="company_image" id="company_image">
            </div>

            <div class="form-group">
                <label for="user_email">Your Email:</label>
                <input type="text" class="form-control" name="user_email" id="user_email" placeholder="Your email" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="addAccount">Submit</button>
                <a href="<?php echo base_url('opportunity_controller'); ?>" class="btn btn-secondary">Exit</a>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS and jQuery (optional) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
