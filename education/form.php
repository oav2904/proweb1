<section class="section">
    <div class="container">
    	<h1 class="title">
            Experience
        </h1>
<form method="POST">
	<div class="field">
    	<label>Degree</label>
	<div class="control">
    	<input type="text" required name="degree" value="<?= $education['degree'] ?? '' ?>">
	</div>
	</div>

	<div class="field">
    	<label>Description</label>
	<div class="control">
    	<input type="text" required name="description" value="<?= $education['description'] ?? '' ?>">
	</div>
	</div>

	<div class="field">
    	<label>Time Period</label>
	<div class="control">
    	<input type="text" required name="timeperiod" value="<?= $education['timeperiod'] ?? '' ?>">
    </div>
	</div>

	<div class="field">
    	<label>Website</label>
	<div class="control">
    	<input type="text"  name="website" value="<?= $education['website'] ?? '' ?>">
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