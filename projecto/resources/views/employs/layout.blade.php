<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("name_str")</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="bg-dark d-flex justify-content-center align-items-center text-white p-3 px-md-4 mb-4">
    <nav class="">
        <a class="btn btn-secondary text-white p-2" href = "/">Главная</a>
        <a class="btn btn-secondary text-white p-2" href = "{{ route ('employs.index') }}">Сотрудники</a>
    </nav>
</div>


@yield('main_block')
</body>
</html>
