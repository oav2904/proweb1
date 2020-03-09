<section class="section">
    <div class="container">
    	<h1 class="title">
            skill
        </h1>
<form method="POST">
	<div class="field">
    	<label> Name</label>
	<div class="control">
    	<input type="text" name="name" value="<?= $skill['name'] ?? '' ?>">
	</div>
	</div>
    <div class="field">
        <label> Value</label>
    <div class="control">
        <input type="text" name="name" value="<?= $skill['value'] ?? '' ?>">
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