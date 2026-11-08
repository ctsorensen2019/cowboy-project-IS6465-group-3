<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maintenance Requests | Cowboy Property Management</title>
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
        <h1 class="page-title"><i class="fa-solid fa-wrench"></i> Maintenance Requests</h1>
        <a href="add-maintenance.php" class="btn btn-primary">+ New Request</a>
      </div>

      <div class="filter-row">
        <div class="search-wrap">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input type="text" placeholder="Search by unit, issue, or request ID" aria-label="Search requests">
        </div>
        <label for="status_filter">Status</label>
        <input type="text" id="status_filter" class="status-filter">
      </div>

      <table class="grid-table">
        <thead>
          <tr>
            <th>Request ID</th><th>Unit</th><th>Issue</th><th>Date Submitted</th><th>Status</th><th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>REQ-001</td><td>101</td><td>Leaking Faucet</td><td>10/18/2026</td>
            <td class="status-pending">Pending</td>
            <td class="actions">
              <a href="edit-maintenance.php" title="Edit"><i class="fa-solid fa-pen"></i></a>
              <a href="#" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
            </td>
          </tr>
          <tr>
            <td>REQ-002</td><td>204</td><td>AC not cooling</td><td>10/27/2026</td>
            <td class="status-in-progress">In progress</td>
            <td class="actions">
              <a href="edit-maintenance.php" title="Edit"><i class="fa-solid fa-pen"></i></a>
              <a href="#" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
            </td>
          </tr>
          <tr>
            <td>REQ-003</td><td>305</td><td>Broken Window</td><td>10/25/2026</td>
            <td class="status-completed">Completed</td>
            <td class="actions">
              <a href="edit-maintenance.php" title="Edit"><i class="fa-solid fa-pen"></i></a>
              <a href="#" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
            </td>
          </tr>
          <tr>
            <td>REQ-004</td><td>207</td><td>Dishwasher not draining</td><td>10/24/2026</td>
            <td class="status-in-progress">In progress</td>
            <td class="actions">
              <a href="edit-maintenance.php" title="Edit"><i class="fa-solid fa-pen"></i></a>
              <a href="#" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
            </td>
          </tr>
          <tr>
            <td>REQ-005</td><td>102</td><td>Electrical Outlet not working</td><td>10/22/2026</td>
            <td class="status-completed">Completed</td>
            <td class="actions">
              <a href="edit-maintenance.php" title="Edit"><i class="fa-solid fa-pen"></i></a>
              <a href="#" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
            </td>
          </tr>
        </tbody>
      </table>
    </main>
  </div>
</body>
</html>
