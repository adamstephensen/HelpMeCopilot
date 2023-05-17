// The article parameter is assigned to $article variable without any sanitisation or validation 
$article = $_GET['article'];

/* The $article parameter is passed as part of the query */
$query = "SELECT * FROM articles WHERE articleid = $articleid";

