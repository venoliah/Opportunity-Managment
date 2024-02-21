<?php
if ($this->session->userdata('user_email')) {
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accounts</title>
        <link rel="stylesheet" href="../../../users/navbar.css">
    
    </head>
    <body>
    <!--Header content section----------------------------------------->
    
    <header>
            <nav>
    
                <ul class="a">
                    <li> <a href="#Dashboard">Dashboard</a></li>
                    <li> <a href="#Accounts">Accounts</a></li>
                    <li> <a href="#Opportunities">Opportunities</a></li>
                    <li> <a href="#Admin">Admin</a></li>
                </ul>

                <ul class="b">
                    <li>
                    <?php
if ($this->session->userdata('user_email')) {
    echo 'Welcome, ' . $this->session->userdata('user_email') . '!';
} else {
    echo 'Session has not started.';
}
?>
                    </li>
                </ul>
            </nav>
        </header>
    
    <!--Main content section-------------------------------------------->
    <main>
    <header>
            <nav>
    
            <ul class="a">
    <li><a href="<?php echo base_url('accounts_controller/existingAccounts'); ?>">Existing Accounts</a></li>
    <li><a href="<?php echo base_url('accounts_controller/newAccount'); ?>">Add New Account</a></li>
    <li><a href="#Search">Search</a></li>
</ul>

            </nav>
        </header>
  
    </main>
        
    </body>
    </html>



    
<?php
} else {
    redirect('http://localhost/OpportunityManagment/codeigniter/index.php/login');
}
?>
