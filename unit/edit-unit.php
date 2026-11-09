<?php
$pageTitle = 'Edit Unit';
$activePage = 'units';
$units = [
    [
        'unit' => '101',
        'property' => 'Oak St.',
        'status' => 'Occupied',
        'resident' => 'J. Preston',
        'bed' => '1',
        'bath' => '1',
        'price' => '1150'
    ],
    [
        'unit' => '102',
        'property' => 'Oak St.',
        'status' => 'Vacant',
        'resident' => '',
        'bed' => '2',
        'bath' => '1.5',
        'price' => '1800'
    ],
    [
        'unit' => '204',
        'property' => 'Pine Ave.',
        'status' => 'Occupied',
        'resident' => 'C. Bradshaw',
        'bed' => '2',
        'bath' => '3',
        'price' => '3000'
    ]
];

$unitId = isset($_GET['unit_id']) && is_string($_GET['unit_id']) ? trim($_GET['unit_id']) : '';
$unit = null;
foreach ($units as $unitRecord) {
    if ($unitRecord['unit'] === $unitId) {
        $unit = $unitRecord;
        break;
    }
}

if ($unit === null) {
    http_response_code(404);
    exit('Unit not found.');
}

require_once __DIR__ . '/../includes/header.php';
?>
  <div class="app">
<?php require_once __DIR__ . '/../includes/nav.php'; ?>

    <main class="content">
      <div class="page-head">
        <h1 class="page-title"><a href="<?= BASE_URL ?>/unit/units.php" class="back" aria-label="Back to units"><i class="fa-solid fa-arrow-left"></i></a> Edit Unit <?php echo htmlspecialchars($unit['unit'], ENT_QUOTES, 'UTF-8'); ?></h1>
      </div>

      <form class="form-card" action="<?= BASE_URL ?>/unit/units.php" method="post">
        <div class="form-grid">
          <div class="field"><label for="unit_number">Unit Number *</label><input type="text" id="unit_number" name="unit_number" value="<?php echo htmlspecialchars($unit['unit'], ENT_QUOTES, 'UTF-8'); ?>" required></div>
          <div class="field"><label for="property">Property / Address *</label><input type="text" id="property" name="property" value="<?php echo htmlspecialchars($unit['property'], ENT_QUOTES, 'UTF-8'); ?>" required></div>
          <div class="field"><label for="bed">Bedrooms</label><input type="number" id="bed" name="bed" min="0" step="1" value="<?php echo htmlspecialchars($unit['bed'], ENT_QUOTES, 'UTF-8'); ?>"></div>
          <div class="field"><label for="bath">Bathrooms</label><input type="number" id="bath" name="bath" min="0" step="0.5" value="<?php echo htmlspecialchars($unit['bath'], ENT_QUOTES, 'UTF-8'); ?>"></div>
          <div class="field"><label for="price">Rent Amount (Monthly)</label><input type="number" id="price" name="price" min="0" step="0.01" value="<?php echo htmlspecialchars($unit['price'], ENT_QUOTES, 'UTF-8'); ?>"></div>
          <div class="field">
            <label for="status">Status *</label>
            <select id="status" name="status" required>
              <?php foreach (['Vacant', 'Occupied', 'Unavailable'] as $statusOption) { ?>
                <option value="<?php echo $statusOption; ?>"<?php echo $unit['status'] === $statusOption ? ' selected' : ''; ?>><?php echo $statusOption; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="field full"><label for="notes">Notes (Optional)</label><textarea id="notes" name="notes"><?php echo htmlspecialchars($unit['notes'] ?? '', ENT_QUOTES, 'UTF-8'); ?></textarea></div>
        </div>
        <div class="form-buttons">
          <a href="<?= BASE_URL ?>/unit/units.php" class="btn btn-secondary">Cancel</a>
          <button type="submit" class="btn btn-primary">Save Unit</button>
        </div>
      </form>
    </main>
  </div>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
