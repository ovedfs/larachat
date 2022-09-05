<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LArachat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/app.css">
  </head>
  <body class="bg-light">
    <div class="container my-5">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card card-body">
            <h1>Larachat</h1>
            <div id="messages"></div>
            <form id="chat-form">
              <div class="mb-3">
                <input type="text" id="message" placeholder="Message..." class="form-control">
              </div>
              <div class="mb-3 d-grid">
                <button type="submit" class="btn btn-primary">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="./js/app.js"></script>
  </body>
</html>