<?php

require 'includes/database.php';
require 'includes/article.php';

$conn = getDB();

if ( isset($_GET['id'])) {

    $article = getArticle($conn, $_GET['id']);

} else {
  $article = null;
}

?>

<?php require 'includes/header.php'; ?>

    <?php if ($article === null): ?>
      <p>Article not found.</p>
    <?php else: ?>
        <article>
        <h2><?= htmlspecialchars($article['title']);?></h2>
        <p><?= htmlspecialchars($article['content']);?></p>
        </article>
                        <!-- htmlspecialchars not needed when guaranteed int -->
        <a href="edit-article.php?id=<?= $article['id']; ?>">Edit</a>
                        <!-- links are GET - must use form for POST -->
        <a href="delete-article.php?id=<?= $article['id']; ?>">Delete</a>
        </form>

  <?php endif; ?>

  <?php require 'includes/footer.php'; ?>
