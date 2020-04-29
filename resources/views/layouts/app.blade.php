<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Archive</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
  </head>
  <body>
      @include('inc.header')
      <br>
    <div class="container">
        @include('inc.messages')
        <br>
        @yield('content')

    </div>
    <footer class="text-center ">
          <p>Copyrights &copy; Khaled Ghonaim</p>
    </footer>
  </body>
</html>
