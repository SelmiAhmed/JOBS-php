<?php include 'inc/header.php'; ?>
	
  
      <div class="jumbotron">
        <h1 class="text-center">Find A Job</h1>
        <form method="GET" action="index.php">
        	<select name="category" class="form-control">
        		<option value="0">Choose Category</option>
        		<?php foreach($categories as $category): ?>
        			<option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
        		<?php endforeach; ?>
        	</select>
        	<br>
            <button type="submit" class="btn btn-lg btn-success"  ><span class = "glyphicon glyphicon-search"> Find</span></button>
        </form>
      </div>
      <h1><?php echo $title; ?></h1>

  <?php foreach($jobs as $job): ?>
      <div class="row marketing">
        <div class="jumbotron">
          <h2><?php echo $job->job_title; ?></h2>
          <p><?php echo $job->description; ?></p>
        	<a class="btn btn-info" href="job.php?id=<?php echo $job->id; ?>"><span class = "glyphicon glyphicon-eye-open"></span> View</a>
      </div>        </div>

  <?php endforeach; ?>


<?php include 'inc/footer.php'; ?>