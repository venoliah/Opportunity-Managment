<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Opportunities</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <style>
         body { 
            margin: 0;
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAD1BMVEXW6f/a6//e7f/i7//m8f+WxYWfAAAA/0lEQVR4nO3QNwEAIBAAsaf414yHW1gSCZlpVrOb09wmljhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx4sSJEydOnDhx8vXkAS6siTqxOkQnAAAAAElFTkSuQmCC');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed; 
            padding: 0; 
        }
    </style>
</head>
<body>
<?php
$this->load->view('adminheader_view');
?>
    <div class="container mt-5">
        <h2>Admin Opportunities</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th> <!-- New column for numbering -->
                    <th>Opportunity Name</th>
                    <th>Amount</th>
                    <th>Account Name</th>
                    <th>Date Created</th>
                    <th>Action</th> <!-- Added a new column for action buttons -->
                </tr>
            </thead>
            <tbody>
                <?php $counter = 1; ?>
                <?php foreach ($opportunities as $opportunity): ?>
                    <tr>
                        <td><?php echo $counter++; ?></td>
                        <td><?php echo $opportunity['opportunity_name']; ?></td>
                        <td><?php echo $opportunity['amount']; ?></td>
                        <td><?php echo $opportunity['account_name']; ?></td>
                        <td><?php echo $opportunity['date_created']; ?></td>
                        <td>
                            <a href="<?= base_url('admin/edit_opportunity/' . $opportunity['id']); ?>" class="btn btn-primary">Edit</a>
                            <a href="<?= base_url('admin/delete_opportunity/' . $opportunity['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this opportunity?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
