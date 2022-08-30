<?php

require '../includes/init.php';

Auth::requireLogin();

$conn = require '../includes/db.php';

if ( isset($_GET['id'])) {

    $article = Article::getByID($conn, $_GET['id']);

    if(! $article) {

      die("article not found.");
    }

} else {

  die("ID not supplied, article not found.");

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if ($article->delete($conn)){

    Url::redirect("/admin/index.php");
    }
  }

?>

<?php require '../includes/header.php'; ?>
<div class="delete-item">
  <h2>Delete Article</h2>

  <form method="post" class="delete-opt-box">
    <p class="delete-opts">Are you sure?</p>

    <button class="delete-opts">Delete</button>

    <a class="delete-opts" href="article.php?id=<?= $article->id; ?>">Cancel</a>

  </form>
</div>

<?php require '../includes/footer.php'; ?>
