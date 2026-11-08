<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Unit | Cowboy Property Management</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header class="site-header">
    <div class="brand"><i class="fa-solid fa-house-chimney"></i> Cowboy Property Management</div>
    <a href="#" class="user">Admin</a>
  </header>

  <div class="app">
    <nav class="sidebar">
      <ul>
        <li><a href="index.php"><i class="fa-solid fa-house-chimney"></i> Dashboard</a></li>
        <li><a href="units.php" class="active"><i class="fa-solid fa-building"></i> Units</a></li>
        <li><a href="maintenance.php"><i class="fa-solid fa-wrench"></i> Maintenance</a></li>
        <li><a href="#"><i class="fa-solid fa-people-group"></i> Residents</a></li>
      </ul>
      <hr>
      <ul>
        <li><a href="login.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
      </ul>
    </nav>

    <main class="content">
      <div class="page-head">
        <h1 class="page-title"><a href="units.php" class="back" aria-label="Back to units"><i class="fa-solid fa-arrow-left"></i></a> Add / Edit Unit</h1>
      </div>

      <form class="form-card" action="units.php" method="post">
        <div class="form-grid">
          <div class="field">
            <label for="unit_number">Unit Number *</label>
            <input type="text" id="unit_number" name="unit_number" required>
          </div>
          <div class="field">
            <label for="property">Property / Address *</label>
            <input type="text" id="property" name="property" required>
          </div>
          <div class="field">
            <label for="bedrooms">Bedrooms</label>
            <input type="text" id="bedrooms" name="bedrooms">
          </div>
          <div class="field">
            <label for="bathrooms">Bathrooms</label>
            <input type="text" id="bathrooms" name="bathrooms">
          </div>
          <div class="field">
            <label for="rent">Rent Amount (Monthly)</label>
            <input type="text" id="rent" name="rent">
          </div>
          <div class="field">
            <label for="status">Status*</label>
            <input type="text" id="status" name="status" required>
          </div>
          <div class="field full">
            <label for="notes">Notes (Optional)</label>
            <textarea id="notes" name="notes"></textarea>
          </div>
        </div>

        <div class="form-buttons">
          <a href="units.php" class="btn btn-secondary">Cancel</a>
          <button type="submit" class="btn btn-primary">Save Unit</button>
        </div>
      </form>
    </main>
  </div>
</body>
</html>
