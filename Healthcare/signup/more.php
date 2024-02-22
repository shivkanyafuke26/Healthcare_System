<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More</title>
	<style>
	{
  padding: 0;
  margin: 0;
  font-family: 'Poppins', sans-serif;
}

.top{
  display: flex;
  justify-content: baseline;
}

.top h1{
  padding: 20px;
  font-size: 50px;
  color: #8b0000;
}

.hero{
  width: 80%;
  height: 450px;
  position: relative;
  margin: 100px auto;
  overflow: hidden;
}

.btn-box{
  display: flex;
  border-bottom: 1px solid #ccc;
}

.btn-box button{
  background: transparent;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  margin-right: 50px;
  font-size: 20px;
  font-weight: bold;
}

.btn-box img{
  width: 20px;
  height: 20px;
}

.content-right img{
  width: 350px;
}

.content{
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 5% auto;
  position: absolute;
  transform: translateX(100%);
  transition: 0.3s;
}

/*.content-left{
  flex-basis: 50%;
}*/

.content-left p{
  font-size: 13px;
}

.content a{
  width: 150px;
  display: block;
  padding: 8px 5px;
  border-radius: 20px;
  text-decoration: none;
  background-color: #ff7846;
  color: #fff;
  text-align: center;
}

.search-button {
      padding: 8px 16px;
      background-color: #8f94fb;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

.content-right{
  flex-basis: 50%;
}

#content1{
  transform: translateX(0px);
}

#btn1{
  color: #8b0000;
}

.but{
  display: flex;
  align-items: flex-end;
}

.table-responsive{
  min-height: .01%;
  overflow-x: auto;
}

.table-bordered, .table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th{
  border: 1px solid #ddd;
}

.tabled{
  display: table;
  width: 100%;
  max-width: 100%;
  margin-left: 200px;
  margin-bottom: 20px;
  text-indent: initial;
  border-spacing: 0;
  border-collapse: collapse;
  background-color: transparent;
}
	
	</style>
