
<title><?php echo( $post -> name ) ?> - <?php showOption( 'name' ); ?></title>
	<h2>Get In Touch</h2>
	<form method="post" action="">
		<div class="field">
			<input type="text" name="name" id="name" placeholder="Name" />
		</div>
		<div class="field">
			<input type="email" name="email" id="email" placeholder="Email" />
		</div>
		<div class="field">
			<div class="select-wrapper">
				<select name="department" id="department">
					<option value="">Subject</option>
					<option value="sales">Sales</option>
					<option value="tech">Tech Support</option>
					<option value="null">/dev/null</option>
				</select>
			</div>
		</div>
		<div class="field">
			<textarea name="message" id="message" placeholder="Message" rows="4"></textarea>
		</div>
		<ul class="actions">
			<?php csrf(); ?>
			<li><button class="button" type="submit">SUBMIT</button></li>
		</ul>
	</form>