<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Maintenance Request | Cowboy Property Management</title>
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
        <li><a href="units.php"><i class="fa-solid fa-building"></i> Units</a></li>
        <li><a href="maintenance.php" class="active"><i class="fa-solid fa-wrench"></i> Maintenance</a></li>
        <li><a href="#"><i class="fa-solid fa-people-group"></i> Residents</a></li>
      </ul>
      <hr>
      <ul>
        <li><a href="login.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
      </ul>
    </nav>

    <main class="content">
      <div class="page-head">
        <h1 class="page-title"><a href="maintenance.php" class="back" aria-label="Back to maintenance requests"><i class="fa-solid fa-arrow-left"></i></a> Add / Edit Maintenance Request</h1>
      </div>

      <form class="form-card" action="maintenance.php" method="post">
        <div class="form-grid">
          <div class="field">
            <label for="request_id">Request ID</label>
            <input type="text" id="request_id" name="request_id" value="REQ - 006" readonly>
          </div>
          <div class="field">
            <label for="unit">Unit *</label>
            <input type="text" id="unit" name="unit" required>
          </div>
          <div class="field">
            <label for="issue">Issue / Category*</label>
            <input type="text" id="issue" name="issue" required>
          </div>
          <div class="field">
            <label for="status">Status *</label>
            <input type="text" id="status" name="status" required>
          </div>
          <div class="field full">
            <label for="description">Description *</label>
            <textarea id="description" name="description" required></textarea>
          </div>
          <div class="field">
            <label for="date_submitted">Date Submitted</label>
            <input type="text" id="date_submitted" name="date_submitted">
          </div>
          <div class="field">
            <label for="assigned_to">Assigned to (optional)</label>
            <input type="text" id="assigned_to" name="assigned_to">
          </div>
        </div>

        <div class="form-buttons">
          <a href="maintenance.php" class="btn btn-secondary">Cancel</a>
          <button type="submit" class="btn btn-primary">Save Request</button>
        </div>
      </form>
    </main>
  </div>
</body>
</html>
