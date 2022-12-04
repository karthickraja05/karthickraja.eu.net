@extends('layout')

@section('content')
<div class="section" id="skill">
  <div class="container">
    <div class="h4 text-center mb-4 title">Professional Skills</div>
    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <div class="card-body">
        
        <div class="row">
          @foreach($skill as $key)
          <div class="col-md-6">
            <div class="progress-container progress-primary"><span class="progress-badge">{{$key[0]}}</span>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10" data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{$key[1]}}%;"></div><span class="progress-value">{{$key[1]}}%</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection