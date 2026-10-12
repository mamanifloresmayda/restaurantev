<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body>

<div class="container"><!-- contenedor -->

    <div class="row justify-content-center align-items-center" style="height:100vh;">

        <div class="col"></div>

        <div class="col">

            <br><br>

            <div class="card text-center">

                <div class="card-header">
                    Login
                </div>

                <div class="card-body">

                    <form action="index.php" method="post">

                        <div class="mb-3">
                            <label class="form-label">Usuario</label>
                            <input
                                type="text"
                                class="form-control"
                                name="usuario"
                            >
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input
                                type="password"
                                class="form-control"
                                name="password"
                            >
                        </div>

                        <button type="submit" class="btn btn-primary">
                            Entrar
                        </button>

                    </form>

                </div>

            </div>

        </div>

        <div class="col"></div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

</body>
</html>