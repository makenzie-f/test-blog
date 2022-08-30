<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Intro Web Development</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <header>
    <h1>My Blog</h1>
  </header>

  <nav class="flex-box">
    <ul class="flex-item">
      <!-- Need to use /~francom1/ because of Elvis directories -->
      <li>
        <a href="/~francom1/MA16/">Home</a>
      </li>
      <?php if (Auth::isLoggedIn()): ?>
        <li>
          <!-- Need to use /~francom1/ because of Elvis directories -->
          <a href="/~francom1/MA16/admin/">Admin</a>
        </li>
        <li>
          <!-- Need to use /~francom1/ because of Elvis directories -->
          <a href="/~francom1/MA16/logout.php">Log out</a>
        </li>
      <?php else: ?>
        <li>
          <!-- Need to use /~francom1/ because of Elvis directories -->
          <a href="/~francom1/MA16/login.php">Log in</a>
        </li>
      <?php endif; ?>
    </ul>
  </nav>

  <main class="flex-box">
