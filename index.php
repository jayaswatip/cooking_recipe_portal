<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cooking Recipe Portal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #fff8f0;
    }
    .recipe-card {
      transition: transform 0.2s ease-in-out;
    }
    .recipe-card:hover {
      transform: scale(1.02);
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">🍳 RecipePortal</a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Register</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-light p-5 text-center">
    <h1 class="display-4">Discover Delicious Recipes</h1>
    <p class="lead">Find and share everyday cooking inspiration on our portal.</p>
    <a href="#" class="btn btn-warning">Add Your Recipe</a>
  </header>

  <div class="container my-5">
    <div class="row g-4">
      <!-- Sample Recipe Card -->
      <div class="col-md-4">
        <div class="card recipe-card shadow-sm">
          <img src="https://source.unsplash.com/400x250/?food" class="card-img-top" alt="Recipe Image">
          <div class="card-body">
            <h5 class="card-title">Spaghetti Bolognese</h5>
            <p class="card-text">A classic Italian pasta dish with meat sauce.</p>
            <a href="#" class="btn btn-outline-warning">View Recipe</a>
          </div>
        </div>
      </div>
      <!-- Add more recipe cards dynamically -->
    </div>
  </div>

  <footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">© 2025 RecipePortal. All Rights Reserved.</p>
  </footer>
</body>
</html>
