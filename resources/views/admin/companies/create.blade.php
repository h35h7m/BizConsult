@extends('admin.master')
@section('title', __('keywords.add_new_company'))



@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12"> 
        <h2 class="h5 page-title">{{ __('keywords.add_new_company') }}</h2>

        
        <div class="card shadow">
            <div class="card-body">              
             <form action="{{ route('admin.companies.store') }}" method="post" enctype="multipart/form-data">
              @csrf
               <div class="row">

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