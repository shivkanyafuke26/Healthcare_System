

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Profiles</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    header {
      background-color: #000080;
      color: #fff;
      padding: 10px;
      width: 100%;
      text-align: center;
    }

    .search-bar {
      margin: 20px 0;
      display: flex;
      justify-content: center;
    }

    .search-input {
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-right: 10px;
    }

    .search-button {
      padding: 8px 16px;
      background-color: #8f94fb;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .search-button:hover {
      background-color: #45a049;
    }
	
	.buttonb{
	  padding: 8px 16px;
      background-color: #8f94fb;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
        }

    .profile-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
      max-width: 1200px;
      padding: 20px;
    }

    .profile {
      background-color: #fff;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
      text-align: center;
      width: 100%;
    }

    .profile:hover {
      transform: scale(1.05);
    }

    .profile img {
      width: 100%;
      max-height: 300px;
      object-fit: cover;
      border-bottom: 1px solid #ddd;
    }

    .profile-content {
      padding: 20px;
    }

    h2 {
      margin-top: 0;
      font-size: 1.5em;
      color: #333;
    }

    p {
      margin-bottom: 0;
      color: #666;
    }

    .btn-container {
      margin-top: 10px;
    }

    .btn {
      padding: 8px 16px;
      background-color: #000080;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s;
    }

    .btn:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

<header>
  <h1>Hospital Profiles</h1>
  <div class="search-bar">
    <input type="text" class="search-input" placeholder="Search for a hospital...">
    <button type="button" class="search-button">Search</button>
  </div>
  <a href="index.php" class="search-button">Home</a>
</header>

<div class="profile-container">
  <div class="profile">
    <img src="dipakhospital.jpeg" alt="Hospital 1">
    <div class="profile-content">
      <h2>Deepak Hospital Jalna</h2>
      <p>Address: Town Hall, Jalna</p>
      <p>Phone: 02482-240486</p>
      <div class="btn-container">
        <a href="http://deepakhealthandwellness.com/" class="btn">Visit Hospital</a>
      </div>
    </div>
  </div>

  <div class="profile">
    <img src="sanjivanihospital.jpg" alt="Hospital 2">
    <div class="profile-content">
      <h2>Sanjivani Hospital,jalna</h2>
      <p>Address: 456 Oak Avenue</p>
      <p>Phone: (987) 654-3210</p>
      <div class="btn-container">
        <a href="https://sanjeevanihosp.in/" class="btn">Visit Hospital</a>
      </div>
    </div>
  </div>
  <div class="profile">
    <img src="ganpatinetralaya.jpeg" alt="Hospital 1">
    <div class="profile-content">
      <h2>Shri Ganpati Netralaya, Jalna</h2>
       <p>Address: Survey No 204/2,Devalgaonraja-Mantha Road, Jalna -431203</p>
      <p>Phone: 02482 244600</p>
      <div class="btn-container">
        <a href="http://www.netralaya.org/" class="btn">Visit Hospital</a>
      </div>
    </div>
  </div>

  <div class="profile">
    <img src="jalnacritical.jpeg" alt="Hospital 2">
    <div class="profile-content">
      <h2>Jalna Critical Care</h2>
      <p>Address: Mahalaxmi Nagar, Mantha Chaufully Maharashtra 431203</p>
      <p>Phone: 02482 237 008</p>
      <div class="btn-container">
        <a href=" https://jalna-critical-care.business.site/" class="btn">Visit Hospital</a>
      </div>
    </div>
  </div>
  <div class="profile">
    <img src="ommulti.jpg" alt="Hospital 1">
    <div class="profile-content">
      <h2>Om Multispeciality Hospital & Research Center,Jalna</h2>
      <p>Address: Shivaji Statue Road, Shivaji Chowk, Jalna - 431203</p>
      <p>Phone: 02482 - 231905</p>
      <div class="btn-container">
        <a href="https://www.omhospital.in/" class="btn">Visit Hospital</a>
      </div>
    </div>
  </div>

  <div class="profile">
    <img src="ambekarhospital.jpg" alt="Hospital 2">
    <div class="profile-content">
      <h2>Ambekar Hospital, Jalna</h2>
      <p>Address: Mantha Road Main Road,Opp. Bejosheetal, Jalna - 431203</p>
      <p>Phone: + (91) - 9422219025</p>
      <div class="btn-container">
        <a href="ambekar.php" class="btn">Visit Hospital</a>
      </div>
    </div>
  </div>
  
  <div class="profile">
    <img src="https://jalnahospital.netlify.app/jalna-hospital.jpg" alt="Hospital 2">
    <div class="profile-content">
      <h2>Jalna Multispeciality Hospital</h2>
      <p>Address: Mantha Road Main Road,Opp. Bejosheetal, Jalna - 431203</p>
      <p>Phone: + (91) - 9422219025</p>
      <div class="btn-container">
        <a href="https://jalnahospital.netlify.app/" class="btn">Visit Hospital</a>
      </div>
    </div>
  </div>


  <!-- Repeat the above profile structure for the remaining hospitals -->

</div>
<script>
 function searchHospitals() {
            const searchInput = document.getElementById("searchInput").value.toLowerCase();
            const filteredHospitals = hospitals.filter(hospital =>
                hospital.name.toLowerCase().includes(searchInput)
            );
			

            renderHospitals(filteredHospitals);
        }

</script>
</body>
</html>
