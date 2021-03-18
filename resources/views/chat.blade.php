<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
  <div class="container">
    <div class="row" id="app">
      <ul class="list-group offset-4 col-4">
        <li class="list-group-item active">Chat Room</li>
        <message v-for="value in chat.message">
          @{{ value }}
        </message>
        <input type="text" class="form-control" placeholder="Type your message here..." v-model='message' v-on:keyup.enter='send'>
      </ul>
    </div>
  </div>

  <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
