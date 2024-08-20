<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>.::SISTEMA DE INCRIPCIONES - ABC::.</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="login bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">

    <div class="card shadow-sm" style="width: 350px;">
        <div class="card-body text-center">
            <div class="logo mb-3">
                <img src="{{ asset('login/img/logo.png') }}" class="img-fluid mb-2">
                <p class="mb-0">Sistema de Inscripciones & ABC</p>
            </div>

            <form method="POST" action="{{ route('user.login') }}">
                @csrf
                <h4 class="form-title mb-3">Inicio de Sesión</h4>
                <div class="mb-3 text-start">
                    <label for="name" class="form-label fw-semibold">USUARIO:</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-user" style="color: #7d7d7d;"></i>
                        </span>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                            placeholder="Ingrese usuario" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 text-start">
                    <label for="password" class="form-label fw-semibold">CONTRASEÑA:</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-lock" style="color: #7d7d7d;"></i>
                        </span>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" name="password" placeholder="Ingrese contraseña">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success btn-block">Ingresar</button>
                </div>
            </form>
        </div>
        <div class="card-footer text-center py-3">
            <small class="text-muted">2020 &copy; Sistema de Ventas & ABC.</small>
        </div>
    </div>

    <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
    <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/adminlte/dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
