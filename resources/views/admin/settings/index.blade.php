@extends('admin.master')
@section('title', __('keywords.settings'))



@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12"> 
        <h2 class="h5 page-title">{{ __('keywords.settings') }}</h2>

        
        <div class="card shadow">
            <div class="card-body">      
              <x-success-alert></x-success-alert>        
             <form action="{{ route('admin.settings.update', ['setting'=>$setting]) }}" method="post" enctype="multipart/form-data">
              @method('PUT')
              @csrf
              
                
               <div class="row">

                    <div class="col-md-6">
                        <x-form-label title="phone"></x-form-label>
                        <input type="text"  name="phone" class="form-control" placeholder="{{ __('keywords.phone') }}" value='{{ $setting->phone }}'>
                    </div> 

                    <div class="col-md-6">
                        <x-form-label title="email"></x-form-label>
                        <input type="text"  name="email" class="form-control" placeholder="{{ __('keywords.email') }}" value='{{ $setting->email }}'>
                    </div> 

                    <div class="col-md-6">
                        <x-form-label title="address"></x-form-label>
                        <input type="text"  name="address" class="form-control" placeholder="{{ __('keywords.address') }}" value='{{ $setting->address }}'>
                    </div> 

                    <div class="col-md-6">
                        <x-form-label title="facebook"></x-form-label>
                        <input type="url"  name="facebook" class="form-control" placeholder="{{ __('keywords.facebook') }}" value='{{ $setting->facebook }}'>
                    </div> 

                    <div class="col-md-6">
                        <x-form-label title="linkedin"></x-form-label>
                        <input type="url"  name="linkedin" class="form-control" placeholder="{{ __('keywords.linkedin') }}" value='{{ $setting->linkedin }}'>
                    </div> 

                    <div class="col-md-6">
                        <x-form-label title="instagram"></x-form-label>
                        <input type="url"  name="instagram" class="form-control" placeholder="{{ __('keywords.instagram') }}" value='{{ $setting->instagram }}'>
                    </div> 

                    <div class="col-md-6">
                        <x-form-label title="youtube"></x-form-label>
                        <input type="url"  name="youtube" class="form-control" placeholder="{{ __('keywords.youtube') }}" value='{{ $setting->youtube }}'>
                    </div> 

                    <div class="col-md-6">
                        <x-form-label title="twitter"></x-form-label>
                        <input type="url"  name="twitter" class="form-control" placeholder="{{ __('keywords.twitter') }}" value='{{ $setting->twitter }}'>
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