<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <style>
       body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            width: 30rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
 
        label {
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 10px;
            border: 1px solid #ccc;
            width: 70%;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
 
        button[type="submit"]:hover {
            background-color: green;
        }
        h1{
            text-align: center;
            margin-bottom: 20px;
            margin-top: auto;
            font-weight: 300;
        }
            
    </style>
</head>
<body>
    <form action="articles.php" method="POST">
        <h1>Sign Up</h1>
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Sign Up</button>

        <p>Already have an account? <a href="login.php">Login</a></p>
    </form>
</body>
</html>