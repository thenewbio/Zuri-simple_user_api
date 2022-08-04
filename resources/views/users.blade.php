<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UsersPage</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                       <center> <h2 class="text-4xl font-bold mb-4"> You are Welcome</h2>
                    </div>
                    <div class="card-body">
                        <br/>
                        </center>   
                        <div class="table-responsive">
                            <table class="table table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                   
                                        <th>ID</th>
                                        <th width="500px">NAME</th>
                                        <th width="400px">EMAIL</th>
                                        <th width="350px">ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>

                                        <td>{{ $user->id }}</td>
                                        <td width="500px">{{ $user->Name }}</td>
                                        <td width="400px">{{ $user->Email }}</td>

                                        <td>
                                        <a href="{{ url('api/user/'. $user->id)}}" title="Get User"><button class="ml-4 bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Get User</button></a>
                                            <a href="{{ url('api/user/update/'. $user->id) }}" title="Edit Student"><button class="ml-4 bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <a href="{{ url('api/user/delete/'. $user->id) }}" title="Delete Student"><button class="ml-4 bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Delete</button></a>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>