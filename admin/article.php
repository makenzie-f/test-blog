<?php

require '../includes/init.php';

Auth::requireLogin();

$conn = require '../includes/db.php';

if ( isset($_GET['id'])) {

    $article = Article::getByID($conn, $_GET['id']);

} else {
  $article = null;
}

?>

<?php require '../includes/header.php'; ?>
 <div class="admin-item">
    <?php if ($article): ?>
        <article>
          <h2><?= htmlspecialchars($article->title);?></h2>
          <p><?= htmlspecialchars($article->content);?></p>
          <hr>
        </article>
        <div class="admin-link-box">
          <div class="admin-links">
            <a href="edit-article.php?id=<?= $article->id; ?>">Edit</a>
          </div>
          <div class="admin-links">
            <a href="delete-article.php?id=<?= $article->id; ?>">Delete</a>
          </div>
        </div>
      <?php else: ?>
        <p>Article not found.</p>

  <?php endif; ?>
 </div>
  <?php require '../includes/footer.php'; ?>
