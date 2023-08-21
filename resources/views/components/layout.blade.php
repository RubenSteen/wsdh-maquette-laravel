<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  @vite('resources/css/app.css')
</head>
<body>
  <h1 class="text-3xl font-bold underline">
    {{ $slot }}
  </h1>
</body>
</html>