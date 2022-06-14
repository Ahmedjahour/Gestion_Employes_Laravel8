@extends('adminlte::page')

    
@section('title')
Add New Employe | Laravel employes App
@endsection
@section('content_header')

    <h1> Add new employe </h1>
@endsection
@section('content')
    <div class="container">
        @include('layout.alert')

        <div class="row my-5">
            <div class="col-md-8 mx-auto">
               <div class="card my-3">
                   <div class="card-header">
                       <div class="text-center font-weight-bold text-uppercase">
                           <h5>Add new employe</h5>
                       </div>
                   </div>
                   <div class="card-body">
                        <div class="card-body">
                            <form action="{{route('employes.store')}}" method="POST" class="mt-3">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="registration_number">Registration Number</label>
                                    <input type="text" class="form-control" name="registration_number" maxlength="8" 
                                    placeholder="Registration number" value="{{old('registration_number')}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="fullname">Fullname</label>
                                    <input type="text" class="form-control" name="fullname" 
                                    placeholder="Fullname" value="{{old('fullname')}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="depart">Departement</label>
                                    <input type="text" class="form-control" name="depart" 
                                    placeholder="depart" value="{{old('depart')}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="hire_date">Hire Date</label>
                                    <input type="date" class="form-control" name="hire_date" 
                                    placeholder="Hire date" value="{{old('hire_date')}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="phone">Phone</label>
                                    <input type="tel" class="form-control" name="phone" 
                                    placeholder="Phone" value="{{old('phone')}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="adresse">Adresse</label>
                                    <input type="text" class="form-control" name="adresse" 
                                    placeholder="Adresse" value="{{old('adresse')}}">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" name="city" 
                                    placeholder="city" value="{{old('city')}}">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                                
                            </form>
                        </div>

                   </div>
               </div>
               
            </div>
        </div>
    </div>
@endsection

