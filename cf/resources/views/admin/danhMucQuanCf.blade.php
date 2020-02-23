@extends('home')
@section('admin_content')
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="content/site.css">
    </head>
    <body>

        <div class="container">
            @if(Session::has('success'))
            <p class="alert alert-info">{{ Session::get('success') }}</p>
            @endif
            <h2>Quán cà phê ngon</h2>

            {{-- <a href="javascript:void(0);" class="btn btn-primary" title="Add Product" onclick="product.openModel()">
                <i class="fa fa-plus"></i>
                Add Product
            </a> --}}
            <div class="mt-2">
                <table id="tbProduct" class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Tên tiêu đề</th>
                            <th>Actions</th>

                            {{-- <th>Desciption</th>
                            <th>Manufactory</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($quanCf as $quan)
                    <tr>
                        <td class="text-light bg-dark">{{$quan->title}}</td>
                        <td class="text-light bg-dark">
                            <a href="{{ route('QuanCfNgon.edit',$quan->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('QuanCfNgon.destroy',$quan->id)}}" class="btn btn-primary" ><i class="fa fa-trash"></i></a>

                    </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- The Modal -->
        {{-- @foreach ($collection as $item)
        <div class="modal" id="addEditProduct">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->


                    <!-- Modal body -->
                    <div class="modal-body">
                        <form id="formProduct">
                            <input hidden name="ProductId" id="ProductId" value=0>
                            <div class="row form-group">
                                <div class="col-4">
                                    <label>Product Name</label>
                                </div>
                                <div class="col-8">
                                    <input class="form-control" type="text" name="ProductName" id="ProductName" data-rule-required = "true" data-msg-required="Product name is required">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-4">
                                    <label>Price</label>
                                </div>
                                <div class="col-8">
                                    <input class="form-control" type="text" name="Price" id="Price" data-rule-required = "true" data-msg-required="Price is required">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-4">
                                    <label>Description</label>
                                </div>
                                <div class="col-8">
                                    <input class="form-control" type="text" name="Description" id="Description" data-rule-required = "true" data-msg-required="Description is required">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-4">
                                    <label>Manufactory</label>
                                </div>
                                <div class="col-8">
                                    <input class="form-control" type="text" name="Manufactory" id="Manufactory" data-rule-required = "true" data-msg-required="Manufactory is required">
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <a href="javascript:;" class="btn btn-primary" onclick="product.save()">Save</a>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach --}}
    </body>
</noscript>
<div style="text-align: center;"><div style="position:relative; top:0; margin-right:auto;margin-left:auto; z-index:99999">

</div></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="scripts/product.js"></script>
</html>
@endsection