</head>
<body>
    <div class="top">
   <a href="index.php" class="search-button">Home</a>
    </div>
    <div class="description">
      <header style="text-align: center; font-size: 25px;">
				<h1 >Types of donation</h1>
			</header>
			</br></br></br></br>
      <div>
        <p style="text-align: center;">The human body contains five liters of blood, which is made of several useful components i.e. <strong>Whole blood</strong>, <strong>Platelet</strong>, and <strong>Plasma</strong>.</p>
        <p style="text-align: center;">Each type of component has several medical uses and can be used for different medical treatments. your blood donation determines the best donation for you to make.</p>
        <p style="text-align: center;">For <strong>plasma</strong> and <strong>platelet</strong> donation you must have donated whole blood in past two years.</p>
    </div>
    <div class="hero">
      <div class="btn-box">
        <button id="btn1" onclick="openHTML()">Whole Blood</button>
        <button id="btn2" onclick="openCSS()">Plasma</button>
        <button id="btn3" onclick="openJS()">Platelets</button>
        <button id="btn4" onclick="openTY()">Compatible Blood Type</button>
      </div>
      <div id="content1" class="content">
        <div class="content-left">
          <h1 style="text-align: center;">Whole Blood</h1>
            <h3>What is it?</h3>
            <p>Blood Collected straight from the donor after its donation usually separated into red blood cells, platelets, and plasma.</p>
            <h3>Who can donate?</h3>
            <p>You need to be 18-65 years old, weigh 45kg or more and be fit and healthy.</p>
            <h3>Used For?</h3>
            <p>Stomach disease, kidney disease, childbirth, operations, blood loss, trauma, cancer, blood diseases, haemophilia, anemia, heart disease.</p>
            <h3>Lasts For?</h3>
            <p>Red cells can be stored for 42 days.</p>
            <h3>How long does it take?</h3>
            <p>15 minutes to donate.</p>
            <h3>How often can I donate?</h3>
            <p>Every 12 weeks</p>
        </div>
      </div>
      <div id="content2" class="content">
        <div class="content-left">
          <h1 style="text-align: center;">Plasma</h1>
          <h3>What is it?</h3>
			    <p>The straw-coloured liquid in which red blood cells, white blood cells, and platelets float in.Contains special nutrients which can be used to create 18 different type of medical products to treat many different medical conditions.</p>
			    <h3>Who can donate?</h3>
			    <p>You need to be 18-70 (men) or 20-70 (women) years old, weigh 50kg or more and must have given successful whole blood donation in last two years. </p>
		      <h3>Used For?</h3>
			    <p>Immune system conditions, pregnancy (including anti-D injections), bleeding, shock, burns, muscle and nerve conditions, haemophilia, immunisations.</p>
          <h3>Lasts For?</h3>
          <p>Plasma can last up to one year when frozen.</p>
		      <h3>How  does it work?</h3>
			    <p>We collect your blood, keep plasma and return rest to you by apheresis donation.</p>
		      <h3>How long does it take?</h3>
          <p>15 minutes to donate.</p>
			    <h3>How often can I donate?</h3>
			    <p>Every 2-3 weeks.</p>
        </div>
      </div>
      <div id="content3" class="content">
        <div class="content-left">
          <h1 style="text-align: center;">Platelets</h1>
          <h3>What is it?</h3>
			    <p>The tiny 'plates' in blood that wedge together to help to clot and reduce bleeding. Always in high demand, Vital for people with low platelet count, like malaria and cancer patients.</p>
			    <h3>Who can donate?</h3>
			    <p>You need to be 18-70 years old (men), weigh 50kg or more and have given a successful plasma donation in the past 12 months</p>
		      <h3>Used For?</h3>
			    <p>Cancer, blood diseases, haemophilia, anaemia, heart disease, stomach disease, kidney disease, childbirth, operations, blood loss, trauma, burns.</p>
			    <h3>Lasts For?</h3>
			    <p>Just five days..</p>
		      <h3>How does it work?</h3>
			    <p>We collect your blood, keep platelet and return rest to you by apheresis donation.</p>
			    <h3>How long does it take?</h3>
			    <p>45 minutes to donate.</p>
			    <h3>How often can I donate?</h3>
			    <p>Every 2 weeks</p>
        </div>
      </div>
      <div id="content4" class="content">
        <div class="content-left">
          <h1 style="text-align: end;">Compatible Blood Type</h1>
          <table class="tabled table-responsive table-bordered ">
            <tbody>
            <tr>
            <th colspan="3" style='color:white;background-color:red;'>Compatible Blood Type Donors</th>
            </tr>
            <tr>
            <td><b>Blood Type</b></td>
            <td><b>Donate Blood To</b></td>
            <td><b>Receive Blood From</b></td>
            </tr>
            <tr>
            <td><span style="color: #961e1b;"><b>A+</b></span></td>
            <td>A+ AB+</td>
            <td>A+ A- O+ O-</td>
            </tr>
            <tr>
            <td><span style="color: #961e1b;"><b>O+</b></span></td>
            <td>O+ A+ B+ AB+</td>
            <td>O+ O-</td>
            </tr>
            <tr>
            <td><span style="color: #961e1b;"><b>B+</b></span></td>
            <td>B+ AB+</td>
            <td>B+ B- O+ O-</td>
            </tr>
            <tr>
            <td><span style="color: #961e1b;"><b>AB+</b></span></td>
            <td>AB+</td>
            <td>Everyone</td>
            </tr>
            <tr>
            <td><span style="color: #961e1b;"><b>A-</b></span></td>
            <td>A+ A- AB+ AB-</td>
            <td>A- O-</td>
            </tr>
            <tr>
            <td><span style="color: #961e1b;"><b>O-</b></span></td>
            <td>Everyone</td>
            <td>O-</td>
            </tr>
            <tr>
            <td><span style="color: #961e1b;"><b>B-</b></span></td>
            <td>B+ B- AB+ AB-</td>
            <td>B- O-</td>
            </tr>
            <tr>
            <td><span style="color: #961e1b;"><b>AB-</b></span></td>
            <td>AB+ AB-</td>
            <td>AB- A- B- O-</td>
            </tr>
            </tbody>
            </table>
      </div>
    </div>
    <script src="more.js"></script>
</body>
</html>