<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Chege's Store</title>
		<!--boostrap links-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
		
		<!--font awesome-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		<!--css styles-->
		<link rel="stylesheet" href="style.css">
	
	</head>
	<body>
		<!--Nav Bar-->
		<div class="container-fluid p-0">
			<!--first child-->
			<nav class="navbar navbar-expand-lg bg-info">
				<div class="container-fluid">
					<img src="./images/logo.png" alt="Chege's Store" class="logo">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="#">Products</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="#">Register</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i><sup>2</sup></a>
						</li>
						<li class="nav-item">
						<a class="nav-link" href="#">Total Price: 100/=</a>
						</li>
					</ul>
					<form class="d-flex" role="search">
						<input class="form-control me-2" type="search" placeholder="Search Your Product" aria-label="Search">
						<button class= "btn btn-outline-light" type="submit">Search</button>
					</form>
					</div>
				</div>
			</nav>
		</div>

		<!-- the second child-->
		<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
			<ul class="navbar-nav me-auto">
				<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#">WElcome Guest</a>
				</li>
				<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="#">Login</a>
				</li>
			</ul>
		</nav>
		<!--third child-->
		<div class="bg-light">
			<h3 class="text-center">Chege's Store</h3>
			<p class="text-center">Store that you will find everything you want</p>
		</div>
		<!--fourth child -->
		<div class="row">
			<!--this section will be used to display products-->
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<img src="..." class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img src="..." class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<img src="..." class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!--products ends here -->
			<!--navigation for categories starts-->
			<div class="col-md-2">
				<h4>Navigate Categories will come here</h4>
			</div>
			<!--navigation for categories ends-->
		</div>




	<!--div last child-->
	<!--footer section remember to uncomment the following
	<div class="bg-info p-3 text-center">
		<p>All rights reserved @ - Designed by Chege Njoroge-2023</p>
	</div>-->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	</body>
</html>