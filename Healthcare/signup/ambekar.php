<!DOCTYPE html>
<!-- saved from url=(0033)http://127.0.0.1:5500/index1.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Profile</title>
    <link rel="shortcut icon" href="http://127.0.0.1:5500/img/fav-icon.svg" type="image/x-icon">
    
    <style>

         body{
            font-family:Aerial,sans-serif;
            margin:0;
            padding:0;
            background-color:#f4f4f4;
        }
        header{
            background-color:#000080 ;
            color:#fff;
            text-align: center;
            padding: 20px 0;

        }
        .navbar{
            background-color: #666;
            border-radius: 4px;
        }
        .navbar ul{
           overflow: auto;
        }
        .navbar li {
            float:left;
            list-style: none;
            margin: 10px 15px;
        }
        
        
        .navbar li a{
            padding-bottom: 15px 15px;
            text-decoration: none;
            color: white;
            
        }
        .navbar li a:hover{
            background-color: rgb(64, 64, 175);
        }
        .search{
            float: right;
            color: white;
            padding-right: 200px;
            
        }
        .navbar input{
            border: 2px solid black;
            border-radius: 14px;
            padding: 3px 17px;
            width: 129px;
        }
        .container{
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 5px;
        }
        h1{
            color:white;
            padding-bottom: 60px;

        }
        h2,h3{
            color: black;
        }
        p {
            line-height: 1.6;
            color:#666;

        }
        footer{
            text-align: center;
            padding:  3px;
            background-color: #000080;
            color:#fff;
            position: fixed;
            width: 100%;
            bottom: 1px;
        }

    </style>
</head>
<body>
    <header>
        <h1>Ambekar Hospital, Jalna</h1>
        <div>
            <div class="Menu">
                <ul>
                <nav class="navbar">
                    <li><a href="http://127.0.0.1:5500/index1.html#">Home</a></li>
                    <li><a href="http://127.0.0.1:5500/index1.html#">About</a></li>
                    <li><a href="http://127.0.0.1:5500/index1.html#">Services</a></li>
                    <li><a href="http://127.0.0.1:5500/index1.html#">Contact</a></li>
                </nav>
                </ul>
                <div class="Search">
                    <input type="text" name="search" id="search" placeholder="Search">
                </div>
                </div>
        </div>
    </header>

    <div class="container">
        <img src="https://tse3.mm.bing.net/th?id=OIP.8JC06EsSfSgI1NRPsjNSewEsEs&pid=Api&P=0&h=180" width="1000" height="500">

        </div>
        
        <h2>About Us</h2>
        <p>Our multi-specialty hospital is committed to providing comprehensive healthcare services to our patients. Established in 2016, we have grown to become a trusted healthcare provider in our community, offering a wide range of medical treatments and services.
             Our hospital is equipped with state-of-the-art medical technology and staffed with highly skilled and experienced medical professionals. 
            We offer a full spectrum of medical services, including cardiology, 
            gastroenterology, neurology, orthopedics, pediatrics, and many more.
             We take pride in our ability to provide personalized care to our patients and work closely with them to develop treatment plans
              that meet their unique needs.</p>
        <p>This is a brife description of the hospital and its services.</p>
        <hr>

        <h2>Contact Information</h2>
        <p>Address:Rishi Park, Ambad Choufully, Jalna</p>
        <p>Phone: 02482-223322</p>
        <p>Email: contactsmhjalna[at]gmail[dot]com</p>
        <a href="https://www.justdial.com/Jalna/Sanjeevani-Multispeciality-Hospital-Ambad-Choufully/9999P2482-2482-160519114700-Y5X6_BZDET">For Contact</a>
        <br>
        <a href="https://www.google.com/maps/place/Sanjeevani+Multispeciality+Hospital/@19.8250188,75.8807702,17z/data=!3m1!4b1!4m6!3m5!1s0x3bda576e6c51482d:0x793f47ab253531ce!8m2!3d19.8250188!4d75.8833451!16s%2Fg%2F11c5hjmvvq?entry=ttu">Location</a>
        <br>
        <a href="https://sanjeevanihosp.in/">Doctors Profile</a>
        <hr>
         <h2>Services</h2>
        <ul>
            <li>Emergency Care</li>
            <li>Impatient Services</li>
            <li>Outpatient Services</li>
        </ul>
        
    <footer>
      
    </footer>

    
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>

</body></html>