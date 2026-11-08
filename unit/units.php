<?php
$pageTitle = 'Unit Management';
$activePage = 'units';
require_once __DIR__ . '/../includes/header.php';
$units = [
    [
        'unit' => '101',
        'property' => 'Oak St.',
        'status' => 'Occupied',
        'resident' => 'J. Preston'
    ],
    [
        'unit' => '102',
        'property' => 'Oak St.',
        'status' => 'Vacant',
        'resident' => ''
    ],
    [
        'unit' => '204',
        'property' => 'Pine Ave.',
        'status' => 'Occupied',
        'resident' => 'C. Bradshaw'
    ]
];
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
          <thead>
            <tr>
                <th>Unit</th>
                <th>Property</th>
                <th>Status</th>
                <th>Resident</th>
                <th>Actions</th>
            </tr>
          </thead>
          <tbody>
              <?php foreach ($units as $unit) { ?>
                  <tr>
                      <td><?php echo htmlspecialchars($unit['unit'], ENT_QUOTES, 'UTF-8'); ?></td>
                      <td><?php echo htmlspecialchars($unit['property'], ENT_QUOTES, 'UTF-8'); ?></td>
                      <td><?php echo htmlspecialchars($unit['status'], ENT_QUOTES, 'UTF-8'); ?></td>
                      <td><?php echo htmlspecialchars($unit['resident'], ENT_QUOTES, 'UTF-8'); ?></td>
                      <td class="actions">
                          <a href="<?= BASE_URL ?>/unit/edit-unit.php?id=<?php echo rawurlencode($unit['unit']); ?>" title="Edit"><i class="fa-solid fa-pen"></i></a>
                          <a href="<?= BASE_URL ?>/maintenance/delete-unit.php?id=<?php echo $unit['unit']; ?>" title="Delete"><i class="fa-solid fa-trash-can"></i></a>
                          <a class="btn btn-outline-primary btn-sm"
                            href="unit-details.php?unit=<?php echo $unit['unit']; ?>">
                              View
                          </a>
                      </td>
                  </tr>
              <?php } ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
