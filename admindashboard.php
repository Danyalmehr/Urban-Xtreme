<?php require 'database.php';
session_start();
//echo "successful";?>



<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>


        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

    <title>Dashboard</title>

	<style>
		.btn-course {
			height: 100px;
			vertical-align: middle;
		}
		.course-btn:hover{

			color: #3E4FD7;
		}
		.course-txt{
			vertical-align:middle;
		}

		.btn-lg{
			height: 10em;
		}

		.btn-course{
			margin-top: 2em;
			margin-left: 1em;
		}
		.course{
			margin-left: 1em;
		}
    a
    {
      text-decoration: none;
      color: White;
    }
    a:hover{text-decoration: none;
    color: White;}

	</style>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>

    <div class="container-fluid">
      <?php include("admin-side-dash.html") ?>

    	<div class="row">

                    <div class="col-md-12">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid course">
					<h1 style="margin: 1em"> Available Courses</h1>


	<?php

					$courses = "SELECT *
          FROM courses
          ";
					$result = mysqli_query($con,$courses);



					while ($row=mysqli_fetch_array($result))
              {
                $course_name=$row['course_name'];
                $course_id=$row['course_id'];
                $course_desc=$row['course_desc'];
                $course_video=$row['course_video'];



?>
            <form class="" action="user-test.php" method="post">

              <button type="submit" name="selectedcourse" class="btn btn-outline-dark btn-lg span5 btn-course" style="margin-left:0.5em"><span style="font-size:20px"><?= $course_name ?></span></button>
            </form>

<?php

    }
?>
                                </div>

                            </div>
						</div>
					</div>
          </div>
        </div>
	<?php include("include/footer.inc") ?>

</body>
</html>
