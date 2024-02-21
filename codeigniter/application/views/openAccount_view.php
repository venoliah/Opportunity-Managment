<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Page</title>
</head>
<body>
    <h2>Opportunities for Account: <?php echo $account_name; ?></h2>

    <?php if (!empty($opportunities)): ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Opportunity Name</th>
                    <th>Amount</th>
                    <th>Date Created</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($opportunities as $opportunity): ?>
                    <tr>
                        <td><a href="<?php echo base_url('opportunity_controller/opportunity_page/' . $opportunity['opportunity_name']); ?>"><?php echo $opportunity['opportunity_name']; ?></a></td>
                        <td><?php echo $opportunity['amount']; ?></td>
                        <td><?php echo $opportunity['date_created']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No opportunities for this account.</p>
    <?php endif; ?>

    <br>
    <a href="<?php echo base_url('opportunity_controller'); ?>" class="btn btn-primary">Add New Opportunity</a>
</body>
</html>
