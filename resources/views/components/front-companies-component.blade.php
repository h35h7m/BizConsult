<!-- Client Start -->
@if (count($companies) > 0)
<div class="container-xxl bg-primary my-6 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        @foreach ($companies  as $company )
        <div class="owl-carousel client-carousel">
            <img src="{{ asset("storage/companies/$company->image") }}" alt="#"
                      width="50px" >
        </div>
        @endforeach
        
    </div>
</div>
@endif

<!-- Client End -->