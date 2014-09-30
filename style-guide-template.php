<?php
/**
 * The template for displaying the style guide.
 *
 * Template Name: Style guide
 *
 * @package _s
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="container">
			<div class="row">
				<main id="main" class="site-main" role="main">

				<section>
				<div class="container">
					<h2>Grid System</h2>
					
					<hr>

					<div class="row">
						<div class="col-1-1">
							<div class="demo-col">.col-1-1</div>
						</div> <!-- .col-1-1 -->
					</div> <!-- .row -->

					<div class="row">
						<div class="col-1-2">
							<div class="demo-col">.col-1-2</div>
						</div> <!-- .col-1-2 -->

						<div class="col-1-2">
							<div class="demo-col">.col-1-2</div>
						</div> <!-- .col-1-2 -->
					</div> <!-- .row -->

					<div class="row">
						<div class="col-1-3">
							<div class="demo-col">.col-1-3</div>
						</div> <!-- .col-1-3 -->
						<div class="col-1-3">
							<div class="demo-col">.col-1-3</div>
						</div> <!-- .col-1-3 -->
						<div class="col-1-3">
							<div class="demo-col">.col-1-3</div>
						</div> <!-- .col-1-3 -->
					</div> <!-- .row -->

					<div class="row">
						<div class="col-1-4">
							<div class="demo-col">.col-1-4</div>
						</div> <!-- .col-1-4 -->
						<div class="col-1-4">
							<div class="demo-col">.col-1-4</div>
						</div> <!-- .col-1-4 -->
						<div class="col-1-4">
							<div class="demo-col">.col-1-4</div>
						</div> <!-- .col-1-4 -->
						<div class="col-1-4">
							<div class="demo-col">.col-1-4</div>
						</div> <!-- .col-1-4 -->
					</div> <!-- .row -->

				</div> <!-- .container -->
				</section>

				<section>
				<div class="container">
					<h2>Typography</h2>

					<hr>

					<div class="row">
						<div class="col-1-2">
							<h1>Heading 1</h1>
							<h2>Heading 2</h2>
							<h3>Heading 3</h3>
							<h4>Heading 4</h4>
							<h5>Heading 5</h5>
							<h6>Heading 6</h6>
						</div> <!-- .col-1-2 -->

						<div class="col-1-2">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, <a href="#">sed do eiusmod tempor</a> incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

							<p>Duis aute irure dolor in reprehenderit in voluptate <strong>velit esse cillum dolore</strong> eu fugiat <em>nulla pariatur.</em> Excepteur sint occaecat cupidatat non proident, sunt in culpa <strike>qui officia deserunt mollit</strike> anim id est laborum.</p>

		<pre><code>.row:after {
			content: "";
			display: table;
			width: 100%;
		}</code></pre>
							</div> <!-- .col-1-2 -->
						</div> <!-- .row -->

						<div class="row">
							<div class="col-1-2">
								<ul>
									<li>Item 1</li>
									<li>Item 2</li>
									<li>Item 3</li>
									<li>Item 4</li>
									<li>Item 5</li>
								</ul>
							</div> <!-- .col-1-2 -->

							<div class="col-1-2">
								<ol>
									<li>Item 1</li>
									<li>Item 2</li>
									<li>Item 3</li>
									<li>Item 4</li>
									<li>Item 5</li>
								</ol>
							</div> <!-- .col-1-2 -->
						</div> <!-- .row -->

						<blockquote>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.

							<footer><a href="#">This is the author.</a></footer>
						</blockquote>

						<a href="typography.html">full typography style guide</a>
					</div> <!-- .container -->
					</section>

					<section>
					<div class="container">
						<h2>Buttons</h2>
						
						<hr>

						<div class="row">
							<div class="col-1-3">
								<h4>Button styles</h4>

								<p>
								<button class="btn">Default style</button>
								<button class="btn-primary">Primary</button>
								</p>
							</div> <!-- .col-1-3 -->

							<div class="col-1-3">
								<h4>Button sizes</h4>

								<p><button class="btn-small">Small size</button></p>
								<p><button class="btn">Default size</button></p>
								<p><button class="btn-large">Large size</button></p>
							</div> <!-- .col-1-3 -->

							<div class="col-1-3">
								<h4>HTML elements</h4>

								<p><button class="btn">Button</button></p>
								<p><a href="#" class="btn">Anchor tag</a></p>
								<p><input type="submit" class="btn" value="Submit input"></p>
								<p><input type="button" class="btn" value="Button input"></p>
							</div> <!-- .col-1-3 -->
						</div>

					</div>
					</section>

					<section>
					<div class="container">
						<h2>Forms</h2>

						<hr>
						
						<div class="row">
							<div class="col-1-2">
								<form action="">
									<fieldset>
										<legend>Inputs</legend>

										<div class="field-group">
											<label for="demo-input-1">This is a label</label>
											<input type="text" id="demo-input-1" placeholder="This is a text input" />

											<p class="help">This is a contextual help for the field above.</p>
										</div> <!-- .field-group -->

										<div class="field-group field-error">
											<label for="demo-input-2">Error field</label>
											<input type="text" id="demo-input-2" placeholder="This is a text input" />

											<p class="help">This is an error message for the field above.</p>
										</div> <!-- .field-group -->
										<div class="field-group">
											<label for="demo-textarea">This is a label</label>
											<textarea name="demo-textarea" id="demo-textarea" cols="30" rows="10" placeholder="This is a textarea"></textarea>
										</div> <!-- .field-group -->
									</fieldset>
								</form>
							</div> <!-- .col-1-2 -->

							<div class="col-1-2">
								<form>
									<fieldset>
										<legend>Radio buttons and checkboxes</legend>

										<div class="field-group">
											<input type="radio" name="demo-radio" id="demo-radio-1"/>
											<label for="demo-radio-1">Radio 1</label>

											<input type="radio" name="demo-radio" id="demo-radio-2"/>
											<label for="demo-radio-2">Radio 2</label>

											<input type="radio" name="demo-radio" id="demo-radio-3"/>
											<label for="demo-radio-3">Radio 3</label>
										</div> <!-- .field-group -->

										<div class="field-group">
											<input type="checkbox" id="demo-checkbox" name="demo-checkbox">
											<label for="demo-checkbox">This is a checkbox</label>
										</div> <!-- .field-group -->
									</fieldset>
								</form>
							</div> <!-- .col-1-2 -->
						</div> <!-- .row -->

						<div class="row">
							<div class="col-1-3">
								<form action="">
									<fieldset>
										<legend>Sign-in Form</legend>

										<div class="field-group">
											<label for="sign-in-username">Username: <span class="required">*</span></label>
											<input type="text" id="sign-in-username" name="sign-in-username">
										</div> <!-- .field-group -->

										<div class="field-group">
											<label for="sign-in-pwd">Password: <span class="required">*</span></label>
											<input type="password" id="sign-in-pwd" name="sign-in-pwd">
										</div> <!-- field-group -->

										<div class="field-group">
											<input type="checkbox" id="sign-in-checkbox" name="sign-in-checkbox" />
											<label for="sign-in-checkbox">Remember me</label>
										</div> <!-- field-group -->

										<div class="field-group">
											<input type="submit" class="btn" value="Sign In">
										</div> <!-- field-group -->

										<p><em><span class="required">*</span> required fields</em></p>
									</fieldset>
								</form>
							</div> <!-- .col-1-3 -->

							<div class="col-1-3">
								<form action="">
									<fieldset>
										<legend>Sign-up Form</legend>

										<div class="field-group">
											<label for="sign-up-email">Email address: <span class="required">*</span></label>
											<input type="email" id="sign-up-email" name="sign-up-email">
										</div> <!-- field-group -->

										<div class="field-group">
											<label for="sign-up-name">Username: <span class="required">*</span></label>
											<input type="text" id="sign-up-username" name="sign-up-username">
										</div> <!-- field-group -->

										<div class="field-group">
											<label for="sign-up-pwd">Password: <span class="required">*</span></label>
											<input type="password" id="sign-up-pwd" name="sign-up-pwd">
										</div> <!-- field-group -->

										<div class="field-group">
											<label for="sign-up-confirm-pwd">Confirm Password: <span class="required">*</span></label>
											<input type="password" id="sign-up-confirm-pwd" name="sign-up-confirm-pwd">
										</div> <!-- field-group -->

										<div class="field-group">
											<input type="submit" class="btn" value="Sign Up">
										</div> <!-- field-group -->

										<p><em><span class="required">*</span> required fields</em></p>
									</fieldset>
								</form>
							</div> <!-- .col-1-3 -->

							<div class="col-1-3">
								<form action="">
									<fieldset>
										<legend>Contact Form</legend>

										<div class="field-group">
											<label for="contact-name">Name: <span class="required">*</span></label>
											<input type="text" id="contact-name" name="contact-name">
										</div> <!-- .field-group -->

										<div class="field-group">
											<label for="contact-email">Email address: <span class="required">*</span></label>
											<input type="email" id="contact-email" name="contact-email">
										</div> <!-- .field-group -->

										<div class="field-group">
											<label for="contact-website">Website:</label>
											<input type="url" id="contact-website" name="contact-website">
										</div> <!-- .field-group -->

										<div class="field-group">
											<label for="contact-textarea">Message: <span class="required">*</span></label>
											<textarea name="contact-textarea" id="contact-textarea" cols="30" rows="10" class="field-fw"></textarea>
										</div> <!-- .field-group -->

										<div class="field-group">
											<input type="submit" class="btn" value="SMessage">
										</div> <!-- .field-group -->

										<p><em><span class="required">*</span> required fields</em></p>
									</fieldset>
								</form>
							</div> <!-- .col-1-3 -->
						</div>
					</div> <!-- .container -->
					</section>

					<section>
						<div class="container">
							<h2>Icons</h2>
								
							<hr>

							<div class="row">
								<div class="col-1-2">
									<h4>Bordered icons</h4>

									<div class="icon-circle">
										<i class="fa fa-coffee"></i>
									</div> <!-- .icon-circle -->

									<p>Circle</p>

									<div class="icon-rounded">
										<i class="fa fa-coffee"></i>
									</div> <!-- .icon-rounded -->

									<p>Rounded</p>

									<div class="icon-square">
										<i class="fa fa-coffee"></i>
									</div> <!-- .icon-square -->

									<p>Square</p>
								</div> <!-- .col-1-2 -->
								
								<div class="col-1-2">
									<h4>Icon sizes</h4>

									<div class="icon-circle">
										<i class="fa fa-coffee"></i>
									</div> <!-- .icon-circle -->

									<p>Circle</p>

									<div class="icon-rounded icon-large">
										<i class="fa fa-coffee"></i>
									</div> <!-- .icon-rounded -->

									<p>Rounded</p>

									<div class="icon-square icon-huge">
										<i class="fa fa-coffee"></i>
									</div> <!-- .icon-square -->

									<p>Square</p>

								</div> <!-- .col-1-2 -->
							</div> <!-- .row -->
						</div> <!-- .container -->
					</section>

					<section class="container">
						<h2>Feedback</h2>

						<hr>

						<div class="row">
							<div class="col-1-2">
								<div class="alert-information">
									<p><strong>Information</strong></p>
									<p>This is the body of the message!</p>
								</div> <!-- .alert-information -->

								<div class="alert-error">
									<p><strong>Error</strong></p>
									<p>This is the body of the message!</p>
								</div> <!-- .alert-information -->
							</div> <!-- .col-1-2 -->

							<div class="col-1-2">
								<div class="alert-warning">
									<p><strong>Warning</strong></p>
									<p>This is the body of the message!</p>
								</div> <!-- .alert-information -->

								<div class="alert-success">
									<p><strong>Success</strong></p>
									<p>This is the body of the message!</p>
								</div> <!-- .alert-information -->
							</div> <!-- .col-1-2 -->
						</div> <!-- .row -->
					</section>
				</main><!-- #main -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
