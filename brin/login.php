<body>
    <?php include("header.php"); ?>
    <div class="container mt-5">
        <div class="col-md-6 offset-3">
            <div class="card p-3">
                <h2>Login</h2>
                <form action="login_process.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mt-1"><a href="forgot.php">Forgot Password?</a></p>
                        </div>
                        <div class="col-md-6 text-right">
                            <p class="mt-1">Don't have an account? <a href="register.php">Register</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-eESFCbZRHp5Au5OPiP8RL8I5AikU4pRMAVoMde5+87hhw1fr2F06S5x0npv3L0I" crossorigin="anonymous"></script>
</body>

</html>