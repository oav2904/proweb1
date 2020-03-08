<form method="POST">
    <label>Company name</label>
    <input type="text" name="company" value="<?= $experience['company'] ?? '' ?>">
    <label>Position</label>
    <input type="text" name="position" value="<?= $experience['position'] ?? '' ?>">
    <label>Description</label>
    <input type="text" name="description" value="<?= $experience['description'] ?? '' ?>">
    <label>Time Period</label>
    <input type="text" name="timeperiod" value="<?= $experience['timeperiod'] ?? '' ?>">
    <button>Save</button>
</form>