<?php
$pageTitle = 'Add Unit';
$activePage = 'units';
require_once __DIR__ . '/../includes/header.php';
?>
  <div class="app">
<?php require_once __DIR__ . '/../includes/nav.php'; ?>

    <main class="content">
      <div class="page-head">
        <h1 class="page-title"><a href="<?= BASE_URL ?>/unit/units.php" class="back" aria-label="Back to units"><i class="fa-solid fa-arrow-left"></i></a> Add / Edit Unit</h1>
      </div>

      <form class="form-card" action="<?= BASE_URL ?>/unit/units.php" method="post">
        <div class="form-grid">
          <div class="field"><label for="unit_number">Unit Number *</label><input type="text" id="unit_number" name="unit_number" required></div>
          <div class="field"><label for="property">Property / Address *</label><input type="text" id="property" name="property" required></div>
          <div class="field"><label for="bedrooms">Bedrooms</label><input type="text" id="bedrooms" name="bedrooms"></div>
          <div class="field"><label for="bathrooms">Bathrooms</label><input type="text" id="bathrooms" name="bathrooms"></div>
          <div class="field"><label for="rent">Rent Amount (Monthly)</label><input type="text" id="rent" name="rent"></div>
          <div class="field"><label for="status">Status*</label><input type="text" id="status" name="status" required></div>
          <div class="field full"><label for="notes">Notes (Optional)</label><textarea id="notes" name="notes"></textarea></div>
        </div>
        <div class="form-buttons">
          <a href="<?= BASE_URL ?>/unit/units.php" class="btn btn-secondary">Cancel</a>
          <button type="submit" class="btn btn-primary">Save Unit</button>
        </div>
      </form>
    </main>
  </div>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
