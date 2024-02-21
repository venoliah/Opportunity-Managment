<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opportunity</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
           
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
        <h2 class="mb-4">Create a New Opportunity</h2>

        <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

        <?php echo form_open(base_url('opportunity_controller/add_opportunity'), 'class="needs-validation"'); ?>

        <div class="form-group">
            <label for="opportunity_name">Opportunity Name:</label>
            <input type="text" class="form-control" name="opportunity_name" required>
        </div>

        <div class="form-group">
            <label for="amount">Amount:</label>
            <input type="text" class="form-control" name="amount" required>
        </div>

        <div class="form-group">
            <label for="account">Account:</label>
            <select class="form-control" name="account" required>
                <?php foreach ($account_options as $account_option): ?>
                    <option value="<?php echo $account_option['account_name']; ?>"><?php echo $account_option['account_name']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="date_created">Date Created:</label>
            <input type="date" class="form-control" name="date_created" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="<?php echo base_url('opportunity_controller'); ?>" class="btn btn-secondary">Exit</a>

        <?php echo form_close(); ?>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
