<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | Cowboy Property Management</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header class="site-header">
    <div class="brand"><i class="fa-solid fa-house-chimney"></i> Cowboy Property Management</div>
    <a href="#" class="user underlined">Admin</a>
  </header>

  <div class="app">
    <nav class="sidebar">
      <ul>
        <li><a href="index.php" class="active"><i class="fa-solid fa-house-chimney"></i> Dashboard</a></li>
        <li><a href="units.php"><i class="fa-solid fa-building"></i> Units</a></li>
        <li><a href="maintenance.php"><i class="fa-solid fa-wrench"></i> Maintenance</a></li>
        <li><a href="#"><i class="fa-solid fa-people-group"></i> Residents</a></li>
      </ul>
      <hr>
      <ul>
        <li><a href="login.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
      </ul>
    </nav>

    <main class="content">
      <section class="stats">
        <div class="stat-card">
          <i class="fa-solid fa-building"></i>
          <span class="label">Total Units</span>
          <span class="value">24</span>
        </div>
        <div class="stat-card">
          <i class="fa-solid fa-people-group"></i>
          <span class="label">Occupied</span>
          <span class="value">18</span>
        </div>
        <div class="stat-card">
          <i class="fa-solid fa-house"></i>
          <span class="label">Vacant</span>
          <span class="value">6</span>
        </div>
        <div class="stat-card">
          <i class="fa-solid fa-wrench"></i>
          <span class="label">Open Requests</span>
          <span class="value">5</span>
        </div>
      </section>

      <section class="panel">
        <h2>Recent Maintenance Requests</h2>
        <table class="simple-table dash-table">
          <thead>
            <tr><th>Unit</th><th>Issue</th><th>Status</th></tr>
          </thead>
          <tbody>
            <tr><td>101</td><td>Plumbing</td><td><span class="badge badge-pending">Pending</span></td></tr>
            <tr><td>204</td><td>AC Repair</td><td><span class="badge badge-in-progress">In Progress</span></td></tr>
            <tr><td>305</td><td>Electrical</td><td><span class="badge badge-completed">Completed</span></td></tr>
          </tbody>
        </table>
      </section>

      <div class="dash-actions">
        <a href="add-unit.php" class="btn btn-primary">+ Add Unit</a>
        <a href="maintenance.php" class="btn btn-primary">View Request</a>
      </div>
    </main>
  </div>
</body>
</html>
