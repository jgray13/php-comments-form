<?php
include('includes/header.html');
?>
		    <form action="form-handler.php" method="POST">
			    <div id="form-inner">
			        <label for="name">Name: </label>
				    <input type="text" name="name" id="name" required><br>
				    <label for="email">Email: </label>
				    <input type="email" name="email" id="email" required><br>
				    <label for="comments">Comments: </label>
				    <textarea name="comments" rows="5" cols="25"></textarea><br>
				    <input type="submit" name="submit" id="submit-button" value="Submit">
				</div>
			</form>
<?php
include('includes/footer.html');
?>