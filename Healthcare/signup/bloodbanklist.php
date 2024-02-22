
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
		position: fixed;
		bottom: 650px;
		left: 80px;
		background-color: #4e54c8;
		color: #fff;
		padding: 10px 20px;
		border: none;
		border-radius: 10%;
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
  <h1>Blood Bank</h1>
  <div class="search-bar">
    <input type="text" class="search-input" placeholder="Search for a hospital...">
    <button type="button" class="search-button">Search</button>
  </div>
  <a href="index.php" class="btn">Home</a>
</header>

<div class="profile-container">
  <div class="profile">
    <div class="profile-content">
      <h2>Jalna Blood Bank</h2>
      <p>Address: 2nd & 3rd Floor, near Sindhi Panchayat Bhawan, Jalna, Maharashtra 431203</p>
      <p>Phone: +91 97669 80909</p>
      <div class="btn-container">
        <a href="http://localhost/Doctor_Patient/bbms/index.php" class="btn">Visit</a>
      </div>
    </div>
  </div>

  <div class="profile">
    
    <div class="profile-content">
      <h2>Jankalyan Blood Bank</h2>
      <p>Address: VV2X+F7Q, Gyatri Nagar, Jalna, Maharashtra 431203</p>
      <p>Phone: +91 2482 243 085</p>
      <div class="btn-container">
        <a href="http://localhost/Doctor_Patient/bbms/index.php" class="btn">Visit</a>
      </div>
    </div>
  </div>
  <div class="profile">
   
    <div class="profile-content">
      <h2>Shree Swami Samarth Blood Bank Jalna</h2>
      <p>Address: Muttha Building, MH SH 44, Rahman Ganj, Loni, Maharashtra 413736</p>
      <p>Phone: (123) 456-7890</p>
      <div class="btn-container">
        <a href="http://localhost/Doctor_Patient/bbms/index.php" class="btn">Visit</a>
      </div>
    </div>
  </div>

  <div class="profile">
   
    <div class="profile-content">
      <h2>Civil Surgeon General Hospital Blood Bank</h2>
      <p>Address:Jalna, Maharashtra 431213</p>
      <p>Phone: +91 2482 224 381</p>
      <div class="btn-container">
        <a href="http://localhost/Doctor_Patient/bbms/index.php" class="btn">Visit</a>
      </div>
    </div>
  </div>
  <div class="profile">
  
    <div class="profile-content">
      <h2>JALNA BLOOD BANK</h2>
      <p>Address: 2nd & 3rd floor Panna chember, Kannad – Deulgaon Raja Rd</p>
      <p>Phone: (123) 456-7890</p>
      <div class="btn-container">
        <a href="#" class="btn">Visit</a>
      </div>
    </div>
  </div>

  <div class="profile">
   
    <div class="profile-content">
      <h2>Noor Hospital Blood Bank</h2>
      <p>Address: Maharashtra 431202</p>
      <p>Phone: +91 2482 222 515</p>
      <div class="btn-container">
        <a href="#" class="btn">Visit</a>
      </div>
    </div>
  </div>

 
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
