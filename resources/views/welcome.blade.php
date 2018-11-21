<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <title>Laravel</title>

          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
        <div class="content">
            <h1> To do List </h1>
            <form  action="{{ route('createTask') }}" method="POST">
                  <div class="form-group">
                    <label for="text">Enter a new task:</label>
                    <input type="text" class="form-control" id="task" name="task" placeholder="Enter a new task">
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Add Task</button>
                  <input type="text" value="{{ Session::token() }}" name="_token">
            </form> 

                        <h2>To do list tasks</h2>
                          
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Task</th>
                    <th>Action</th>
                   
                  </tr>
                </thead>
                <tbody>
                  @foreach($tasks as $task)
                  <tr>
                    <td>{{ $task->note }}</td>
                    <td><a href="{{ route('deleteTask', ['task_id' => $task->id]) }}" class="btn btn-primary"> Delete Task </a></td>
                  </tr>
                  @endforeach
                 
                </tbody>
              </table>

        </div>
        </div>
    </body>
</html>
