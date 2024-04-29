<?php   										
	
	// Include the database connection script
	require 'includes/database-connection.php';

	function get_recipe(PDO $pdo, string $id) {

		// SQL query to retrieve recipe information based on the recipe ID
		$sql = "SELECT * 
			FROM Recipes
			WHERE recipe_id= :id;";	// :id is a placeholder for value provided later 
		                              

		// Execute the SQL query using the pdo function and fetch the result
		$Recipes = pdo($pdo, $sql, ['id' => $id])->fetch();		// Associative array where 'id' is the key and $id is the value. Used to bind the value of $id to the placeholder :id in  SQL query.

		// Return the recipe information
		return $Recipes;
	}
    function get_review(PDO $pdo, string $id) {

		// SQL query to retrieve recipe information based on the recipe ID
		$sql = "SELECT * 
			FROM Reviews
			WHERE review_id= :id;";	// :id is a placeholder for value provided later 
		                              

		// Execute the SQL query using the pdo function and fetch the result
		$review = pdo($pdo, $sql, ['id' => $id])->fetch();		// Associative array where 'id' is the key and $id is the value. Used to bind the value of $id to the placeholder :id in  SQL query.

		// Return the recipe information
		return $review;
	}

	// Retrieve info about the recipes
	$Recipes1 = get_recipe($pdo, '0001');
    $Recipes2 = get_recipe($pdo, '0002');
    $Recipes3 = get_recipe($pdo, '0003');
    $Recipes4 = get_recipe($pdo, '0004');
    $Recipes5 = get_recipe($pdo, '0005');
    $Recipes6 = get_recipe($pdo, '0006');
    $Recipes7 = get_recipe($pdo, '0007');
    $Recipes8 = get_recipe($pdo, '0008');
    $Recipes9 = get_recipe($pdo, '0009');
	$Recipes10 = get_recipe($pdo, '0010');

    // Retrieve reviews for recipes
    $review1 = get_review($pdo, '0001');
    $review2 = get_review($pdo, '0002');
    $review3 = get_review($pdo, '0003');
    $review4 = get_review($pdo, '0004');
    $review5 = get_review($pdo, '0005');
    $review6 = get_review($pdo, '0006');
    $review7 = get_review($pdo, '0007');
    $review8 = get_review($pdo, '0008');
    $review9 = get_review($pdo, '0009');
    $review10 = get_review($pdo, '0010');
    $review11 = get_review($pdo, '0011');
    $review12 = get_review($pdo, '0012');
    $review13 = get_review($pdo, '0013');
    $review14 = get_review($pdo, '0014');
    $review15 = get_review($pdo, '0015');
    $review16 = get_review($pdo, '0016');
    $review17 = get_review($pdo, '0017');
    $review18 = get_review($pdo, '0018');
    $review19 = get_review($pdo, '0019');
    $review20 = get_review($pdo, '0020');
    $review21 = get_review($pdo, '0021');


?> 

