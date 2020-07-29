@extends('admin.template')
@section('content')

    <div class="container-fluid">

        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <a href="#" class="btn btn-primary rounded"> <i class="fa fa-plus-circle"></i> <strong> {{__('Demandes de messe')}}</strong></a>
                    <div class="card-actions">
                        <a href="https://datatables.net">
                            <small class="text-muted">docs</small>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered datatable">
                        <thead>
                        <tr>
                            <th>Username</th>
                            <th>Date registered</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Anton Phunihel</td>
                            <td>2012/01/01</td>
                            <td>Member</td>
                            <td>
                                <span class="badge badge-success">Active</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Alphonse Ivo</td>
                            <td>2012/01/01</td>
                            <td>Member</td>
                            <td>
                                <span class="badge badge-success">Active</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Thancmar Theophanes</td>
                            <td>2012/01/01</td>
                            <td>Member</td>
                            <td>
                                <span class="badge badge-success">Active</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>
                                </a>
                            </td>

                        </tr>
                        <tr>
                            <td>Walerian Khwaja</td>
                            <td>2012/01/01</td>
                            <td>Member</td>
                            <td>
                                <span class="badge badge-success">Active</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Clemens Janko</td>
                            <td>2012/02/01</td>
                            <td>Staff</td>
                            <td>
                                <span class="badge badge-danger">Banned</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Chidubem Gottlob</td>
                            <td>2012/02/01</td>
                            <td>Staff</td>
                            <td>
                                <span class="badge badge-danger">Banned</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Hristofor Sergio</td>
                            <td>2012/03/01</td>
                            <td>Member</td>
                            <td>
                                <span class="badge badge-warning">Pending</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Tadhg Griogair</td>
                            <td>2012/03/01</td>
                            <td>Member</td>
                            <td>
                                <span class="badge badge-warning">Pending</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Pollux Beaumont</td>
                            <td>2012/01/21</td>
                            <td>Staff</td>
                            <td>
                                <span class="badge badge-success">Active</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Adam Alister</td>
                            <td>2012/01/21</td>
                            <td>Staff</td>
                            <td>
                                <span class="badge badge-success">Active</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Carlito Roffe</td>
                            <td>2012/08/23</td>
                            <td>Staff</td>
                            <td>
                                <span class="badge badge-danger">Banned</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Sana Amrin</td>
                            <td>2012/08/23</td>
                            <td>Staff</td>
                            <td>
                                <span class="badge badge-danger">Banned</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Adinah Ralph</td>
                            <td>2012/06/01</td>
                            <td>Admin</td>
                            <td>
                                <span class="badge badge-dark">Inactive</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Dederick Mihail</td>
                            <td>2012/06/01</td>
                            <td>Admin</td>
                            <td>
                                <span class="badge badge-dark">Inactive</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Hipólito András</td>
                            <td>2012/03/01</td>
                            <td>Member</td>
                            <td>
                                <span class="badge badge-warning">Pending</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>

                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Fricis Arieh</td>
                            <td>2012/03/01</td>
                            <td>Member</td>
                            <td>
                                <span class="badge badge-warning">Pending</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>

                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Scottie Maximilian</td>
                            <td>2012/03/01</td>
                            <td>Member</td>
                            <td>
                                <span class="badge badge-warning">Pending</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>

                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Bao Gaspar</td>
                            <td>2012/01/01</td>
                            <td>Member</td>
                            <td>
                                <span class="badge badge-success">Active</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>

                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Tullio Luka</td>
                            <td>2012/02/01</td>
                            <td>Staff</td>
                            <td>
                                <span class="badge badge-danger">Banned</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>

                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Felice Arseniy</td>
                            <td>2012/02/01</td>
                            <td>Admin</td>
                            <td>
                                <span class="badge badge-dark">Inactive</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>

                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Finlay Alf</td>
                            <td>2012/02/01</td>
                            <td>Admin</td>
                            <td>
                                <span class="badge badge-dark">Inactive</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>

                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Theophilus Nala</td>
                            <td>2012/03/01</td>
                            <td>Member</td>
                            <td>
                                <span class="badge badge-warning">Pending</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>

                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Sullivan Robert</td>
                            <td>2012/03/01</td>
                            <td>Member</td>
                            <td>
                                <span class="badge badge-warning">Pending</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>

                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Kristóf Filiberto</td>
                            <td>2012/01/21</td>
                            <td>Staff</td>
                            <td>
                                <span class="badge badge-success">Active</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>

                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Kuzma Edvard</td>
                            <td>2012/01/21</td>
                            <td>Staff</td>
                            <td>
                                <span class="badge badge-success">Active</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>

                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Bünyamin Kasper</td>
                            <td>2012/08/23</td>
                            <td>Staff</td>
                            <td>
                                <span class="badge badge-danger">Banned</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>

                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Crofton Arran</td>
                            <td>2012/08/23</td>
                            <td>Staff</td>
                            <td>
                                <span class="badge badge-danger">Banned</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>

                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Bernhard Shelah</td>
                            <td>2012/06/01</td>
                            <td>Admin</td>
                            <td>
                                <span class="badge badge-dark">Inactive</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>

                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Grahame Miodrag</td>
                            <td>2012/03/01</td>
                            <td>Member</td>
                            <td>
                                <span class="badge badge-warning">Pending</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>

                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Innokentiy Celio</td>
                            <td>2012/03/01</td>
                            <td>Member</td>
                            <td>
                                <span class="badge badge-warning">Pending</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>

                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Kostandin Warinhari</td>
                            <td>2012/03/01</td>
                            <td>Member</td>
                            <td>
                                <span class="badge badge-warning">Pending</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>

                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Ajith Hristijan</td>
                            <td>2012/03/01</td>
                            <td>Member</td>
                            <td>
                                <span class="badge badge-warning">Pending</span>
                            </td>
                            <td>
                                <a class="btn btn-success" href="#">
                                    <i class="fa fa-search-plus "></i>
                                </a>
                                <a class="btn btn-info" href="#">
                                    <i class="fa fa-edit "></i>
                                </a>
                                <a class="btn btn-danger" href="#">
                                    <i class="fa fa-trash-o "></i>

                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.conainer-fluid -->
@stop
