<?php
	//get wine name base 64 url
	if (isset($_GET['wine'])) {
		$_SESSION['wine_name_long'] = $_GET['wine'];
	}
?>

<main class="container">
	<div class="row">
		<div class="panel panel-default" id="add-wine">
			<div class="panel-heading">
				<h3 class="text-center">Add New Wine</h3>				
			</div>
			<div class="panel-body">
				<form method="POST">
					<!-- Wine image -->
					<input type="hidden" name="wine_image" value="<?= $wine['image'] ?>">
					<div class="form-group">
					  <label class="col-md-2 control-label" for="textinput">Wine Name</label>  
					  <div class="col-md-10">
						  <input name="wine_name" class="form-control input-md" id="wine_name" type="text" placeholder="e.g. Kendall-Jackson Vintner's Reserve Chardonnay 2015" value="<?= $wine['name'] ?>" required>
						  <span class="help-block">Name of the wine.</span>  
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-2 control-label" for="textinput">Wine Origin</label>  
					  <div class="col-md-10">
						  <input name="wine_origin" class="form-control input-md" id="wine_origin" type="text" placeholder="e.g. California" value="<?= $wine['origin'] ?>" required>
						  <span class="help-block">Origin of the wine.</span>  
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-2 control-label" for="textinput">Wine Description</label>  
					  <div class="col-md-10">
						  <textarea name="wine_desc" class="form-control input-md" id="wine_desc" type="text" placeholder="e.g. A beautiful gold color. The bubbles are persistent, fine and regular..." required><?= $wine['desc'] ?></textarea>
						  <span class="help-block">Description of the wine.</span>  
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-md-2 control-label" for="textinput">Wine Price</label>  
					  <div class="col-md-10">
						<div class="input-group">
							<div class="input-group-addon">
								<input type="hidden" value="$" name="wine_currency">$</input>
							</div>
							<input name="wine_price" type="number" class="form-control" id="wine_price" placeholder="Amount" value="<?= $wine['price'] ?>" min=1 step="0.01" required>
						</div>
						  <span class="help-block">Price of the wine.</span>  
					  </div>
					</div>
					<div class="form-group text-center">
						<div class="col-md-12">
							<button type="reset" class="btn btn-warning">Undo Changes</button>
							<button type="submit" name="wine_edit" class="btn btn-success" id="wine_save">Save</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		
	</div>
</main>