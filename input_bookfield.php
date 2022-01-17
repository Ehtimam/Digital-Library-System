<?php

session_start();

$db = mysqli_connect('localhost','root','','eht');
if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
if (isset($_POST['add'])) {
    $id = $_POST['id'];
    $name = $_POST['book'];
	$writer = $_POST['writer'];
	$publisher = $_POST['publisher'];
	$release = $_POST['release'];
    $page = $_POST['page'];
    $lang = $_POST['language'];
    $pdf = $_FILES['pdf']['name'];

    $pdf_type=$_FILES['pdf']['type'];
    $pdf_size=$_FILES['pdf']['size'];
    $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
    $pdf_store="pdf/".$pdf;

    move_uploaded_file($pdf_tem_loc,$pdf_store);


	$sql = "INSERT INTO `book` (`id`,`name`, `writer`, `publisher`, `date`, `page`, `language`,`pdf`) VALUES ('$id','$name', '$writer', '$publisher', '$release','$page','$lang','$pdf')";
	
	$result = mysqli_query($db, $sql);

    if($result){
		echo "You have Succesfully inserted.";
	} else {
		echo "Oops! Something went wrong.";
	}
}



?>



<html>
<title>
    Book field
</title>

<head>
    <style>
        * {
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
            font-size: 16px;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        
        body {
            background-color: #eef3ec;
           
        }
        
        table,
        tr,
        td {
            border-radius: 3px solid black;
            padding-top: 5px;
        }
        
        .book form input[type="submit"] {
            width: 10%;
            padding: 10px;
            margin-top: 20px;
            background-color: #6d582a;
            border: 0;
            cursor: pointer;
            font-weight: bold;
            color: #ffffff;
            transition: background-color 0.2s;
        }
        
        #button {
            text-align: center;
        }
    </style>

</head>

