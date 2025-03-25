<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Quote</title>
    <style>
        body { 
            text-align: center; 
            font-family: Arial, sans-serif; 
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url("{{ $backgroundImage }}") no-repeat center center fixed;
            background-size: cover;
            color: white;
        }
        .quote-box { 
            padding: 20px; 
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            width: 60%;
        }
    </style>
</head>
<body>
    <div class="quote-box">
        <h2>"{{ $quote }}"</h2>
        <p>- {{ $author }}</p>
    </div>
</body>
</html>
