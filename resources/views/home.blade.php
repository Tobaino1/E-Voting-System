@extends('layouts.admin')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are welcome Admin  {{ Auth::user()->name }} 
                </div>

  <div class="col-md-6 col-lg-6">
@if (session('success'))
<div class="alert alert-success">
{{session('success')}}
</div>
@endif
</div> 

<ul>
         <li><a class="nav-link" href="{{ route('registerMember') }}">{{ __('Register New Member') }}</a></li>
         <li><a class="nav-link" href="{{ route('members_request') }}">{{ __('View All Accredited Member') }}</a></li>

</ul>
            </div>
        </div>
    </div>
</div>
@endsection