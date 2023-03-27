@extends('admin.layouts.admin')
@push('style')

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
                <li class="breadcrumb-item"><a href="#!">{{__('Produits')}}</a>
                </li>
                <li class="breadcrumb-item"><a href="#!">{{__('Nouveau Produits')}}</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h5 class="mt-2">{{__('Nouveau produits')}}</h5>
            <div class="float-right">
                <a href="{{route('product')}}" class="btn btn-inverse"><i
                        class="icofont icofont-simple-left"></i>{{__('Retoure')}}</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-block">
            <form id="main" method="post" action="{{route('product.store')}}" novalidate="novalidate">
                {{ csrf_field() }}
                <div class="form-group row has-error">
                    <label class="col-sm-2 col-form-label">Produits</label>
                    <div class="col-sm-10">
                        <input type="text"
                               class="form-control  {{ $errors->has('name') ? ' is-invalid' : '' }} input-danger"
                               value="{{ old('name') }}" name="name" id="sub_name"  required>
                        @if($errors->has('name'))
                            <span class="text-danger error invalid-feedback">
                                {{ $errors->first('name') }}
                            </span>
                        @endif
                        {{-- <span class="messages"><p class="text-danger error">Name can't be blank</p></span>--}}
                    </div>
                </div>
                <div class="form-group row has-error">
                    <label class="col-sm-2 col-form-label">Prix</label>
                    <div class="col-sm-10">
                        <input type="number"
                               class="form-control  {{ $errors->has('price') ? ' is-invalid' : '' }} input-danger"
                               value="{{ old('price') }}" name="price" id="price"  required>
                        @if($errors->has('price'))
                            <span class="text-danger error invalid-feedback">
                                {{ $errors->first('price') }}
                            </span>
                        @endif
                        {{-- <span class="messages"><p class="text-danger error">Name can't be blank</p></span>--}}
                    </div>
                </div>
                <div class="form-group row has-error">
                    <label class="col-sm-2 col-form-label">quantite</label>
                    <div class="col-sm-10">
                        <input type="number"
                               class="form-control  {{ $errors->has('quantite') ? ' is-invalid' : '' }} input-danger"
                               value="{{ old('quantite') }}" name="quantite" id="quantite"  required>
                        @if($errors->has('quantite'))
                            <span class="text-danger error invalid-feedback">
                                {{ $errors->first('quantite') }}
                            </span>
                        @endif
                        {{-- <span class="messages"><p class="text-danger error">Name can't be blank</p></span>--}}
                    </div>
                </div>
                <div class="form-group row has-error">
                    <label class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea value="{{ old('log_desc') }}" class="form-control {{ $errors->has('log_desc') ? ' is-invalid' : '' }} input-danger" name="log_desc" id="" cols="30" rows="10"></textarea>
                        @if($errors->has('log_desc'))
                            <span class="text-danger error invalid-feedback">
                                {{ $errors->first('log_desc') }}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row has-error">
                    <label class="col-sm-2 col-form-label">Description courte</label>
                    <div class="col-sm-10">
                        <textarea value="{{ old(' short_desc ') }}" class="form-control {{ $errors->has(' short_desc ') ? ' is-invalid' : '' }} input-danger" name=" short_desc " id="" cols="30" rows="5"></textarea>
                        @if($errors->has(' short_desc '))
                            <span class="text-danger error invalid-feedback">
                                {{ $errors->first(' short_desc ') }}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row has-error">
                    <label class="col-sm-2 col-form-label">Catégorie</label>
                    <div class="col-sm-10">
                        <select name="categorie_id"
                                class="form-control {{ $errors->has('categorie_id') ? ' is-invalid' : '' }} input-danger"
                                id="">
                            @foreach($category as $row)
                                <option value="{{$row->id}}">{{$row->name}}</option>
                            @endforeach()
                        </select>
                        @if($errors->has('categorie_id'))
                            <span class="text-danger error invalid-feedback">
                                {{ $errors->first('categorie_id') }}
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row has-error">
                    <label class="col-sm-2 col-form-label">Sous Catégorie</label>
                    <div class="col-sm-10">
                        <select name="sub_categorie_id"
                                class="form-control {{ $errors->has('sub_categorie_id') ? ' is-invalid' : '' }} input-danger"
                                id="">
                            @foreach($subcategory as $row)
                                <option value="{{$row->id}}">{{$row->sub_name}}</option>
                            @endforeach()
                        </select>
                        @if($errors->has('sub_categorie_id'))
                            <span class="text-danger error invalid-feedback">
                                {{ $errors->first('sub_categorie_id') }}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row has-error">
                    <label class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file"
                               class="form-control"
                                name="image" id="image"  required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- data-table js -->
    <script type="text/javascript" src="{{asset('assets\pages\form-validation\validate.js')}}"></script>
@endpush

