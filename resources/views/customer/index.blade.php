<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Customer index</title>
<link rel="stylesheet" href="https:fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<style>
a{
color: black;
}
</style>
</head>
<body>
    <form method="post">
        @include('layouts.master');
        <nav class="main-header" style="margin-top:30px">
            <div class="col-lg-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title p-2">Customer Table</h3>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th> SR</th>
                                    <th> Name</th>
                                    <th> E-mail</th>                                    
                                    <th> Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $key => $value)
                                    <tr>
                                        <td>{{$key +1}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->email}}</td>
                                       
                                        <td><a href="/customer/status/{{$value->id}}" type="button" class="col-lg-10 form-control btn {{$value->status == 1 ? 'btn-sm btn-primary' : 'btn-sm btn-danger'}}" value="active"> {{$value->status == 1 ? 'Active' : 'In-active'}}</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="ml-3 mt-3">
                            {!! $data->withQueryString()->links('pagination::bootstrap-4') !!}
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </form>
</body>
</html>