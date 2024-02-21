<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Account View</title>
</head>
<body>

<?php if (!empty($accounts)): ?>
    <h2>User Account Names:</h2>
    <ul>
        <?php foreach ($accounts as $account): ?>
            <li><a href="<?php echo base_url('testimage_controller/account_page/' . urlencode($account['account_name'])); ?>"><?php echo $account['account_name']; ?></a></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No account names found for the user.</p>
<?php endif; ?>

</body>
</html>
