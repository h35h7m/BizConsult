@extends('admin.master')
@section('title', __('keywords.edit_feature'))



@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12"> 
        <h2 class="h5 page-title">{{ __('keywords.edit_feature') }}</h2>

        
        <div class="card shadow">
            <div class="card-body">              
             <form action="{{ route('admin.features.update', ['feature'=>$feature]) }}" method="post" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              
                
               <div class="row">
                    <div class="col-md-6">
                      
                        
                        <x-form-label title="title"></x-form-label>
                        <input type="text"  name="yitle" class="form-control" placeholder="{{ __('keywords.title') }}" value='{{ $feature->title }}'>
                      
                    </div> 

                    <div class="col-md-6">
                      
                        
                        <x-form-label title="icon"></x-form-label>
                        <input type="text"  name="icon" class="form-control" placeholder="{{ __('keywords.icon') }}" value='{{ $feature->icon }}'>
                      
                    </div>

                    <div class="col-md-12 mt-2">
                      
                      <x-form-label title="description"></x-form-label>
                        <textarea type="text"  name="description" class="form-control" placeholder="{{ __('keywords.description') }}" > {{ $feature->description }} </textarea>
                      
                    </div>   
                       
                </div>
                  
                    <x-submit></x-submit>
                  
             </form>
            </div>
          </div>
      </div> 
    </div> 
  </div>
@endsection