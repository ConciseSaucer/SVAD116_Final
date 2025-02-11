<?php
$name = $email = $phone = $gender = $comment = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $comment = htmlspecialchars($_POST['comment']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Survey Form</title>
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        .form-container {
            background: #1e1e1e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
            width: 50%;
            text-align: center;
        }
        input, select, textarea {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            background: #333;
            border: 1px solid #555;
            color: #fff;
            border-radius: 5px;
        }
        button {
            background-color: #6200ea;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .response {
            text-align: center;
            margin-top: 20px;
            background: #1e1e1e;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
            width: 50%;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>User Survey Form</h2>
        <form method="post" action="">
            <input type="text" name="name" placeholder="Your Name" required><br>
            <input type="email" name="email" placeholder="Your Email" required><br>
            <input type="tel" name="phone" placeholder="Your Phone Number" required><br>
            <select name="gender" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select><br>
            <textarea name="comment" placeholder="Your Comment" rows="5" required></textarea><br>
            <button type="submit">Submit</button>
        </form>
    </div>
    
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <div class="response">
        <h2>Thank you for your submission!</h2>
        <p><strong>Name:</strong> <?php echo $name; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Phone:</strong> <?php echo $phone; ?></p>
        <p><strong>Gender:</strong> <?php echo $gender; ?></p>
        <p><strong>Comment:</strong> <?php echo $comment; ?></p>
    </div>
    <?php endif; ?>
</body>
</html>

