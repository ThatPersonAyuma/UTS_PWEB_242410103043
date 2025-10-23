<div class="container-fluid vh-100">
    <div class="row h-100">
        <div class="col-12 col-xl-6 bg-primary text-white">
            <main class="container">
            <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-12" style="min-width">
                <div class="card p-4 position-relative overflow-hidden" style="max-width: 420px;margin: 48px auto;border-radius: 14px;box-shadow: 0 10px 30px rgba(16,24,40,0.08);">
                <p class="text-center display-5 d">
                    <strong>Stadium</strong>
                </p>
                @if($errors->has('login'))
                    <p class="h5 text-center text-danger">
                        {{ $errors->first('login') }}
                    </p>
                @endif
                <form action="{{ route('login.submit') }}" method="GET">
                    <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" name="email" type="email" class="form-control" placeholder="nama@contoh.com" required>
                    </div>

                    <div class="mb-3">
                    <label for="password" class="form-label d-flex justify-content-between">
                        <span>Password</span>
                        <a href="#" class="small">Lupa password?</a>
                    </label>
                    <input id="password" name="password" type="password" class="form-control" placeholder="Masukkan password" required>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember">
                        <label class="form-check-label small" for="remember">Ingat saya</label>
                    </div>
                    </div>

                    <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary btn-lg">Sign In</button>
                    </div>

                    <div class="text-center mb-2">
                    <small class="text-muted">atau masuk dengan</small>
                    </div>

                    <div class="d-flex gap-2">
                    <button type="button" class="btn btn-outline-secondary w-100">
                        <img style="width:20px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/google/google-original.svg" />
                        Google
                    </button>
                    </div>
                    <p class="text-center small text-muted mt-3 mb-0">Belum punya akun? <a href="#">Daftar</a></p>
                </form>
                </div>
            </div>
        </div>
        </div>

        <div class="col-6 d-none d-xl-flex bg-white text-white justify-content-center align-items-center">
            <div style="aspect-ratio: 1/1; width: 90%;">
                <img class="img-fluid w-auto h-auto" style="object-fit: cover;" src="{{ asset('img/login.jpg') }}" alt="login image">
            </div>
        </div>
    </div>
</div>