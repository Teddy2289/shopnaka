@extends('admin.layouts.admin')
@push('style')
    <link rel="stylesheet" type="text/css"
          href="{{asset('bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets\pages\data-table\css\buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css')}}">
@endpush
@section('content')

    <div class="card-block caption-breadcrumb">
        <div class="breadcrumb-header">
        </div>
        <div class="page-header-breadcrumb">
            <ul class="breadcrumb-title">
                <li class="breadcrumb-item">
                    <a href="{{route('admin')}}">
                        <i class="icofont icofont-home"></i>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#!">{{__('Categories')}}</a>
                </li>
                <li class="breadcrumb-item"><a href="#!">{{__('Liste catégories')}}</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card-block caption-breadcrumb">
        <div class="breadcrumb-header">
            <h5>Liste des catégories</h5>
        </div>
        <div class="page-header-breadcrumb">
            <ul class="breadcrumb-title">
                <li class="breadcrumb-item">
                        <a href="{{route('categorie.create')}}" class="btn btn-inverse"><i class="icofont icofont-ui-add"></i>Nouveau catégorie</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card">
        <div class="card-block">
            <div class="dt-responsive table-responsive">
                <div id="table-style-hover_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-sm-12 col-md-6">
                            <div class="dataTables_length" id="table-style-hover_length"><label>Show <select
                                        name="table-style-hover_length" aria-controls="table-style-hover"
                                        class="form-control input-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div id="table-style-hover_filter" class="dataTables_filter"><label>Search:<input
                                        type="search" class="form-control input-sm" placeholder=""
                                        aria-controls="table-style-hover"></label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <table id="table-style-hover"
                                   class="table table-striped table-hover table-bordered nowrap dataTable" role="grid"
                                   aria-describedby="table-style-hover_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="table-style-hover" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending" style="width: 200.547px;">
                                        Name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="table-style-hover" rowspan="1"
                                        colspan="1" aria-label="Position: activate to sort column ascending"
                                        style="width: 321.078px;">Slug
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="table-style-hover" rowspan="1"
                                        colspan="1" aria-label="Position: activate to sort column ascending"
                                        style="width: 321.078px;">Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($categorie as $row)
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->slug}}</td>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Name</th>
                                    <th rowspan="1" colspan="1">Slug</th>
                                    <th rowspan="1" colspan="1">Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-5">
                            <div class="dataTables_info" id="table-style-hover_info" role="status" aria-live="polite">
                                Showing 1 to 10 of 57 entries
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="table-style-hover_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled"
                                        id="table-style-hover_previous"><a href="#" aria-controls="table-style-hover"
                                                                           data-dt-idx="0" tabindex="0"
                                                                           class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#"
                                                                                    aria-controls="table-style-hover"
                                                                                    data-dt-idx="1" tabindex="0"
                                                                                    class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="table-style-hover"
                                                                              data-dt-idx="2" tabindex="0"
                                                                              class="page-link">2</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="table-style-hover"
                                                                              data-dt-idx="3" tabindex="0"
                                                                              class="page-link">3</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="table-style-hover"
                                                                              data-dt-idx="4" tabindex="0"
                                                                              class="page-link">4</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="table-style-hover"
                                                                              data-dt-idx="5" tabindex="0"
                                                                              class="page-link">5</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="table-style-hover"
                                                                              data-dt-idx="6" tabindex="0"
                                                                              class="page-link">6</a></li>
                                    <li class="paginate_button page-item next" id="table-style-hover_next"><a href="#"
                                                                                                              aria-controls="table-style-hover"
                                                                                                              data-dt-idx="7"
                                                                                                              tabindex="0"
                                                                                                              class="page-link">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

    <!-- data-table js -->
    <script src="{{asset('bower_components\datatables.net\js\jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('bower_components\datatables.net-buttons\js\dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets\pages\data-table\js\jszip.min.js')}}"></script>
    <script src="{{asset('assets\pages\data-table\js\pdfmake.min.js')}}"></script>
    <script src="{{asset('assets\pages\data-table\js\vfs_fonts.js')}}"></script>
    <script src="{{asset('bower_components\datatables.net-buttons\js\buttons.print.min.js')}}"></script>
    <script src="{{asset('bower_components\datatables.net-buttons\js\buttons.html5.min.js')}}"></script>
    <script src="{{asset('bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('bower_components\datatables.net-responsive\js\dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js')}}"></script>
@endpush

