<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To Do App</title>
    {{-- jQuery linking goes here --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    {{-- bootstrap linking here --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto mt-5">
                <div class="card">
                    <div class="card-body">
                        <form id="createTaskForm">
                            @csrf
                            <div class="mb-3">
                                <label for="">Task Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Task Description</label>
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-success" type="submit">Create Task</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- jQuery goes here --}}
    <script>
        $(document).ready(function() {
            $('#createTaskForm').submit(function(e) {
                e.preventDefault();

                // console.log($('createTaskForm').serialize());                               

                $.ajax({
                    type: "POST",
                    url: "/store", //or url:'{{ route('store') }}',
                    data: $('#createTaskForm').serialize(),
                    success: function(response) {
                        alert(response.msg)
                    }
                });

            });
        });
    </script>

</body>

</html>
