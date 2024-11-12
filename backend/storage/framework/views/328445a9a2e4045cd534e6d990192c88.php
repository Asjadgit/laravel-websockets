<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .contact-form {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }
        .contact-form h2 {
            margin-bottom: 20px;
            color: #343a40;
            font-weight: 700;
            text-align: center;
        }
        .contact-form .form-control {
            border-radius: 6px;
            border: 1px solid #ced4da;
            padding: 10px 15px;
            font-size: 16px;
        }
        .contact-form .form-control:focus {
            box-shadow: none;
            border-color: #007bff;
        }
        .contact-form .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 6px;
        }
        .contact-form .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="contact-form">
            <h2>Contact Us</h2>
            <form action="<?php echo e(route('contact.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Enter your Name" required>
                </div>
                <div class="mb-3">
                    <input type="email" name="mail" class="form-control" placeholder="Enter your Email" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="subject" class="form-control" placeholder="Enter Subject" required>
                </div>
                <div class="mb-3">
                    <textarea name="message" class="form-control" placeholder="Enter your Message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Send Message</button>
            </form>
        </div>
    </div>

    <!-- Include Bootstrap JS and dependencies (optional) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH E:\React_laravel\TestingWebSocket\backend\resources\views/contact.blade.php ENDPATH**/ ?>