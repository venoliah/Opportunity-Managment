<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Account</title>
    <!-- Use the Bootstrap version 3.4.1 CDN link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<?php $this->load->view('adminheader_view'); ?>

<div class="container">
    <h1>Edit Account</h1>

    <?php if(isset($account)): ?>
        <form action="<?= base_url('admin/update/' . $account->id); ?>" method="post">
            <div class="form-group">
                <label for="account_name">Account Name:</label>
                <input type="text" class="form-control" id="account_name" name="account_name" value="<?= $account->account_name ?>" required>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" value="<?= $account->address ?>" required>
            </div>

            <div class="form-group">
                <label for="general_area">General Area:</label>
                <input type="text" class="form-control" id="general_area" name="general_area" value="<?= $account->general_area ?>" required>
            </div>

            <div class="form-group">
                <label for="company_image">Company Image:</label>
                <input type="text" class="form-control" id="company_image" name="company_image" value="<?= $account->company_image ?>" required>
            </div>

            <div class="form-group">
                <label for="user_email">User Email:</label>
                <input type="email" class="form-control" id="user_email" name="user_email" value="<?= $account->user_email ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    <?php else: ?>
        <p>Account not found.</p>
    <?php endif; ?>
</div>

<!-- Include jQuery and Bootstrap JavaScript at the end of the body -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>
