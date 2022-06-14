@extends('adminlte::page')

    
@section('title')
Show Employe | Laravel employes App
@endsection
@section('content_header')

    <h1> Show employe </h1>
@endsection
@section('content')
    <div class="container">
        @include('layout.alert')

        <div class="row my-5">
            <div class="col-md-8 mx-auto">
               <div class="card my-3">
                   <div class="card-header">
                       <div class="text-center font-weight-bold text-uppercase">
                           <h5> {{$employe->fullname}}</h5>
                       </div>
                   </div>
                    <div class="mt-2 text-center font-weight-bold text-uppercase">
                        <a href="{{route('vacation.request',$employe->registration_number)}}" class="btn btn-outline-dark">
                            Vacation Request
                        </a>
                        <a href="{{route('certificate.request',$employe->registration_number)}}" class="btn btn-outline-danger">
                            Work Certificate Request
                        </a>
                    </div>
                    <hr>                    
                   <div class="card-body">
                        <div class="card-body">
                            
                                <div class="form-group mb-3">
                                    <label for="registration_number">Registration Number</label>
                                    <input type="text" class="form-control rounded-0" disabled name="registration_number" maxlength="8" 
                                    placeholder="Registration number" value="{{$employe->registration_number}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="fullname">Fullname</label>
                                    <input type="text" class="form-control rounded-0" disabled name="fullname" 
                                    placeholder="Fullname" value="{{$employe->fullname}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="depart">Departement</label>
                                    <input type="text" class="form-control rounded-0" disabled name="depart" 
                                    placeholder="depart" value="{{$employe->depart}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="hire_date">Hire Date</label>
                                    <input type="date" class="form-control rounded-0" disabled name="hire_date" 
                                    placeholder="Hire date" value="{{$employe->hire_date}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="phone">Phone</label>
                                    <input type="tel" class="form-control rounded-0" disabled name="phone" 
                                    placeholder="Phone" value="{{$employe->phone}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="adresse">Adresse</label>
                                    <input type="text" class="form-control rounded-0" disabled name="adresse" 
                                    placeholder="Adresse" value="{{$employe->adresse}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control rounded-0" disabled name="city" 
                                    placeholder="city" value="{{$employe->city}}">
                                </div>
                              
                        </div>

                   </div>
               </div>
               
            </div>
        </div>
    </div>
@endsection

