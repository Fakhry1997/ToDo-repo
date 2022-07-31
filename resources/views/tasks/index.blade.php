<!DOCTYPE html>
<html>
    <head>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{ route('home') }}">Home</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="{{ url('/') }}">All Tasks</a>
                  <a class="nav-link" href="{{ route('tasks.get.create') }}">CreateNew Task</a>
                </div>
              </div>
            </div>
          </nav>
        <div class="container">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ToDo App</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"/>

    </head>
    <body>
        <h1>Tasks</h1>
        
          @foreach ($tasks as $task)
          <div class="card @if($task->isCompleted()) border-success @endif "   style="margin-bottom:20px;">
            <div class="card-body">
              <p>{{ $task->description}}</p>
              @if(!$task->isCompleted())
              
              <form action ='tasks/{{$task->id}}' method ='POST'>
                @method('PATCH')
                @csrf
                
                 <button input="submit" class="btn btn-secondary">Complete     
                 <span class="badge badge-success" >Okay</span>
                 </button>
              </form> 
              @else
              <form action ='tasks/{{$task->id}}' method ='POST'>
                @method('DELETE')
                @csrf

                <button input="submit" class="btn btn-danger">Delete</button>
              </form> 
              @endif

            </div>
          </div>
         
          
          @endforeach
          <a class="btn btn-primary btn-lg btn-block" href="{{ route('tasks.get.create') }}">Create New Task</a>
          
    </body>
</html>
