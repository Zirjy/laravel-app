@section('content')
@include('layout.layout')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Absensi Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<style>
    .centered-content {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

</style>

<body>
    <div class="centered-content">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1>Welcome to Absensi Siswa</h1>
                    <p>Manage and track student attendance easily.</p>
                    <a href="{{ route('login') }}" class="btn btn-primary">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
