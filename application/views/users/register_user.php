
<div class="row">
	<div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-3"></div>
	<div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-6 center mt-5"><i class="large material-icons">widgets</i></div>
	<div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-3"></div>
</div>

<div class="row">
	<div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-3"></div>
	<div class="col col-12 col-sm-12 col-md-8 col-lg-8 col-xl-6">
		<div class="card">
			<div class="card-content">
				<span class="card-title center green-text text-darken-4">Register</span>
				<div class="divider mb-1"></div>
				<div class="row mb-0">
					<div class="col">
						<h5 class="green-text text-darken-4 mt-2">Account Information</h5>
					</div>
				</div>
				<form id="form_register" method="POST">
					<?php if ($this->session->flashdata("message")): ?>
						<div class="card-panel red darken-1">
							<div class="white-text">
								<?= $this->session->flashdata("message") ?>
							</div>
						</div>
					<?php endif; ?>
					<div class="row mb-0">
						<div class="input-field col">
							<label for="username">Username</label>
							<input id="username" type="text" name="username" />
						</div>
					</div>
					<div class="row mb-1">
						<div class="input-field col">
							<label for="password">Password</label>
							<input id="password" type="password" name="password"/>
						</div>
						<div class="input-field col">
							<label for="passconf">Confirm Password</label>
							<input id="passconf" type="password" name="passconf"/>
						</div>
					</div>
					<div class="divider mb-1"></div>
					<div class="row mb-0">
						<div class="col">
							<h5 class="green-text text-darken-4 mt-2">Personal Information</h5>
						</div>
					</div>
					<div class="row mb-0">
						<div class="input-field col">
							<label for="first_name">First Name</label>
							<input id="first_name" type="text" name="first_name" />
						</div>
						<div class="input-field col">
							<label for="first_name">Last Name</label>
							<input id="first_name" type="text" name="first_name" />
						</div>
					</div>
					<div class="row mb-0">
						<div class="input-field col">
							<label for="email">Email</label>
							<input id="email" type="email" name="email" />
						</div>
					</div>
					<div class="row mb-0">
						<div class="input-field col">
							<label for="contact_no">Contact No.</label>
							<input id="contact_no" type="text" name="contact_no" />
						</div>
					</div>
				</form>

				<button class="btn right green darken-2" type="submit" form="form_register">Register</button>
			</div>
			<div class="card-action">
				<small>Already have an account? <a href="<?= base_url("")?>" class="green-text text-darken-1">Login</a></small>
			</div>
		</div>
	</div>
	<div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-3"></div>
</div>