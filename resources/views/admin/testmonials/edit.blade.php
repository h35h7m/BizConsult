@extends('admin.master')
@section('title', __('keywords.edit_testmonial'))



@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12"> 
        <h2 class="h5 page-title">{{ __('keywords.edit_testmonial') }}</h2>

        
        <div class="card shadow">
            <div class="card-body">              
             <form action="{{ route('admin.testmonials.update', ['testmonial'=>$testmonial]) }}" method="post" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              
                
               <div class="row">
                    <div class="col-md-6">
                      
                        
                        <x-form-label title="name"></x-form-label>
                        <input type="text"  name="name" class="form-control" placeholder="{{ __('keywords.name') }}" value='{{ $testmonial->name }}'>
                      
                    </div> 

                    <div class="col-md-6">
                      
                        
                        <x-form-label title="postion"></x-form-label>
                        <input type="text"  name="postion" class="form-control" placeholder="{{ __('keywords.postion') }}" value='{{ $testmonial->postion }}'>
                      
                    </div>
                    <div class="col-md-12">
                      
                        
                        <x-form-label title="image"></x-form-label>
                        <input type="file"  name="image" class="form-control">
                      
                    </div>

                    <div class="col-md-12 mt-2">
                      
                      <x-form-label title="description"></x-form-label>
                        <textarea type="text"  name="description" class="form-control" placeholder="{{ __('keywords.description') }}" > {{ $testmonial->description }} </textarea>
                      
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