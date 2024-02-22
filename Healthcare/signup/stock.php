<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f8f8;
    }

    header {
      background-color: #000080;
      color: white;
      text-align: center;
      padding: 1em;
    }

    main {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 80vh;
    }

    .blood-stock {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
      width: 80%;
      max-width: 400px;
    }
	.search-button {
      padding: 8px 16px;
      background-color: #8f94fb;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    select, input {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }

    button {
      background-color: #ed2939;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .error {
      color: red;
      margin-top: -10px;
      margin-bottom: 10px;
    }

    footer {
      background-color: #000080;
      color: white;
      text-align: center;
      padding: 1em;
    }
  </style>
  <title>Blood Stock Checker</title>
</head>
<body>
  <header>
    <h1>Blood Stock Checker</h1>
	<a href="index.php" class="search-button">Home</a>

  </header>

  <main>
    <div class="blood-stock">
      <label for="state">State:</label>
      <select id="state">
        <option value="state1">Maharashtra</option>
       </select>

      <label for="city">City:</label>
      <select id="city">
        <option value="city1">Jalna</option>
        <option value="city2">Aurangabad</option>
        </select>

      <label for="bloodGroup">Blood Group:</label>
      <select id="bloodGroup">
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
      </select>

      <label for="bloodComponent">Blood Component:</label>
      <select id="bloodComponent">
        <option value="plasma">Plasma</option>
        <option value="platelets">Platelets</option>
        <option value="platelets">Whole Blood</option>
          </select>

      <button onclick="checkStock()">Check Stock</button>

      <div id="result"></div>
      <div id="error" class="error"></div>
    </div>
  </main>

  <footer>
    <p></p>
  </footer>

  <script>
    function checkStock() {
      var state = document.getElementById('state').value;
      var city = document.getElementById('city').value;
      var bloodGroup = document.getElementById('bloodGroup').value;
      var bloodComponent = document.getElementById('bloodComponent').value;

      if (state && city && bloodGroup && bloodComponent) {
        var stock;

        if (Math.random() > 0.5) {
          stock = 'In Stock';
        } else {
          stock = 'Out of Stock';
        }

        var resultElement = document.getElementById('result');
        resultElement.innerHTML = `<p>Stock Availability for ${bloodGroup} (${bloodComponent}) : <strong>${stock}</strong></p>`;
        
        // Clear error message if any
        document.getElementById('error').innerHTML = '';
      } else {
        // Display error message if any field is empty
        document.getElementById('error').innerHTML = 'Please fill in all fields.';
      }
    }
  </script>
</body>
</html>
