@extends('admin.master')
@section('title', __('keywords.edit_company'))



@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12"> 
        <h2 class="h5 page-title">{{ __('keywords.edit_company') }}</h2>

        
        <div class="card shadow">
            <div class="card-body">              
             <form action="{{ route('admin.companies.update', ['company'=>$company]) }}" method="post" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              
                
               <div class="row">
                    
                    <div class="col-md-12">
                      
                        
                        <x-form-label title="image"></x-form-label>
                        <input type="file"  name="image" class="form-control">
                      
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