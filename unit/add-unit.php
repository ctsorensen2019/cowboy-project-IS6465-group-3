<?php
$pageTitle = 'Add Unit';
$activePage = 'units';
require_once __DIR__ . '/../includes/header.php';
?>
  <div class="app">
<?php require_once __DIR__ . '/../includes/nav.php'; ?>

    <main class="content">
      <div class="page-head">
        <h1 class="page-title"><a href="<?= BASE_URL ?>/unit/units.php" class="back" aria-label="Back to units"><i class="fa-solid fa-arrow-left"></i></a> Add Unit</h1>
      </div>

      <form class="form-card" action="<?= BASE_URL ?>/unit/units.php" method="post">
        <div class="form-grid">
          <div class="field"><label for="unit_number">Unit Number *</label><input type="text" id="unit_number" name="unit_number" required></div>
          <div class="field"><label for="property">Property / Address *</label><input type="text" id="property" name="property" required></div>
          <div class="field"><label for="bed">Bedrooms</label><input type="number" id="bed" name="bed" min="0" step="1"></div>
          <div class="field"><label for="bath">Bathrooms</label><input type="number" id="bath" name="bath" min="0" step="0.5"></div>
          <div class="field"><label for="price">Rent Amount (Monthly)</label><input type="number" id="price" name="price" min="0" step="0.01"></div>
          <div class="field">
            <label for="status">Status *</label>
            <select id="status" name="status" required>
              <option value="">Select status</option>
              <option value="Vacant">Vacant</option>
              <option value="Occupied">Occupied</option>
              <option value="Unavailable">Unavailable</option>
            </select>
          </div>
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