<!DOCTYPE>
<html>

	<head>
		<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<title>Recipe Revolution</title>
  		<link rel="stylesheet" href="css/style.css">
  		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
	</head>

	<body>

		<header>
			<div class="header-left">
				<div class="logo">
					<img src="imgs/logo.png" alt="Recipe Revolution Logo">
      			</div>

	      		<nav>
	      			<ul>
	      				<li><a href="index.php">Recipes</a></li>
	      				<li><a href="about.php">About</a></li>
                        <li><a href="reviews.php">Reviews</a></li>
			        </ul>
			    </nav>
		   	</div>
		</header>

  		<main>
  			<section class="recipe-catalog">

  				<div class="recipe-card">
  					<!-- Create a hyperlink to instructions.php page -->
  					<a href="instructions.php?recipe_id=<?= $Recipes1['recipe_id'] ?>">

  						<!-- Display image of dish with its name as alt text -->
  						<img src="imgs/guacamole.jpg" alt="A picture of Guacamole">
  					</a>

  					<!-- Display name of dish -->
  					<h2><?= $Recipes1['dishname'] ?></h2>

  					<!-- Display review of dish -->
  					<p> * <?= $review1['reviewer_name'] ?> :  <?= $review1['review_text'] ?></p>
                      <p><?= $review1['review_date'] ?></p>
                      <br />
                      <p> * <?= $review2['reviewer_name'] ?> :  <?= $review2['review_text'] ?></p>
                      <p><?= $review2['review_date'] ?></p>
                      <br />
                      <p> * <?= $review3['reviewer_name'] ?> :  <?= $review3['review_text'] ?></p>
                      <p><?= $review3['review_date'] ?></p>
  				</div>


  				<div class="recipe-card">
  					<!-- Create a hyperlink to instructions.php page -->
  					<a href="instructions2.php?recipe_id=<?= $Recipes2['recipe_id'] ?>">

  						<!-- Display image of dish with its name as alt text -->
  						<img src="imgs/spaghetti.jpg" alt="A picture of Spaghetti Bolognese">
  					</a>

  					<!-- Display name of dish -->
  					<h2><?= $Recipes2['dishname'] ?></h2>

  					<!-- Display reviews of dish -->
  					<p> * <?= $review4['reviewer_name'] ?> :  <?= $review4['review_text'] ?></p>
                      <p><?= $review4['review_date'] ?></p>
                      <br />
                      <p> * <?= $review5['reviewer_name'] ?> :  <?= $review5['review_text'] ?></p>
                      <p><?= $review5['review_date'] ?></p>
  				</div>

  				<div class="recipe-card">
  					<!-- Create a hyperlink to instructions.php page -->
  					<a href="instructions3.php?recipe_id=<?= $Recipes3['recipe_id'] ?>">

  						<!-- Display image of dish with its name as alt text -->
  						<img src="imgs/soup.jpg" alt="A picture of homemade Chicken Noodle Soup">
  					</a>

  					<!-- Display name of dish -->
  					<h2><?= $Recipes3['dishname'] ?></h2>

  					<!-- Display reviews of dish -->
  					<p> * <?= $review6['reviewer_name'] ?> :  <?= $review6['review_text'] ?></p>
                      <p><?= $review6['review_date'] ?></p>
                      <br />
                      <p> * <?= $review7['reviewer_name'] ?> :  <?= $review7['review_text'] ?></p>
                      <p><?= $review7['review_date'] ?></p>
  				</div>

  				<div class="recipe-card">
  					<!-- Create a hyperlink to instructions.php page -->
  					<a href="instructions4.php?recipe_id=<?= $Recipes4['recipe_id'] ?>">

  						<!-- Display image of dish with its name as alt text -->
  						<img src="imgs/salad.jpg" alt="A picture of Caesar Salad">
  					</a>

  					<!-- Display name of dish -->
  					<h2><?= $Recipes4['dishname'] ?></h2>

  					<!-- Display reviews of dish -->
  					<p> * <?= $review8['reviewer_name'] ?> :  <?= $review8['review_text'] ?></p>
                      <p><?= $review8['review_date'] ?></p>
                      <br />
                      <p> * <?= $review9['reviewer_name'] ?> :  <?= $review9['review_text'] ?></p>
                      <p><?= $review9['review_date'] ?></p>
  				</div>

  				<div class="recipe-card">
  					<!-- Create a hyperlink to instructions.php page -->
  					<a href="instructions5.php?recipe_id=<?= $Recipes5['recipe_id'] ?>">

  						<!-- Display image of dish with its name as alt text -->
  						<img src="imgs/bananabread.jpg" alt="A picture of fresh banana bread">
  					</a>

  					<!-- Display name of dish -->
  					<h2><?= $Recipes5['dishname'] ?></h2>

  					<!-- Display reviews of dish -->
  					<p> * <?= $review10['reviewer_name'] ?> :  <?= $review10['review_text'] ?></p>
                      <p><?= $review10['review_date'] ?></p>
                      <br />
                      <p> * <?= $review11['reviewer_name'] ?> :  <?= $review11['review_text'] ?></p>
                      <p><?= $review11['review_date'] ?></p>
  				</div>
  				
  				<div class="recipe-card">
  					<!-- Create a hyperlink to instructions.php page -->
  					<a href="instructions6.php?recipe_id=<?= $Recipes6['recipe_id'] ?>">

  						<!-- Display image of dish with its name as alt text -->
  						<img src="imgs/cookies.jpg" alt="A picture of chocolate chip cookies">
  					</a>

  					<!-- Display name of dish -->
  					<h2><?= $Recipes6['dishname'] ?></h2>

  					<!-- Display reviews of dish -->
  					<p> * <?= $review12['reviewer_name'] ?> :  <?= $review12['review_text'] ?></p>
                      <p><?= $review12['review_date'] ?></p>
                      <br />
                      <p> * <?= $review13['reviewer_name'] ?> :  <?= $review13['review_text'] ?></p>
                      <p><?= $review13['review_date'] ?></p>
  				</div>

  				<div class="recipe-card">
  					<!-- Create a hyperlink to instructions.php page -->
  					<a href="instructions7.php?recipe_id=<?= $Recipes7['recipe_id'] ?>">

  						<!-- Display image of dish with its name as alt text -->
  						<img src="imgs/quinoa.jpg" alt="A picture of quinoa salad">
  					</a>

  					<!-- Display name of dish -->
  					<h2><?= $Recipes7['dishname'] ?></h2>

  					<!-- Display reviews of dish -->
  					<p> * <?= $review14['reviewer_name'] ?> :  <?= $review14['review_text'] ?></p>
                      <p><?= $review14['review_date'] ?></p>
                      <br />
                      <p> * <?= $review15['reviewer_name'] ?> :  <?= $review15['review_text'] ?></p>
                      <p><?= $review15['review_date'] ?></p>
  				</div>

  				<div class="recipe-card">
  					<!-- Create a hyperlink to instructions.php page -->
  					<a href="instructions8.php?recipe_id=<?= $Recipes8['recipe_id'] ?>">

  						<!-- Display image of dish with its name as alt text -->
  						<img src="imgs/sushi.jpg" alt="A picture of crab and cucumber sushi rolls">
  					</a>

  					<!-- Display name of dish -->
  					<h2><?= $Recipes8['dishname'] ?></h2>

  					<!-- Display reviews of dish -->
  					<p> * <?= $review16['reviewer_name'] ?> :  <?= $review16['review_text'] ?></p>
                      <p><?= $review16['review_date'] ?></p>
                      <br />
                      <p> * <?= $review17['reviewer_name'] ?> :  <?= $review17['review_text'] ?></p>
                      <p><?= $review17['review_date'] ?></p>
  				</div>

  				<div class="recipe-card">
  					<!-- Create a hyperlink to instructions.php page -->
  					<a href="instructions9.php?recipe_id=<?= $Recipes9['recipe_id'] ?>">

  						<!-- Display image of dish with its name as alt text -->
  						<img src="imgs/pastap.jpg" alt="A picture of pasta primavera">
  					</a>

  					<!-- Display name of dish -->
  					<h2><?= $Recipes9['dishname'] ?></h2>

  					<!-- Display reviews of dish -->
  					<p> * <?= $review18['reviewer_name'] ?> :  <?= $review18['review_text'] ?></p>
                      <p><?= $review18['review_date'] ?></p>
                      <br />
                      <p> * <?= $review19['reviewer_name'] ?> :  <?= $review19['review_text'] ?></p>
                      <p><?= $review19['review_date'] ?></p>
  				</div>

  				<div class="recipe-card">
  					<!-- Create a hyperlink to instructions.php page -->
  					<a href="instructions10.php?recipe_id=<?= $Recipes10['recipe_id'] ?>">

  						<!-- Display image of dish with its name as alt text -->
  						<img src="imgs/turkey.jpg" alt="A picture of roast turkey">
  					</a>

  					<!-- Display name of dish -->
  					<h2><?= $Recipes10['dishname'] ?></h2>

  					<!-- Display reviews of dish -->
  					<p> * <?= $review20['reviewer_name'] ?> :  <?= $review20['review_text'] ?></p>
                      <p><?= $review20['review_date'] ?></p>
                      <br />
                      <p> * <?= $review21['reviewer_name'] ?> :  <?= $review21['review_text'] ?></p>
                      <p><?= $review21['review_date'] ?></p>
  				</div>

  			</section>
  		</main>

	</body>
</html>



