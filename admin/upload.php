<?php
// Check if exactly 17 files were uploaded
if (count($_FILES['images']['name']) !== 17) {
  
  
    echo " <script>
      alert('Please upload exactly 17 files.'); window.location='upload_exhibition_art.html';
      </script>";
  }


// Check if exactly 17 files were uploaded
if (count($_FILES['images']['name']) !== 17) {
  echo "Please upload exactly 17 files.";
  exit();
}
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "artwork";

// Create connection to database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if files were uploaded
if (isset($_FILES['images'])) {
    $errors = array();
    $file_names = array();
    $total_count = 17;
    $allowed_exts = array('jpg', 'jpeg');

    // Loop through each file
    for ($i = 0; $i < $total_count; $i++) {
        $file_name = $_FILES['images']['name'][$i];
        $file_size = $_FILES['images']['size'][$i];
        $file_tmp = $_FILES['images']['tmp_name'][$i];
        $file_type = $_FILES['images']['type'][$i];
        $file_name_parts = explode('.', $_FILES['images']['name'][$i]);
        $file_ext = strtolower(end($file_name_parts));
 

        // Check file extension
        if (in_array($file_ext, $allowed_exts) === false) {
            $errors[] = "Extension not allowed for file " . $file_name;
        }

        // Check file size
        if ($file_size >1e+7) {
            $errors[] = 'File size must be less than 10 MB for file ' . $file_name;
        }

        // If no errors, move the file to server and insert data into database
        if (empty($errors)) {
            // Get the timestamp
            $timestamp = time();

            // Generate a unique file name
            $unique_file_name = ($i+1) . "." . $file_ext;

            // Set the file path for the upload
            $file_path = "C:/xampp/htdocs/3D Art Gallery/vr_art/textures/ex_img/" . $unique_file_name;

            // Move the uploaded file to the specified path
            move_uploaded_file($file_tmp, $file_path);

            // Add the file name to the array for database insertion
            $file_names[] = $unique_file_name;

            // Insert data into database
            $sql = "INSERT INTO images (file_name) VALUES ('$unique_file_name')";
            if (!mysqli_query($conn, $sql)) {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }

    // Move each file from the database to the folder
    $sql = "SELECT file_name FROM images";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $file_name = $row['file_name'];
            $file_path = "C:/xampp/htdocs/3D Art Gallery/vr_art/textures/ex_img/" . $file_name;
            if (file_exists($file_path)) {
                // Move the file to the folder
                $new_path = "C:/xampp/htdocs/3D Art Gallery/vr_art/textures/ex_img/" . $file_name;
                if (rename($file_path, $new_path)) {
                    // Update the database to indicate that the file has been moved
                    $sql = "UPDATE images SET moved_to_folder=1 WHERE file_name='$file_name'";
                    mysqli_query($conn, $sql);
                } else {
                    echo "Error: Unable to move file '$file_name'";
                }
            } else {
                echo "Error: File '$file_name' not found";
            }
        }
    }
    // Delete the records from the database
$sql = "DELETE FROM images WHERE moved_to_folder=1";
mysqli_query($conn, $sql);

// Check if any records were deleted
if (mysqli_affected_rows($conn) > 0) {
    echo "Records deleted from database.";
} else {
    echo " <script>
    alert(' 17 files are updated.'); window.location='upload_exhibition_art.html';
    </script>";


}

}
