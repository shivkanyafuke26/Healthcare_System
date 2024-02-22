

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcare System</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: #f2f2f2;
        }

        header {
            background: linear-gradient(to right, #000080, #8f94fb);
            padding: 20px;
            color: white;
            text-align: center;
        }
		
        .container {
            display: flex;
            justify-content: space-around;
            padding: 20px;
            flex-wrap: wrap;
        }

        .profile-module {
            flex: 1;
            padding: 20px;
			color: white;
            margin: 10px;
            text-align: center;
            border-radius: 10px;
            background: linear-gradient(20deg, #e74c3c, #000080, #0008db);
            overflow: hidden;
        }

        .profile-module img {
            max-width: 100%;
            border-radius: 50%;
        }
		
		 #chatButton {
            position: fixed;
            bottom: 100px;
            right: 720px;
            background-color: #000080;
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 40%;
            cursor: pointer;
        }

        #chatContainer {
            display: none;
            position: fixed;
            bottom: 90px;
            right: 20px;
            width: 300px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .chat-header {
            background-color: #000080;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .chat-body {
            max-height: 300px;
            overflow-y: auto;
            padding: 10px;
        }

        .message {
            margin: 10px 0;
            padding: 10px;
            border-radius: 8px;
        }

        .message.sent {
            background-color: #000080;
            color: #fff;
            text-align: right;
        }

        .message.received {
            background-color: #e0e0e0;
        }

        .chat-input {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        input {
            flex: 1;
            padding: 8px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
			
        .button {
            display: inline-block;
            padding: 10px 20px;
            background: #4e54c8;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }

        .button:hover {
            background: #8f94fb;
        }

        footer {
            background: #000080;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <h1>Healthcare System</h1>
		 <a href="http://localhost/Doctor_Patient/applicationlayer/login.php" class="button">Login</a>
   </header>

    <div class="container">
        <div class="profile-module">
            <img src="hospitalhome.jpeg" alt="Profile 1">
            <h2>Hospitals Profile</h2>
 
            <a href="hospitals.php" class="button">View</a>
        </div>

        <div class="profile-module">
            <img src="Bloodbankhome.jpeg" alt="Profile 2">
            <h2>Blood Bank</h2>
            <a href="bloodbank.php" class="button">View</a>
        </div>

        <div class="profile-module">
            <img src="news.jpeg" alt="Profile 3">
            <h2>News & Articles</h2>
          
            <a href="news.php" class="button">View</a>
        </div>
    </div>
	
	<a href="chatbot.php" id="chatButton">Chat</a>
	
	

    <footer>
        <p>Health is Wealth !</p>
    </footer>

    <script>
		
		function toggleChat() {
            var chatContainer = document.getElementById('chatContainer');
            chatContainer.style.display = (chatContainer.style.display === 'block') ? 'none' : 'block';
            scrollToBottom();
        }

    
        function scrollToBottom() {
            var chatBody = document.getElementById('chatBody');
            chatBody.scrollTop = chatBody.scrollHeight;
        }
    </script>

</body>
</html>
