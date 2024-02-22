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
    }

    header {
      background-color: #000080;
      color: white;
      text-align: center;
      padding: 1em;
    }

    main {
      display: flex;
      justify-content: space-around;
      align-items: flex-start;
      flex-wrap: wrap;
      padding: 20px;
    }

    .blood-donation {
      width: 45%;
      border: 1px solid #ddd;
      padding: 15px;
      margin: 10px;
      text-align: left;
    }

    .blood-donation h2 {
      color: #333;
    }

    .blogs {
      width: 45%;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
    }

    .blog {
      width: 100%;
      border: 1px solid #ddd;
      padding: 15px;
      text-align: left;
    }
	.search-button {
      padding: 8px 16px;
      background-color: #8f94fb;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .blog h2 {
      color: #000080;
    }

    .blog p {
      color: #666;
    }

    .blog-button {
      background-color: #ed2939;
      color: white;
      padding: 10px 15px;
      border: none;
      cursor: pointer;
    }

    footer {
      background-color: #000080;
      color: white;
      text-align: center;
      padding: 1em;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
  <title>Responsive Template</title>
</head>
<body>
  <header>
    <h1>Blood Donation and Informative Blogs</h1>
	<a href="index.php" class="search-button">Home</a>
  </header>

  <main>
    <div class="blood-donation">
      <h2>Blood Donation</h2>
      <p># The most precious gift that one can give to another person is the gift of life i.e. blood. It is the essence of life.
</br>
</br># Your blood saves more than one life when it is separated into its components (red blood cells, plasma etc.).
</br></br>
# Blood is needed regularly for patients with diseases such as thalassemia and hemophilia, and also for the treatment of injuries after an accident, major surgeries, anemia, etc.
</br></br>
# It improves your health.
</p>


 </div>

    <div class="blogs">
      <div class="blog">
        <h2>Blood bank profile</h2>
        <p>It Contains Information About Blood Banks.</p></br>
        <a href="bloodbanklist.php" class="blog-button">Read More</a>
      </div>

      <div class="blog">
        <h2>Stock Availability</h2>
        <p>To search the required Blood Click here.</p></br>
        <a href="Stock.php" class="blog-button">Read More</a>
       </div>

      <div class="blog">
        <h2>Camp Schedule</h2>
        <p>To check blood donation camps around you click here.</p>
        <a href="Bloodcamp.php" class="blog-button">Read More</a>
       </div>

      <div class="blog">
        <h2>Know More</h2>
        <p>It contains valuable information.</p></br>
       <a href="More.php" class="blog-button">Read More</a>
    </div>
  </main>

  <footer>
    <p></p>
  </footer>

  <script>
    function readBlog(blogTitle) {
      alert('Reading blog: ' + blogTitle);
      // You can add more functionality here if needed
    }
  </script>
</body>
</html>
