@extends('layouts.master')


@section('content')

<style>

nav > .nav.nav-tabs{

border: none;
  color:#fff;
  background:#272e38;
  border-radius:0;

}
nav > div a.nav-item.nav-link,
nav > div a.nav-item.nav-link.active
{
border: none;
  padding: 18px 25px;
  color:#fff;
  background:#272e38;
  border-radius:0;
}

nav > div a.nav-item.nav-link.active:after
{
content: "";
position: relative;
bottom: -60px;
left: -10%;
border: 15px solid transparent;
border-top-color: #2C2C2C ;
}
.tab-content{
background: #fdfdfd;
  line-height: 25px;
  border: 1px solid #ddd;
  border-top:5px solid #F4F3EF;
  border-bottom:5px solid #F4F3EF;
  padding:30px 25px;
}

nav > div a.nav-item.nav-link:hover,
nav > div a.nav-item.nav-link:focus
{
border: none;
  background: #808080;
  color:#fff;
  border-radius:0;
  transition:background 0.20s linear;
}
</style>

<div class="row">
  <div class="col-12 ">
    <nav>

      <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-medical-tab" data-toggle="tab" href="#nav-medical" role="tab" aria-controls="nav-medical" aria-selected="true">M.Q</a>
        <a class="nav-item nav-link" id="nav-prior-tab" data-toggle="tab" href="#nav-prior" role="tab" aria-controls="nav-prior" aria-selected="false">P.I.M.N.I</a>
        <a class="nav-item nav-link" id="nav-occupational-tab" data-toggle="tab" href="#nav-occupational" role="tab" aria-controls="nav-occupational" aria-selected="false">OQ</a>
        <a class="nav-item nav-link" id="nav-general-tab" data-toggle="tab" href="#nav-general" role="tab" aria-controls="nav-general" aria-selected="false">Gen.Q</a>
        <a class="nav-item nav-link" id="nav-nutritional-tab" data-toggle="tab" href="#nav-nutritional" role="tab" aria-controls="nav-nutritional" aria-selected="false">N.Q</a>
        <a class="nav-item nav-link" id="nav-goal-tab" data-toggle="tab" href="#nav-goal" role="tab" aria-controls="nav-goal" aria-selected="false">Goal.Q</a>
        <a class="nav-item nav-link" id="nav-transformation-tab" data-toggle="tab" href="#nav-transformation" role="tab" aria-controls="nav-transformation" aria-selected="false">T.T</a>
      </div>

    </nav>
    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-medical" role="tabpanel" aria-labelledby="nav-home-tab">
         @include('clients_assesment.questions.medical')
      </div>

      <div class="tab-pane fade" id="nav-prior" role="tabpanel" aria-labelledby="nav-profile-tab">
        @include('clients_assesment.questions.prior_injuries')
      </div>

      <div class="tab-pane fade" id="nav-occupational" role="tabpanel" aria-labelledby="nav-contact-tab">
        @include('clients_assesment.questions.occupational')
      </div>

      <div class="tab-pane fade" id="nav-general" role="tabpanel" aria-labelledby="nav-about-tab">
        @include('clients_assesment.questions.general')
      </div>

      <div class="tab-pane fade" id="nav-nutritional" role="tabpanel" aria-labelledby="nav-about-tab">
        @include('clients_assesment.questions.nutritional')
      </div>

      <div class="tab-pane fade" id="nav-goal" role="tabpanel" aria-labelledby="nav-about-tab">
        @include('clients_assesment.questions.goal')
      </div>

      <div class="tab-pane fade" id="nav-transformation" role="tabpanel" aria-labelledby="nav-about-tab">
        @include('clients_assesment.questions.transformation')
      </div>
    </div>
  
  </div>
</div>
{{-- </div>
</div> --}}
@endsection
