<section class="section">
    <div class="container">
    	<h1 class="title">
            Projects
        </h1>
<form method="POST">
	<div class="field">
    	<label>Name</label>
	<div class="control">
    	<input type="text" required  name="name" value="<?= $project['name'] ?? '' ?>">
	</div>
	</div>

	<div class="field">
    	<label>Platform</label>
	<div class="control">
    	<input type="text" required name="platform" value="<?= $project['platform'] ?? '' ?>">
	</div>
	</div>

	<div class="field">
    	<label>Description</label>
	<div class="control">
    	<input type="text" required name="description" value="<?= $project['description'] ?? '' ?>">
	</div>
	</div>

	<div class="field">
    	<label>Url</label>
	<div class="control">
    	<input type="text" name="url" value="<?= $project['url'] ?? '' ?>">
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