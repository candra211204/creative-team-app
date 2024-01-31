<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-8">
                <form>
                    <div class="mb-3">
                        <label for="emailRegister" class="form-label">Email</label>
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" placeholder="mail@example.com"
                                id="emailRegister">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="passwordRegister" class="form-label">Kata Sandi</label>
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" placeholder="Min 8 karakter"
                                id="passwordRegister">
                            <span class="input-group-text">
                                <i class="fa-solid fa-eye-slash"></i>
                            </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="passwordConfirmRegister" class="form-label">Konfirmasi Kata Sandi</label>
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" id="passwordConfirmRegister">
                            <span class="input-group-text">
                                <i class="fa-solid fa-eye-slash"></i>
                            </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Daftar</button>
                        </div>
                    </div>
                    <div class="mb-3 text-center">
                        <span>Sudah punya akun ? <a href="{{ url('/login') }}" class="text-decoration-none">Masuk Sekarang</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('javascript/bootstrap.bundle.js') }}"></script>
</body>

</html>
