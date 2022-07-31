<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ToDo App</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"/>
        
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{ route('tasks.home') }}">Home</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="{{ route('tasks.get.index') }}">All Tasks</a>
                  <a class="nav-link" href="{{ route('tasks.get.create') }}">CreateNew Task</a>
                 
                </div>
              </div>
            </div>
          </nav>
        <div class="container">
            <h1>New Tasks</h1>
            <form  action="{{ route('tasks.post.create') }}"  method="POST">
              {{ csrf_field() }}
                <div class="form-group">
                
                    <label for="description">Task Descreption</label>
                    <input class="form-control" name="description"/>
         
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Create Task</button>
                </div>    
            
            </form>
        </div>
    </body>
</html>
