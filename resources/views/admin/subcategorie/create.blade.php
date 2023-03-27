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
                <li class="breadcrumb-item"><a href="#!">{{__('Sous Categories')}}</a>
                </li>
                <li class="breadcrumb-item"><a href="#!">{{__('Nouveau Sous catégories')}}</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h5 class="mt-2">{{__('Nouveau Sous catégories')}}</h5>
            <div class="float-right">
                <a href="{{route('subcategorie')}}" class="btn btn-inverse"><i
                        class="icofont icofont-simple-left"></i>{{__('Retoure')}}</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-block">
            <form id="main" method="post" action="{{route('subcategorie.store')}}" novalidate="novalidate">
                {{ csrf_field() }}
                <div class="form-group row has-error">
                    <label class="col-sm-2 col-form-label">Sous Catégorie</label>
                    <div class="col-sm-10">
                        <input type="text"
                               class="form-control  {{ $errors->has('sub_name') ? ' is-invalid' : '' }} input-danger"
                               value="{{ old('sub_name') }}" name="sub_name" id="sub_name" placeholder="catégorie sub_name" required>
                        @if($errors->has('sub_name'))
                            <span class="text-danger error invalid-feedback">
                                {{ $errors->first('sub_name') }}
                            </span>
                        @endif
                        {{-- <span class="messages"><p class="text-danger error">Name can't be blank</p></span>--}}
                    </div>
                </div>
                <div class="form-group row has-error">
                    <label class="col-sm-2 col-form-label">product count</label>
                    <div class="col-sm-10">
                        <input type="number"
                               class="form-control  {{ $errors->has('product_count') ? ' is-invalid' : '' }} input-danger"
                               value="{{ old('product_count') }}" name="product_count" id="product_count"  required>
                        @if($errors->has('product_count'))
                            <span class="text-danger error invalid-feedback">
                                {{ $errors->first('product_count') }}
                            </span>
                        @endif
                        {{-- <span class="messages"><p class="text-danger error">Name can't be blank</p></span>--}}
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

