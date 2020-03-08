<section class="section">
    <div class="container">
    	<h1 class="title">
            Experience
        </h1>
<form method="POST">
	<div class="field">
    	<label>Company name</label>
	<div class="control">
    	<input type="text" name="company" value="<?= $experience['company'] ?? '' ?>">
	</div>
	</div>

	<div class="field">
    	<label>Position</label>
	<div class="control">
    	<input type="text" name="position" value="<?= $experience['position'] ?? '' ?>">
	</div>
	</div>

	<div class="field">
    	<label>Description</label>
	<div class="control">
    	<input type="text" name="description" value="<?= $experience['description'] ?? '' ?>">
	</div>
	</div>

	<div class="field">
    	<label>Time Period</label>
	<div class="control">
    	<input type="text" name="timeperiod" value="<?= $experience['timeperiod'] ?? '' ?>">
    </div>
	</div>
	<div class="field is-grouped">
    <div class="control">
    	<button class = "button is-link">Save</button>
    </div>
	</div>

</form>

</div>
</section>