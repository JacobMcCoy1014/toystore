<?php   										
	
	// Include the database connection script
	require 'includes/database-connection.php';

	// Retrieve the value of the 'id' parameter from the URL query string
	$rec_id = $_GET['recipe_id'];


	function getInstructions(PDO $pdo, string $id) {

		// SQL query to retrieve recipe instructions based on the instruction ID
		$sql = "SELECT * 
			FROM RecipeInstructions
			WHERE instruction_id= :id;";	// :id is a placeholder for value provided later 
		                              
		// Execute the SQL query using the pdo function and fetch the result
		$inst = pdo($pdo, $sql, ['id' => $id])->fetch();		// Associative array where 'id' is the key and $id is the value. Used to bind the value of $id to the placeholder :id in  SQL query.

		// Return the instruction information 
		return $inst;
	}

	function getIN(PDO $pdo, string $id) {

		// SQL query to retrieve ingredient information based on the ingredient ID
		$sql = "SELECT * 
			FROM Ingredients
			WHERE ingredient_id= :id;";	// :id is a placeholder for value provided later 
		                              

		// Execute the SQL query using the pdo function and fetch the result
		$ing = pdo($pdo, $sql, ['id' => $id])->fetch();		// Associative array where 'id' is the key and $id is the value. Used to bind the value of $id to the placeholder :id in  SQL query.

		// Return the ingredient information 
		return $ing;
	}

	function get_info(PDO $pdo, string $id) {

		// SQL query to retrieve recipe information information based on the recipe ID
		$sql = "SELECT * 
			FROM Recipes
			WHERE recipe_id= :id;";	// :id is a placeholder for value provided later 
		                              

		// Execute the SQL query using the pdo function and fetch the result
		$info = pdo($pdo, $sql, ['id' => $id])->fetch();		// Associative array where 'id' is the key and $id is the value. Used to bind the value of $id to the placeholder :id in  SQL query.

		// Return the recipe information 
		return $info;
	}

	$ing1_1 = getIN($pdo, '0020');
	$ing1_2 = getIN($pdo, '0021');
	$ing1_3 = getIN($pdo, '0022');
	$ing1_4 = getIN($pdo, '0023');
	$ing1_5 = getIN($pdo, '0024');
	$ing1_6 = getIN($pdo, '0025');
	$ing1_7 = getIN($pdo, '0026');
	$ing1_8 = getIN($pdo, '0027');
	$ing1_9 = getIN($pdo, '0028');

	$inst1_1 = getInstructions($pdo, '0012');
	$inst1_2 = getInstructions($pdo, '0013');
	$inst1_3 = getInstructions($pdo, '0014');
	$inst1_4 = getInstructions($pdo, '0015');
	$inst1_5 = getInstructions($pdo, '0016');
	$inst1_6 = getInstructions($pdo, '0017');
	

	$info1 = get_info($pdo, '0001');
    $info2 = get_info($pdo, '0002');
    $info3 = get_info($pdo, '0003');
    $info4 = get_info($pdo, '0004');
    $info5 = get_info($pdo, '0005');
    $info6 = get_info($pdo, '0006');
    $info7 = get_info($pdo, '0007');
    $info8 = get_info($pdo, '0008');
    $info9 = get_info($pdo, '0009');
	$info10 = get_info($pdo, '0010');

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
			<div class="recipe-details-container">
				<div class="recipe-image">
					<!-- Display image of recipe with its name as alt text -->
					<img src="imgs/soup.jpg" alt="A picture of Chicken Noodle Soup">
				</div>

				<div class="recipe-details">

					<!-- Display name of Recipe and the difficulty -->
			        <h1><?= 'Chicken Noodle Soup' ?></h1> <p> Difficulty:  <?= $info3['difficulty'] ?> </p>

			        <hr />
					<br />
					

			        <h3>Ingredients</h3>

					<hr />		  
					<p><?= $ing1_1['ingredient_name'] ?>  :  <?= $ing1_1['quantity'] ?>   <?= $ing1_1['unit'] ?> </p>
					<p><?= $ing1_2['ingredient_name'] ?>  :  <?= $ing1_2['quantity'] ?>   <?= $ing1_2['unit'] ?> </p>
					<p><?= $ing1_3['ingredient_name'] ?>  :  <?= $ing1_3['quantity'] ?>   <?= $ing1_3['unit'] ?> </p>
					<p><?= $ing1_4['ingredient_name'] ?>  :  <?= $ing1_4['quantity'] ?>   <?= $ing1_4['unit'] ?> </p>
					<p><?= $ing1_5['ingredient_name'] ?>  :  <?= $ing1_5['quantity'] ?>   <?= $ing1_5['unit'] ?> </p>
					<p><?= $ing1_6['ingredient_name'] ?>  :  <?= $ing1_6['quantity'] ?>   <?= $ing1_6['unit'] ?> </p>
					<p><?= $ing1_7['ingredient_name'] ?>  :  <?= $ing1_7['quantity'] ?>   <?= $ing1_7['unit'] ?> </p>
					<p><?= $ing1_8['ingredient_name'] ?>  :  <?= $ing1_8['quantity'] ?>   <?= $ing1_8['unit'] ?> </p>
					<p><?= $ing1_9['ingredient_name'] ?>  :  <?= $ing1_9['quantity'] ?>   <?= $ing1_9['unit'] ?> </p>

			        <br />

			        <h3>Instructions</h3>
					<hr />

			        <p><?= $inst1_1['step_number'] ?>  :  <?= $inst1_1['instruction'] ?> </p>
					<p><?= $inst1_2['step_number'] ?>  :  <?= $inst1_2['instruction'] ?> </p>
					<p><?= $inst1_3['step_number'] ?>  :  <?= $inst1_3['instruction'] ?> </p>
					<p><?= $inst1_4['step_number'] ?>  :  <?= $inst1_4['instruction'] ?> </p>
					<p><?= $inst1_5['step_number'] ?>  :  <?= $inst1_5['instruction'] ?> </p>
					<p><?= $inst1_6['step_number'] ?>  :  <?= $inst1_6['instruction'] ?> </p>

					<br /> 

					<h3>Cooking Time & Servings</h3>
					<hr />
					<p>Prep Time:  <?= $info3['prep_time'] ?> minutes </p>
					<p>Cook Time:  <?= $info3['cook_time'] ?> minutes </p>
					<p>Total Time:  <?= $info3['total_time'] ?> minutes </p>
					<p>Servings:  <?= $info3['servings'] ?> </p>

					


			    </div>
			</div>
		</main>

	</body>
</html>
