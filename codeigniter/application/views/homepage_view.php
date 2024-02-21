<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Homepage</title>

    <style>
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

<?php
$this->load->view('header_view');
?>

<?php
    echo 'Welcome, ' . $this->session->userdata('user_email') . '!';
    ?>

<section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">At Your Service</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <img src="data:image/png;base64,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">
                            <h3 class="h4 mb-2">Seamless Opportunity Tracking</h3>
                            <p class="text-muted mb-0"> Effortlessly manage and track your opportunities from initiation to fruition. Our intuitive interface ensures that no opportunity slips through the cracks!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSr8j5AdVUiUOrL30HhGM5UU6PvtfexYqzUGA&usqp=CAU">
                            <h3 class="h4 mb-2">Customizable Workflow</h3>
                            <p class="text-muted mb-0">Tailor the system to match your unique processes. Whether you're a solo entrepreneur or a growing enterprise, Fenono Solutions adapts to your workflow, not the other way around.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfxBxo2rfHVOrfUbn7uFe9gXB1y04bY74TZQ&usqp=CAU">
                            <h3 class="h4 mb-2">Collaborative Environment</h3>
                            <p class="text-muted mb-0"> Foster collaboration among your team members. Share insights, updates, and strategies in real-time, enhancing collective decision-making and maximizing the potential of every opportunity.!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                                                        <img src="data:image/jpeg;base64,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">
                            <h3 class="h4 mb-2">Insightful Analytics</h3>
                            <p class="text-muted mb-0">Gain valuable insights into your opportunity landscape. Leverage analytics and reporting tools to make data-driven decisions, identify trends, and capitalize on emerging opportunities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

</body>
</html>
