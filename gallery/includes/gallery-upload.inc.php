<?php

if (isset($_POST['submit'])) {
    $newFileName = $_POST['filename'];
    if(empty($newFileName)){
        $newFileName="gallery";
    }else {
        $newFileName = strtolower(str_replace("","-",$newFileName));
    }
    $imageTitle = $_POST['filetitle'];
    $imageDesc = $_POST['filedesc'];

    $file = $_FILES['file'];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 2000000) {
                $imageFullName = $newFileName . "." . uniqid("", true) . "." . $fileActualExt;
                $fileDestination = 'img/Luu_anh/' . $imageFullName;

                include_once 'dbh.inc.php';

                if (empty($imageTitle) || empty($imageDesc)) {
                    header("Location: ../gallery.php?upload=empty");
                    exit();
                } else {

                    $sql = "SELECT * FROM library.gallery;";
                    $stmt = mysqli_stmt_init($conn);

                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "SQL statement failed!";
                    } else {
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        $rowCount = mysqli_num_rows($result);
                        $setImageOrder = $rowCount + 1;

                        $sql = "INSERT INTO library.gallery (titleGallery, descGallery, imgFullNameGallery, orderGallery) VALUES (?, ?, ?, ?);";
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            echo "SQL statement failed!";
                        } else {
                            mysqli_stmt_bind_param($stmt, "ssss", $imageTitle, $imageDesc, $imageFullName, $setImageOrder);
                            mysqli_stmt_execute(($stmt));
                            move_uploaded_file($fileTmpName, $fileDestination);
                            header("Location:../gallery.php?upload=success");
                        }
                    }
                }
            } else {
                echo "Your file is too big!";
                exit();
            }
        } else {
            echo "There was an error uploading your file!";
            exit();
        }
    }
}
?>