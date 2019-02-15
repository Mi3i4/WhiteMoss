<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
   
    <title>{{ $request->title }}</title>
</head>
<body>
    <div>
        <b>Имя:</b> {{ $request->name }}
    </div>

    <div>
        <b>Email:</b> {{ $request->email }}
    </div>

    <div>
        <b>Тема сообщения:</b> {{ $request->title }}
    </div>
    <div>
        <b>Текст сообщения:</b> {{ $request->text }}
    </div>
</body>