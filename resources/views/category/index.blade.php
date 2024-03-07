<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Categary index</title>
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
        <nav class="main-header ">
            <div class="col-lg-12" style="margin-top:30px">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title col-lg-9">Categary </h3>
                        <a class="col-lg-3 form-control btn btn-dark" href="/categary/create" type="button">Add Categary </a>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th class="col-lg-1">SR</th>
                                    <th >Name</th>
                                    <th class="col-lg-2">Status</th>
                                    <th class="col-lg-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $key => $value)
                                    <tr>
                                        <td>{{$key +1}}</td>
                                        <td>{{$value->name}}</td>
                                        <td><button type="button" class="col-lg-10 form-control btn {{$value->status == 1 ? 'btn-sm btn-primary' : 'btn-sm btn-danger'}}" value="active"> {{$value->status == 1 ? 'Active' : 'In-active'}}</button></td>
                                        <td class="d-flex" >
                                            <a class=" btn btn-danger" name="delete" value="delete" type="button"  onclick="return confirm('{{ __('Are you sure you want to delete?') }}')" href="/categary/delete/{{$value->id}}"><i class=" fa fa-trash"></i></a>
                                            <a class="ml-1 btn btn-primary" name="update" value="update" type="button"  href="/categary/edit/{{$value->id}}"><i class=" fa fa-edit"></i></a>
                                            <a class="ml-1 btn btn-dark" name="categary_status" value="categary_status" type="button"  href="/categary/status/{{$value->id}}"><i class=" fa fa-eye"></i></a>
                                        </td>
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