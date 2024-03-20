<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        body {
            background-color: rgba(136, 196, 250, 255);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            display: flex;
            max-width: 800px;
            background-color: #f9f9f9;
            border-radius: 5px;
            overflow: hidden;
        }
        .form-container {
            flex: 1; 
            padding: 20px;
        }
        .image-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .image-container img {
            max-width: 100%; 
            max-height: 100%; 
        }
        .form-group {
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Fill the form below</h2>
            <p>Complete the below form to get instant access</p>
            <hr>
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" id="company" name="company" placeholder="Company name" required>
                </div>
                <div class="form-group">
                    <input type="text" id="full-name" name="full-name" placeholder="Full name" required>
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="tel" id="phone" name="phone" placeholder="Phone" required>
                </div>
                <div class="form-group">
                    <select id="service" name="service" required>
                        <option value="">Seleziona...</option>
                        <option value="Service 1">Consulenza</option>
                        <option value="Service 2">Analisi dei dati</option>
                        <option value="Service 3">Sviluppo software</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Send request">
                </div>
            </form>
        </div>
        <div class="image-container">
            <img src="image.png" alt="Image">
        </div>
    </div>
</body>
</html>
