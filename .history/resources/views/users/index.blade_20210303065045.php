@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 style="float:left;">Add user</h4>
                            <a href="#" style="float: right" class="btn btn-dark" data-toggle="modal" data-target="#addUser">
                                <i class="fa fa-plus"></i> Add new users
                            </a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-left">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header"><h4>Search user</h4></div>
                        <div class="card-body">
                            ---------
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--Modal of adding new user --}}
    <div class="modal right fade" id="addUser" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">Add user</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="{{'user.store'}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" name="phone" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" name="confirm_password" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Role</label>
                            <select name="is_admin" id="" class="form-control">
                                <option value="1">Admin</option>
                                <option value="2">Cashire</option>
                            </select>
                        </div>
                        .modal-footer>b.btn-block
                    </form>
                </div>
            </div>
        </div>
    </div>
    <style>
        .modal.right .modal-dialog{
            /* position: absolute; */
            top:0;
            right:0;
            margin-right: 20vh;
        }
        .modal.fade:not(.in).right .modal.right{
            -webkit-transform: translate3d(25%,0.0);
            transform: translate3d(25%,0,0);
        }
    </style>
@endsection
