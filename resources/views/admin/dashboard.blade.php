@extends('admin.layouts.admin')
@section('content')
    <div class="row">
        <!-- task, page, download counter  start -->
        <div class="col-xl-3 col-md-6">
            <div  href="{{route('categorie')}}" class="card social-card bg-simple-c-green">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-b-0"></h6>
                            <p>PRODUITS</p>
                            <p class="m-b-0">Géstion des produits</p>
                        </div>
                    </div>
                </div>
                <a  href="{{route('product')}}" class="download-icon"><i class="feather icon-arrow-down"></i></a>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card social-card bg-simple-c-green">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-b-0"></h6>
                            <p>COMMANDES</p>
                            <p class="m-b-0">Géstion des commdes</p>
                        </div>
                    </div>
                </div>
                <a href="{{route('commande')}}" class="download-icon"><i class="feather icon-arrow-down"></i></a>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card social-card bg-simple-c-green">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-b-0"></h6>
                            <p>CATEGORIES</p>
                            <p class="m-b-0">Géstion des catégories</p>
                        </div>
                    </div>
                </div>
                <a href="{{route('categorie')}}" class="download-icon"><i class="feather icon-arrow-down"></i></a>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card social-card bg-simple-c-green">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-b-0"></h6>
                            <p>SUB CATEGORIES</p>
                            <p class="m-b-0">Géstion des sub catégories</p>
                        </div>
                    </div>
                </div>
                <a href="{{route('subcategorie')}}" class="download-icon"><i class="feather icon-arrow-down"></i></a>
            </div>
        </div>
        <!-- task, page, download counter  end -->


    </div>
@endsection
