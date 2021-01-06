<?php if (session()->getFlashdata('gagal')) : ?>
            <div class="alert alert-warning" role="alert">
	            <?= (session()->getFlashdata('gagal')); ?>
            </div>
            <?php endif; ?>
			
<div class="container">
<div class="ROW">
<div class="main center m-auto mt-4 mb-4">  
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="/HalamanUtama/insertUser" method="post">
					<label for="chk" class="text-succes" aria-hidden="true">Sign up</label>
					<input type="text" name="nama" placeholder="Nama" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<button type="submit">Sign up</button>
				</form>
			</div>

			<div class="login">
				<form action="/LoginUserC/cek_login" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required>
					<input type="password" name="password" placeholder="Password" required>
					<button type="submit" value="Login" required>Login</button>
				</form>
			</div>
	</div>
    </div>
</div>
</div>
    </div>