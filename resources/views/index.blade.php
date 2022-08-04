<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
@foreach($users as $user)
<div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                       <center> <h2 class="text-4xl font-bold mb-4">Welcome {{$user->Name }}</h2>
                    </div>
                    <div class="card-body">
                    <center> <a href="{{ url('api/users')}}" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">GetUsers</a></center>
                    <br/>
                        <br/>
                        </center>   
                        <div class="table-responsive">
                            <table class="table" style="width:100%">
                                <thead>
                                    <tr>

                                        <th>ID</th>
                                        <th>NAME</th>
                                        <th>EMAIL</th>
                                        <th>ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                              
                                    <tr>

                                        <td>resonse()->json('ID' => {{ $user->id }})</td>
                                        <td>{{ $user->Name }}</td>
                                        <td>{{ $user->Email }}</td>

                                        <td>
                                        
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