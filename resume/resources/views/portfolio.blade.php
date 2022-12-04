@extends('layout')

@section('content')

<div class="section" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ml-auto mr-auto">
        <div class="h4 text-center mb-4 title">Portfolio</div>
        </div>
    </div>
    <div class="tab-content gallery mt-5">
      <div class="tab-pane active">
        <div class="ml-auto mr-auto">
          <div class="row">
    @foreach ($results as $key)
    
          
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="{{$key->web}}">
                  <figure class="cc-effect"><img src="images/{{$key->file}}" alt="Image"/>
                    <figcaption>
                      <div class="h4">{{strtoupper($key->name)}}</div>
                      <p>{{strtoupper($key->name2)}}</p>
                    </figcaption>
                  </figure></a>
              </div>
            </div>
        
    @endforeach
        </div>
      </div>
    </div>
  </div>
  
</div>
</div>


@endsection