<!DOCTYPE html>
<html>
<head>
	<title>Job Lister</title>
	<!-- <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/flatly/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<br>
	 <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="index.php">Home</a></li>
            <li role="presentation"><a href="create.php">Create Listing</a></li>
          </ul>
        </nav>
          									<a href="index.php" title="Job Board" rel="home">
							<img class="main-logo" src="logo.png" alt="job board" />
						</a>

      </div>
      <?php displayMessage(); ?>