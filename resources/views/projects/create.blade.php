<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.css">
  <title>Create</title>
</head>
<body>
  <form method="POST" action="/projects" class="container" style="padding-top: 40px;">
    @csrf

    <h1 class="heading is-1">Create A Project</h1>

    <div class="field">
      <label class="label" for="title">Title</label>
      <div class="control">
        <input class="input" type="text" name="title" placeholder="Title">
      </div>
    </div>

    <div class="field">
      <label class="label" for="description">Description</label>
      <div class="control">
        <textarea name="description" class="textarea"></textarea>
      </div>
    </div>

    <div class="field">
      <div class="control">
        <button type="submit" class="button is-link">Create Project</button>
      </div>
    </div>
  </form>
</body>
</html>