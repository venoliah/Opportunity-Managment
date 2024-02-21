<!-- header_view.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Add other meta tags and links if needed -->
    <title>Your Page Title</title>
    <!-- Add other CSS links if needed -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom styles for navbar links -->
    <style>
    .navbar-nav .nav-link {
        color: #FF5722 !important; /* Deep Orange color */
    }
</style>


    <!-- Custom styles to fix the overlap issue -->
    <style>
        body {
            padding-top: 56px; /* Adjust the value based on your navigation bar's height */
        }

        .page-section {
            z-index: 1; /* Adjust the value as needed */
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
        <a class="navbar-brand" href="#page-top" style="font-weight: bold; color: #FF5722;">Fenono Solutions</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="http://localhost/OpportunityManagment/codeigniter/index.php/AdminDashboard_controller">Registered Users</a></li>
                    <li class="nav-item"><a class="nav-link" href="http://localhost/OpportunityManagment/codeigniter/index.php/AdminAccount_controller">Registered Accounts</a></li>
                    <li class="nav-item"><a class="nav-link" href="http://localhost/OpportunityManagment/codeigniter/index.php/AdminOpportunity_controller">Registered Opportunities</a></li>
                    <li class="nav-item"><a class="nav-link" href="http://localhost/OpportunityManagment/codeigniter/index.php/Charts_controller">Charts</a></li>
                    <li class="nav-item"><a class="nav-link" href="http://localhost/OpportunityManagment/codeigniter/index.php/AdminLogin_controller">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation Bar -->

    <!-- The rest of your HTML content will be added in your individual view files -->

    <!-- Add other JS scripts if needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
