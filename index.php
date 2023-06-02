<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks app</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body >
    <nav class="navbar navbar-light navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand">Task App</a>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
    </nav>
<br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <form id="task-form">
                            <div class="form-group">
                                <input type="hidden" id="id_id">
                                <input type="text" id="name" placeholder="Task name" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea id="description" cols="30" rows="10" class="form-control" placeholder="Task description"></textarea>
                                <button type="submit" class="btn btn-primary btn-block text-center">Save task</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card" id="task-result">
                    <div class="card-body my-4">
                        <ul id="container"></ul>
                    </div>
                </div>
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Name</td>
                            <td>Description</td>
                            <td>Options</td>
                        </tr>
                        <tbody id="tasks">

                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>
</html>