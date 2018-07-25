
<div class="row">
	<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-4"></div>
	<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 center mt-5"><i class="large material-icons">widgets</i></div>
	<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-4"></div>
</div>

<div class="row">
	<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-4"></div>
	<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
		<div class="card">
			<div class="card-content">
				<span class="card-title center green-text text-darken-4">AgriChain</span>
				<form id="form_login" method="POST" action="login/submit">
					<?php if ($this->session->flashdata("message")): ?>
						<div class="card-panel red darken-1">
							<div class="white-text">
								<?= $this->session->flashdata("message") ?>
							</div>
						</div>
					<?php endif; ?>
					<div class="input-field">
						<i class="material-icons prefix">account_circle</i>
						<label for="email">Email</label>
						<input id="email" type="email" name="email" />
					</div>
					<div class="input-field">
						<i class="material-icons prefix">lock</i>
						<label for="password">Password</label>
						<input id="password" type="password" name="password"/>
					</div>
				</form>
				<a href="<?= base_url("users/forgot")?>" class="green-text text-darken-1"><small>Forgot Password?</small></a>
				<button class="btn right green darken-2" type="submit" form="form_login">Login</button>
			</div>
			<div class="card-action">
				<small>Don't have an account? <a href="<?= base_url("")?>" class="green-text text-darken-1">Sign up</a></small>
			</div>
		</div>
	</div>
	<div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-4"></div>
</div>