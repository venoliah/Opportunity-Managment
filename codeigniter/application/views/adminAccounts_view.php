<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Accounts</title>
    <!-- Use the Bootstrap version 3.4.1 CDN link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <style>
        table {
            font-size: 14px; /* Adjust the font size to your preference */
        }

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

<?php $this->load->view('adminheader_view'); ?>

<div class="container">
    <h1>Admin Accounts</h1>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th> <!-- New column for numbering -->
                <th>Account Name</th>
                <th>Address</th>
                <th>General Area</th>
                <th>Company Image</th>
                <th>User Email</th>
                <th>Action</th> <!-- Added a new column for action buttons -->
            </tr>
        </thead>
        <tbody>
            <?php $counter = 1; ?>
            <?php foreach ($account_data as $account): ?>
                <tr>
                    <td><?= $counter++ ?></td>
                    <td><?= $account->account_name ?></td>
                    <td><?= $account->address ?></td>
                    <td><?= $account->general_area ?></td>
                    <td><?= $account->company_image ?></td>
                    <td><?= $account->user_email ?></td>
                    <td>
                        <a href="<?= base_url('admin/edit/' . $account->id); ?>" class="btn btn-primary">Edit</a>
                        <a href="<?= base_url('admin/delete/' . $account->id); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this account?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Include jQuery and Bootstrap JavaScript at the end of the body -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>