<body>
    <div class="book">
        <form action="input_bookfield.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td style="padding-left: 60px;">ID</td>
                    <td style="padding-left: 60px;">Name</td>
                    <td style="padding-left: 60px;">writer</td>
                    <td style="padding-left: 60px;">Publisher</td>
                    <td style="padding-left: 60px;">release</td>
                    <td style="padding-left: 60px;">Pages</td>
                    <td style="padding-left: 60px;">language</td>
                    <td style="padding-left: 30px;">PDF</td>
                </tr>
                <tr>
                    <td><input type="text" name="id" required></td>
                    <td><input type="text" name="book" required></td>
                    <td><input type="text" name="writer" required></td>
                    <td><input type="text" name="publisher" required></td>
                    <td><input type="date" name="release" required></td>
                    <td><input type="number" name="page"></td>
                    <td><input type="text" name="language"></td>
                    <td><input type="file" name="pdf"></td>
                </tr>
               <!--<tr>
                    <td><input type="text" name="book" required></td>
                    <td><input type="text" name="writer" required></td>
                    <td><input type="text" name="publisher" required></td>
                    <td><input type="date" name="release" required></td>
                    <td><input type="number" name="page"></td>
                    <td><input type="text" name="language"></td>
                    <td><input type="file" name="pdf"></td>
                </tr>
                 <tr>
                    <td><input type="text" name="book" required></td>
                    <td><input type="text" name="writer" required></td>
                    <td><input type="text" name="publisher" required></td>
                    <td><input type="date" name="release" required></td>
                    <td><input type="number" name="page"></td>
                    <td><input type="text" name="language"></td>
                    <td><input type="file" name="pdf"></td>
                </tr>
                <tr>
                    <td><input type="text" name="book" required></td>
                    <td><input type="text" name="writer" required></td>
                    <td><input type="text" name="publisher" required></td>
                    <td><input type="date" name="release" required></td>
                    <td><input type="number" name="page"></td>
                    <td><input type="text" name="language"></td>
                    <td><input type="file" name="pdf"></td>
                </tr>
                <tr>
                    <td><input type="text" name="book" required></td>
                    <td><input type="text" name="writer" required></td>
                    <td><input type="text" name="publisher" required></td>
                    <td><input type="date" name="release" required></td>
                    <td><input type="number" name="page"></td>
                    <td><input type="text" name="language"></td>
                    <td><input type="file" name="pdf"></td>
                </tr>
                <tr>
                    <td><input type="text" name="book" required></td>
                    <td><input type="text" name="writer" required></td>
                    <td><input type="text" name="publisher" required></td>
                    <td><input type="date" name="release" required></td>
                    <td><input type="number" name="page"></td>
                    <td><input type="text" name="language"></td>
                    <td><input type="file" name="pdf"></td>
                </tr>
                <tr>
                    <td><input type="text" name="book" required></td>
                    <td><input type="text" name="writer" required></td>
                    <td><input type="text" name="publisher" required></td>
                    <td><input type="date" name="release" required></td>
                    <td><input type="number" name="page"></td>
                    <td><input type="text" name="language"></td>
                    <td><input type="file" name="pdf"></td>
                </tr>
                <tr>
                    <td><input type="text" name="book" required></td>
                    <td><input type="text" name="writer" required></td>
                    <td><input type="text" name="publisher" required></td>
                    <td><input type="date" name="release" required></td>
                    <td><input type="number" name="page"></td>
                    <td><input type="text" name="language"></td>
                    <td><input type="file" name="pdf"></td>
                </tr>
                <tr>
                    <td><input type="text" name="book" required></td>
                    <td><input type="text" name="writer" required></td>
                    <td><input type="text" name="publisher" required></td>
                    <td><input type="date" name="release" required></td>
                    <td><input type="number" name="page"></td>
                    <td><input type="text" name="language"></td>
                    <td><input type="file" name="pdf"></td>
                </tr>
                <tr>
                    <td><input type="text" name="book" required></td>
                    <td><input type="text" name="writer" required></td>
                    <td><input type="text" name="publisher" required></td>
                    <td><input type="date" name="release" required></td>
                    <td><input type="number" name="page"></td>
                    <td><input type="text" name="language"></td>
                    <td><input type="file" name="pdf"></td>
                </tr>
                <tr>
                    <td><input type="text" name="book" required></td>
                    <td><input type="text" name="writer" required></td>
                    <td><input type="text" name="publisher" required></td>
                    <td><input type="date" name="release" required></td>
                    <td><input type="number" name="page"></td>
                    <td><input type="text" name="language"></td>
                    <td><input type="file" name="pdf"></td>
                </tr>
                <tr>
                    <td><input type="text" name="book" required></td>
                    <td><input type="text" name="writer" required></td>
                    <td><input type="text" name="publisher" required></td>
                    <td><input type="date" name="release" required></td>
                    <td><input type="number" name="page"></td>
                    <td><input type="text" name="language"></td>
                    <td><input type="file" name="pdf"></td>
                </tr>
                <tr>
                    <td><input type="text" name="book" required></td>
                    <td><input type="text" name="writer" required></td>
                    <td><input type="text" name="publisher" required></td>
                    <td><input type="date" name="release" required></td>
                    <td><input type="number" name="page"></td>
                    <td><input type="text" name="language"></td>
                    <td><input type="file" name="pdf"></td>
                </tr>
                <tr>
                    <td><input type="text" name="book" required></td>
                    <td><input type="text" name="writer" required></td>
                    <td><input type="text" name="publisher" required></td>
                    <td><input type="date" name="release" required></td>
                    <td><input type="number" name="page"></td>
                    <td><input type="text" name="language"></td>
                    <td><input type="file" name="pdf"></td>
                </tr>
                <tr>
                    <td><input type="text" name="book" required></td>
                    <td><input type="text" name="writer" required></td>
                    <td><input type="text" name="publisher" required></td>
                    <td><input type="date" name="release" required></td>
                    <td><input type="number" name="page"></td>
                    <td><input type="text" name="language"></td>
                    <td><input type="file" name="pdf"></td>
                </tr>
                <tr>
                    <td><input type="text" name="book" required></td>
                    <td><input type="text" name="writer" required></td>
                    <td><input type="text" name="publisher" required></td>
                    <td><input type="date" name="release" required></td>
                    <td><input type="number" name="page"></td>
                    <td><input type="text" name="language"></td>
                    <td><input type="file" name="pdf"></td>
                </tr>-->
            </table>
            <div id="button">
                <input type="submit" name="Back" value="Back">
                <input type="submit" name="add" value="Upload">
                
            </div>

        </form>
    </div>
</body>

</html>