
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News& Article</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #000080;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 20px;
        }

        .input-container,
        .events-container {
            width: 45%;
            min-width: 300px;
            margin-bottom: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .event {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

       
		
		.buttonb{
		 padding: 8px 16px;
      background-color: #000080;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s;
        }

        button {
            background-color: #000080;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        hr {
            display: block;
            height: 1px;
            border: 0;
            border-top: 1px solid #ccc;
            margin: 1em 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Healthcare News & Articles</h1>
		  <a href="index.php" class="buttonb">Home</a>
    </header>
    <div class="container">
        <!-- Input container -->
        <div class="input-container">
            <h2>Articles</h2>
            <div class="event">
                <h3>Exposure to air pollution may increase the risk of stroke</h3>
                <p>A new study has found a strong correlation between gaseous and particulate air pollutants and the occurrence and mortality rates of stroke.The risk of stroke was higher when people had been exposed to nitrogen dioxide, carbon monoxide, sulfur dioxide, and ozone. The study analyzed 110 studies and included more than 18 million cases of stroke.</P>
				<a href="https://timesofindia.indiatimes.com/life-style/health-fitness/health-news/exposure-to-air-pollution-may-increase-the-risk-of-stroke/articleshow/106799136.cms" class="button">Read</a>
				</div>

           <div class="event">
                <h3>7 types of cancers that attack men after 40 and how to reduce chances of getting one</h3>
                <p>A new study has found a strong correlation between gaseous and particulate air pollutants and the occurrence and mortality rates of stroke.The risk of stroke was higher when people had been exposed to nitrogen dioxide, carbon monoxide, sulfur dioxide, and ozone. The study analyzed 110 studies and included more than 18 million cases of stroke.</P>
				<a href="https://timesofindia.indiatimes.com/life-style/health-fitness/health-news/exposure-to-air-pollution-may-increase-the-risk-of-stroke/articleshow/106799136.cms" class="button">Read</a>
				</div>
        </div>
		
		<div class="events-container">
            <h2>News</h2>
            <div class="event">
                <h3>Exposure to air pollution may increase the risk of stroke</h3>
                <a href="https://timesofindia.indiatimes.com/life-style/health-fitness/health-news/exposure-to-air-pollution-may-increase-the-risk-of-stroke/articleshow/106799136.cms" class="button">Read</a>
				</div>

            <div class="event">
                <h3>7 types of cancers that attack men after 40 and how to reduce chances of getting one</h3>
                <a href="https://timesofindia.indiatimes.com/life-style/health-fitness/health-news/exposure-to-air-pollution-may-increase-the-risk-of-stroke/articleshow/106799136.cms" class="button">Read</a>
				 </div>
        </div>
	
    
        <!-- Half-page break -->
        <hr>

        <!-- Events container -->
        <div class="events-container">
            <h2>Events</h2>
            <div class="event">
                <h3>Health Checkup Camp</h3>
                <p>Date: February 15, 2024<br>Location: Town Hall, Jalna<br>Organizer: deepak hospital,jalna</p>
            </div>

            <div class="event">
                <h3>Blood Donation Camp</h3>
                <p>Date: March 5, 2024<br>Location: Nagewadi<br>Organizer: MSSCET,Jalna</p>
            </div>
        </div>
    </div>    
</body>
</html>
