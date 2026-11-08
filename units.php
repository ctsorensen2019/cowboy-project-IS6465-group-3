<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Unit Management | Cowboy Property Management</title>
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
        <h1 class="page-title">Unit Management</h1>
        <a href="add-unit.php" class="btn btn-primary">+ Add Unit</a>
      </div>

      <input type="text" class="search" placeholder="Search units..." aria-label="Search units">

      <div class="table-box">
        <table class="simple-table">
          <thead>
            <tr><th>Unit</th><th>Property</th><th>Status</th><th>Resident</th><th>Actions</th></tr>
          </thead>
          <tbody>
            <tr>
              <td>101</td><td>Oak St.</td><td>Occupied</td><td>J. Preston</td>
              <td class="actions">
                <a href="edit-unit.php" title="Edit"><i class="fa-solid fa-pen"></i></a>
                <a href="#" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
              </td>
            </tr>
            <tr>
              <td>102</td><td>Oak St.</td><td>Vacant</td><td>-</td>
              <td class="actions">
                <a href="edit-unit.php" title="Edit"><i class="fa-solid fa-pen"></i></a>
                <a href="#" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
              </td>
            </tr>
            <tr>
              <td>204</td><td>Pine Ave.</td><td>Occupied</td><td>C. Bradshaw</td>
              <td class="actions">
                <a href="edit-unit.php" title="Edit"><i class="fa-solid fa-pen"></i></a>
                <a href="#" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</body>
</html>
