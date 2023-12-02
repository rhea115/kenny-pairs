<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            background-image: url("images/sign-in-bg.jpg");
            background-attachment: fixed;
        }
        

        .welcome-container {
            text-align: center;
            padding: 20px;
            background-color: light white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgb(255, 179, 102);
        }

        h1 {
            color: white;
            margin-bottom: 20px;
        }
        .p{
            color: white
            margin-bottom: 10px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #B68D52;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color:  #B68D52;
            box-shadow: 0 0 10px rgb(255, 179, 102);
        }
    </style>
</head>
<body>

<div class="welcome-container">
    <h1>Welcome to Kenny Pair!</h1>
    <p>A jewelry store in the Philippines, where every hour is golden hour. </p>
    <button onclick="redirectToNextPage()">Continue</button>
</div>

<script>
    function redirectToNextPage() {
        // You can set the URL to the page you want the "Continue" button to navigate to.
        window.location.href = 'index.php';
    }
</script>

</body>
</html>
