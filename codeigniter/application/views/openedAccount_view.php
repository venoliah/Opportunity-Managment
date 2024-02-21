<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Page: <?php echo isset($accountDetails['account_name']) ? $accountDetails['account_name'] : ''; ?></title>

    <!-- Add Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
         body {
            margin: 0;
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAD1BMVEXW6f/a6//e7f/i7//m8f+WxYWfAAAA/0lEQVR4nO3QNwEAIBAAsaf414yHW1gSCZlpVrOb09wmljhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx8vXkAS6siTqxOkQnAAAAAElFTkSuQmCC');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; 
            padding: 0; 
        }
    </style>
</head>
<body>
    <?php $this->load->view('header_view'); ?>
    <br>
    <div class="container text-center">
        <h3>Opportunities for Account: <?php echo isset($accountDetails['account_name']) ? $accountDetails['account_name'] : ''; ?></h3>
    </div>
    <br>

    <?php if (!empty($opportunities)): ?>
        <div class="container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th> <!-- New column for numbering -->
                        <th>Opportunity Name</th>
                        <th>Amount</th>
                        <th>Date Created</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $counter = 1; ?>
                    <?php foreach ($opportunities as $opportunity): ?>
                        <tr>
                            <td><?php echo $counter++; ?></td>
                            <td><?php echo $opportunity['opportunity_name']; ?></td>
                            <td><?php echo $opportunity['amount']; ?></td>
                            <td><?php echo $opportunity['date_created']; ?></td>
                            <td>
                                <a href="<?php echo base_url('opportunity_controller/edit_opportunity'); ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="<?php echo base_url('opportunity_controller/delete_opportunity'); ?>" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?php echo base_url('opportunity_controller'); ?>" class="btn btn-primary">Add New Opportunity</a>
        </div>
    <?php else: ?>
        <p>No opportunities for this account.</p>
    <?php endif; ?>

    <!-- Add Bootstrap JS and Popper.js if needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
