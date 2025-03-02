@extends('admin.master')
@section('title', __('keywords.add_new_member'))



@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12"> 
        <h2 class="h5 page-title">{{ __('keywords.add_new_member') }}</h2>

        
        <div class="card shadow">
            <div class="card-body">              
             <form action="{{ route('admin.members.store') }}" method="post" enctype="multipart/form-data">
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

                    <div class="col-md-4">
                      
                        
                        <x-form-label title="facebook"></x-form-label> 
                        
                        <input type="text"  name="facebook" class="form-control" placeholder="{{ __('keywords.facebook') }}">
                      
                    </div>

                    <div class="col-md-4">
                      
                        
                        <x-form-label title="twitter"></x-form-label> 
                        
                        <input type="text"  name="twitter" class="form-control" placeholder="{{ __('keywords.twitter') }}">
                      
                    </div>

                    <div class="col-md-4">
                      
                        
                        <x-form-label title="linkedin"></x-form-label> 
                        
                        <input type="text"  name="linkedin" class="form-control" placeholder="{{ __('keywords.linkedin') }}">
                      
                    </div>
                    <div class="col-md-12">
                      
                        
                        <x-form-label title="image"></x-form-label> 
                        
                        <input type="file"  name="image" class="form-control-file" >
                      
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