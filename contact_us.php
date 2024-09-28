<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }
        .contact-section {
            background-color: #fff;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
        .contact-section h2 {
            margin-bottom: 20px;
            color: #007bff;
        }
        .form-group label {
            font-weight: bold;
            color:black
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .row {
            background: url('images/contact.jpg') no-repeat center center;
            background-size: cover;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
            color: white;
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <?php include 'navbar.php'; ?>

    <div class="container" style="margin-top:7%">
        <div class="contact-section">
            <h2>Contact Us</h2>
            <p>If you have any suggestions or queries, feel free to contact us at <a href="mailto:nutriredemeanour@gmail.com">nutriredemeneour@gmail.com</a>. Alternatively, you can fill out the form below, and we will get back to you as soon as possible.</p>
            <div class="row" >
                
            <div class="col-md-5"> 
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Enter your message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form></div>
            <div class="col"></div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer mt-5">
        <div class="container text-center">
            <p class="m-0">© 2024 Nutrire Demeanour. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
