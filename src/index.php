<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Split Layout</title>
  <link rel="stylesheet" href="../src/style.css">
  <style>

  </style>
</head>
<body>
  <!-- Split Layout -->
  <div class="split-layout">
    <!-- Left Half (Image Module) -->
    <div class="left-half">


      <div class="text-module">
      

      <?php


      $csvFile = 'data.csv';

      // Open the CSV file
      $handle = fopen($csvFile, 'r');

      // Skip the first row (header row)
      fgetcsv($handle);

      // Loop through the remaining rows in the CSV file
      while (($data = fgetcsv($handle)) !== false) {
          // $data is an array containing the values of the current row
          $icon = $data[0];
          $color = $data[1];
          $headline = $data[2];
          $text = $data[3];

          // Do something with the data (e.g., display or process it)
          echo "
          <div class='text_tiles' style='background-color: $color'>
          <h1> $headline </h1> <p > $text <p>
          </div>
          ";
      }

      // Close the file handle
      fclose($handle);

    

   
      ?>



      </div>

    </div>

    <!-- Right Half (Text Module) -->
    <div class="right-half">

      <div class="image-module">
        <!-- Add your image content here -->
        <img src="assets/image.png" alt="Image">
      </div>
      

    </div>
  </div>
</body>
</html>
