<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - State Information</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-dark-blue {
            background-color: #002147;
            color: white;
        }
        .bg-light-blue {
            background-color: #e6f0ff;
        }
        .bg-light-gray {
            background-color: #f8f9fa;
        }
        .bg-light-green {
            background-color: #e6ffe6;
        }
        .section-header {
            padding: 20px;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Contact Us</h1>

        <!-- General Inquiries Section -->
        <div class="card mb-4 bg-light-gray">
            <div class="card-header section-header">
                <h2>General Inquiries</h2>
            </div>
            <div class="card-body">
                <p><strong>Phone:</strong> 1-800-Nomadic Nooks (1-800-782-8346)</p>
                <p><strong>Email:</strong> <a href="mailto:nomadic@nooks.gov">info@stateinfo.gov</a></p>
                <p><strong>Mailing Address:</strong></p>
                <address>
                    Nomadic nooks Center<br>
                    123 Capitol Ave<br>
                    City, State, ZIP Code
                </address>
            </div>
        </div>

        <!-- Specific Departments Section -->
        <div class="accordion" id="departmentAccordion">
            <div class="card bg-light-blue">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            our main office
                        </button>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#departmentAccordion">
                    <div class="card-body">
                        <p><strong>Phone:</strong> 1-800-GOV-OFFICE (1-800-468-6334)</p>
                        <p><strong>Email:</strong> <a href="mailto:governor@stateinfo.gov">nomadicnooks@stateinfo.gov</a></p>
                    </div>
                </div>
            </div>

            <!-- Repeat for other departments -->
            <!-- Health Services -->


            <!-- Add more departments as needed -->
        </div>

        <!-- Online Contact Form -->
        <div class="card my-4 bg-light-green">
            <div class="card-header section-header">
                <h2>Online Contact Form</h2>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <!-- Social Media Section -->
        <div class="card my-4 bg-light-blue">
            <div class="card-header section-header">
                <h2>Social Media</h2>
            </div>
            <div class="card-body">
                <p>Stay connected with us through our social media channels:</p>
                <ul class="list-unstyled">
                    <li><a href="https://www.facebook.com/StateInformation" target="_blank">Facebook</a></li>
                    <li><a href="https://twitter.com/StateInfo" target="_blank">Twitter</a></li>
                    <li><a href="https://instagram.com/StateInfo" target="_blank">Instagram</a></li>
                    <li><a href="https://linkedin.com/company/StateInformation" target="_blank">LinkedIn</a></li>
                </ul>
            </div>
        </div>

        <!-- Office Hours Section -->
        <div class="card my-4 bg-light-gray">
            <div class="card-header section-header">
                <h2>Office Hours</h2>
            </div>
            <div class="card-body">
                <p><strong>Monday - Friday:</strong> 9:00 AM - 5:00 PM</p>
                <p><strong>Saturday:</strong> 10:00 AM - 2:00 PM</p>
                <p><strong>Sunday:</strong> Closed</p>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="card my-4 bg-light-green">
            <div class="card-header section-header">
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="card-body">
                <p>Find answers to common questions on our <a href="#" target="_blank">FAQ page</a>.</p>
            </div>
        </div>

        <!-- Emergency Contacts Section -->
       

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <a href="index.php">BACK TO OUR OFFICIAL PAGE </a>
</body>
</html>