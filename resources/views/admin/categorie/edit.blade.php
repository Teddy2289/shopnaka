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
                <li class="breadcrumb-item"><a href="#!">{{__('Categories')}}</a>
                </li>
                <li class="breadcrumb-item"><a href="#!">{{__('Modifier catégories')}}</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h5 class="mt-2">{{__('Modifier catégories')}}</h5>
            <div class="float-right">
                <a href="{{route('categorie')}}" class="btn btn-inverse"><i class="icofont icofont-simple-left"></i>{{__('Retoure')}}</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-block">
            <form id="main" method="post" action="{{route('categorie.update',$categorie->id)}}"  novalidate="novalidate" >
                @csrf
                <div class="form-group row has-error">
                    <label class="col-sm-2 col-form-label">Catégorie</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  {{ $errors->has('name') ? ' is-invalid' : '' }} input-danger" value="{{ $categorie->name }}" name="name" id="name" placeholder="catégorie name" required>
                        @if($errors->has('name'))
                            <span class="text-danger error invalid-feedback">
                                {{ $errors->first('name') }}
                            </span>
                        @endif
                       {{-- <span class="messages"><p class="text-danger error">Name can't be blank</p></span>--}}
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

