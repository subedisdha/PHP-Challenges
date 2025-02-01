<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Conversion</title>
    <style>
        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: linear-gradient(135deg, #6dd5ed, #2193b0);
            font-family: 'Poppins', sans-serif;
            color: white;
        }
        .container {
            width: 50%;
            background: rgba(255, 255, 255, 0.2);
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: space-between;
            align-items: center;
            backdrop-filter: blur(10px);
        }
        .left-side {
            width: 45%;
        }
        .left-side img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .right-side {
            width: 45%;
            display: flex;
            flex-direction: column;
            gap: 15px;
            padding: 20px;
        }
        input, button {
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            width: 100%;
        }
        input {
            background: rgba(255, 255, 255, 0.8);
            color: #333;
            font-weight: bold;
        }
        .radio-group {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding-top: 16px;
            padding-bottom: 16px;
        }
        .radio-group label {
            font-size: 16px;
            font-weight: bold;
        }
        button {
            background-color: #ff9800;
            color: white;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }
        button:hover {
            background-color: #e68900;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
            text-transform: uppercase;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

    <h2>Temperature Conversion</h2>

    <div class="container">
        <div class="left-side">
            <img src="tempr.jpg" alt="Temperature Image">
        </div>
        <div class="right-side">
            <form method="POST">
                <input type="number" placeholder="Enter the value" name="value" step="any" required> <!-- "any" allows both decimal and whole numbers-->
                <div class="radio-group">
                    <label><input type="radio" name="unit" value="celsius" required> Convert to Celsius</label>
                    <label><input type="radio" name="unit" value="fahrenheit" required> Convert to Fahrenheit</label>
                </div>
                <button type="submit" name="convert">Convert</button>
            </form>
            <div>
                <p>
                    <?php
                    if(isset($_POST['convert']) && isset($_POST['value']) && isset($_POST['unit'])) {
                        $num = (float) $_POST['value'];
                        $temp = $_POST['unit'];

                        if(is_numeric($num)){ // ensure input is a number
                            if($temp == "celsius") {
                                $result = ($num - 32) * 5 / 9;
                                
                                echo "The conversion value of $num °F to Celcius is " . number_format($result, 2) . "°C";
                            }else {
                                $result = ($num * 9 / 5) + 32;
                                echo "The conversion value of $num °C to Fahrenheit is " . number_format($result, 2) . "°F";
                            }

                        }else {
                            echo "Please enter a valid numeric value.";
                        }

                        
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>

</body>
</html>
