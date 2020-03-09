<section class="section">
    <div class="container">
    	<h1 class="title">
            Experience
        </h1>
<form method="POST">
	<div class="field">
    	<label> name</label>
	<div class="control">
    	<input type="text" required name="name" value="<?= $contribution['name'] ?? '' ?>">
	</div>
	</div>

	<div class="field">
    	<label>Description</label>
	<div class="control">
    	<input type="text" required name="description" value="<?= $contribution['description'] ?? '' ?>">
	</div>
	</div>

	<div class="field">
    	<label>Url</label>
	<div class="control">
    	<input type="text" name="url" value="<?= $contribution['url'] ?? '' ?>">
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