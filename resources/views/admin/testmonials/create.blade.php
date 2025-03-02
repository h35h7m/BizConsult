@extends('admin.master')
@section('title', __('keywords.add_new_testmonial'))



@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12"> 
        <h2 class="h5 page-title">{{ __('keywords.add_new_testmonial') }}</h2>

        
        <div class="card shadow">
            <div class="card-body">              
             <form action="{{ route('admin.testmonials.store') }}" method="post" enctype="multipart/form-data">
              @csrf
               <div class="row">
                    <div class="col-md-6">
                      
                        
                        <x-form-label title="name"></x-form-label> 
                        <input type="text"  name="name" class="form-control" placeholder="{{ __('keywords.name') }}">
                      
                    </div> 

                    <div class="col-md-6">
                      
                        
                        <x-form-label title="postion"></x-form-label> 
                        
                        <input type="text"  name="postion" class="form-control" placeholder="{{ __('keywords.postion') }}">
                      
                    </div>
                    <div class="col-md-12">
                      
                        
                        <x-form-label title="image"></x-form-label> 
                        
                        <input type="file"  name="image" class="form-control-file" >
                      
                    </div>

                    <div class="col-md-12 mt-2">
                      
                        
                        <x-form-label title="description"></x-form-label> 
                        <textarea type="text"  name="description" class="form-control" placeholder="{{ __('keywords.description') }}"></textarea>
                      
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