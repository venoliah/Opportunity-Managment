<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Created Accounts</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <style>
        body {
            margin: 0;
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAD1BMVEXW6f/a6//e7f/i7//m8f+WxYWfAAAA/0lEQVR4nO3QNwEAIBAAsaf414yHW1gSCZlpVrOb09wmljhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx8vXkAS6siTqxOkQnAAAAAElFTkSuQmCC');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding: 0;
        }
    </style>
</head>

<body>

    <?php
    $this->load->view('header_view');
    ?>

    <br>
    <div class="container">
        <h2 class="text-center">User Accounts</h2>

        <?php if (!empty($accounts)): ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th> <!-- New column for numbering -->
                        <th>Account Name</th>
                        <th>Company Image</th>
                        <th>Action</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $counter = 1; ?>
                    <?php foreach ($accounts as $account): ?>
                        <tr>
                            <td><?php echo $counter++; ?></td>
                            <td><?php echo $account['account_name']; ?></td>
                            <td>
                                <?php if (isset($account['company_image']) && !empty($account['company_image'])): ?>
                                    <?php $imagePath = FCPATH . $account['company_image']; ?>
                                    <?php if (file_exists($imagePath)): ?>
                                        <?php $imageUrl = base_url($account['company_image']); ?>
                                        <img src="<?php echo $imageUrl; ?>" alt="Company Image" style="max-width: 100px; max-height: 100px;">
                                    <?php else: ?>
                                        <p>No image file found</p>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <p>No image found</p>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo base_url('openedaccount_controller/viewAccount/' . $account['account_name']); ?>" class="btn btn-info">View Opportunities</a>
                            </td>
                            <td>
                                <a href="<?php echo base_url('edit_controller/editAccount/' . $account['account_name']); ?>" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                                <a href="<?php echo base_url('delete_controller/deleteAccount/' . $account['account_name']); ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <!-- Button to add a new account -->
            <a href="<?php echo base_url('testing_controller/newAccount'); ?>" class="btn btn-primary">Add New Account</a>

        <?php else: ?>
            <p>No accounts available. Add an account to get started.</p>
            <a href="<?php echo base_url('testing_controller/newAccount'); ?>" class="btn btn-primary">Add New Account</a>

        <?php endif; ?>
    </div>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>
