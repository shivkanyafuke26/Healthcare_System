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

    .blood-camp-schedule {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
      width: 80%;
      max-width: 400px;
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
	
	.search-button {
      padding: 8px 16px;
      background-color: #8f94fb;
      color: #fff;
      border: none;
      border-radius: 4px;
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
  <title>Blood Donation Camp Schedule Checker</title>
</head>
<body>
  <header>
    <h1>Blood Donation Camp Schedule Checker</h1>
	<a href="index.php" class="search-button">Home</a>

  </header>

  <main>
    <div class="blood-camp-schedule">
      <label for="state">State:</label>
      <select id="state">
        
		<option value="state1">Maharashtra</option>

        </select>

      <label for="city">City:</label>
      <select id="city">
       <option value="city1">Jalna</option>
        <option value="city2">Nanded</option>
          </select>

      <label for="date">Date:</label>
      <input type="date" id="date">

      <button onclick="checkSchedule()">Check Schedule</button>

      <div id="result"></div>
      <div id="error" class="error"></div>
    </div>
  </main>

  <footer>
    <p>&copy; 2024 Blood Donation Camp Schedule Checker</p>
  </footer>

  <script>
    function checkSchedule() {
      var state = document.getElementById('state').value;
      var city = document.getElementById('city').value;
      var date = document.getElementById('date').value;

      // Check if all fields are filled
      if (state && city && date) {
        var hasCamp;

        // Assume camp information is retrieved from a server
        // For the sake of the example, using a dummy schedule
        hasCamp = Math.random() > 0.5;

        var resultElement = document.getElementById('result');
        if (hasCamp) {
          resultElement.innerHTML = `<p>There is a Blood Donation Camp scheduled for ${state}, ${city} on ${date}.</p>`;
        } else {
          resultElement.innerHTML = `<p>There is no Blood Donation Camp scheduled for ${state}, ${city} on ${date}.</p>`;
        }
        
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
