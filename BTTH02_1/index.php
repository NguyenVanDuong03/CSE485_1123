<!doctype html>
<html lang="en">
	<head>
		<title>Title</title>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>

		<!-- Bootstrap CSS v5.2.1 -->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
			crossorigin="anonymous"
		/>
		
	</head>

	<body>
		<header>
			<!-- place navbar here -->
		</header>
		<main>
		<div class="container">		
	<h2>Example: Comment System with Ajax, PHP & MySQL</h2>		
	<form method="POST" id="commentForm">
		<div class="form-group">
			<input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required />
		</div>
		<div class="form-group">
			<textarea name="comment" id="comment" class="form-control" placeholder="Enter Comment" rows="5" required></textarea>
		</div>
		<span id="message"></span>
		<div class="form-group">
			<input type="hidden" name="commentId" id="commentId" value="0" />
			<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Post Comment" />
		</div>
	</form>		
	<div id="showComments"></div>   
</div>	

		</main>
		<footer>
			<!-- place footer here -->
		</footer>
		<!-- Bootstrap JavaScript Libraries -->
		
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<!-- <script
			src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
			integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
			crossorigin="anonymous"
		></script>
	
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
			integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
			crossorigin="anonymous"
		></script> -->
		<script src="comments.js"></script>
	</body>
</html>
