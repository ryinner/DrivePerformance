<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DrivePerformance</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{ assets.outputCss('css') }}
</head>
<body>
    <div class="container">
        {{ content() }}
    </div>
    {{ assets.outputJs('js') }}
</body>
</html>
