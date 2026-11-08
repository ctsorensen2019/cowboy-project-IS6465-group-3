<?php
$pageTitle = 'Unit Management';
$activePage = 'units';
require_once __DIR__ . '/../includes/header.php';
?>
  <div class="app">
<?php require_once __DIR__ . '/../includes/nav.php'; ?>

    <main class="content">
      <div class="page-head">
        <h1 class="page-title">Unit Management</h1>
        <a href="<?= BASE_URL ?>/unit/add-unit.php" class="btn btn-primary">+ Add Unit</a>
      </div>

      <input type="text" class="search" placeholder="Search units..." aria-label="Search units">

      <div class="table-box">
        <table class="simple-table">
          <thead><tr><th>Unit</th><th>Property</th><th>Status</th><th>Resident</th><th>Actions</th></tr></thead>
          <tbody>
            <tr>
              <td>101</td><td>Oak St.</td><td>Occupied</td><td>J. Preston</td>
              <td class="actions">
                <a href="<?= BASE_URL ?>/unit/edit-unit.php?id=101" title="Edit"><i class="fa-solid fa-pen"></i></a>
                <a href="<?= BASE_URL ?>/unit/delete-unit.php?id=101" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
              </td>
            </tr>
            <tr>
              <td>102</td><td>Oak St.</td><td>Vacant</td><td>-</td>
              <td class="actions">
                <a href="<?= BASE_URL ?>/unit/edit-unit.php?id=102" title="Edit"><i class="fa-solid fa-pen"></i></a>
                <a href="<?= BASE_URL ?>/unit/delete-unit.php?id=102" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
              </td>
            </tr>
            <tr>
              <td>204</td><td>Pine Ave.</td><td>Occupied</td><td>C. Bradshaw</td>
              <td class="actions">
                <a href="<?= BASE_URL ?>/unit/edit-unit.php?id=204" title="Edit"><i class="fa-solid fa-pen"></i></a>
                <a href="<?= BASE_URL ?>/unit/delete-unit.php?id=204" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
