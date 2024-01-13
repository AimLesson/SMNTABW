<body>
    <?php include("header.php"); ?>
    <div class="container mt-5">
        <div class="col-md-6 offset-3">
            <div class="card p-3">
                <h2>Registration Form</h2>
                <form action="register_process.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Contact</label>
                        <input type="text" class="form-control" id="contact" name="contact" required>
                    </div>
                    <div class="mb-3">
                        <label for="instansi" class="form-label">Instansi</label>
                        <select id="instansi" name="instansi" class="form-control" required>
                            <option value="BRIN">BRIN</option>
                            <option value="Pemerintah Non BRIN">Pemerintah Non BRIN</option>
                            <option value="Swasta">Swasta</option>
                            <option value="Masyarakat Umum">Masyarakat Umum</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggallahir" class="form-label">tanggal lahir</label>
                        <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" required>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                        <div class="col-md-8">
                            <p class="mt-1">Already have an account? <a href="login.php">Login</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>