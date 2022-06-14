@extends('adminlte::page')

@section('title')
    Vacation Request
@endsection

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-8 mx-auto">
                <div class="card p-3 my-5">
                    <div class="card-header">
                        <h3>    Vacation Request
                        </h3>
                    </div>
                    <div class="card-body">
                <p class="lead">
                    <b> {{$employe->fullname}}</b> is presently employe with me in the following : 
                </p>
                <p class="lead">
                    <b> {{$employe->depart}}</b> departement. 
                </p>
                <p class="lead">
                    He is requesting a vacation starting from <b> ____________</b>
                </p>
                <p class="lead">
                    And ends on<b> ____________</b>
                </p>
                <p class="m-5">
                    _____________
                    _____________
                </p>
                <div class="my-4">
                    <a href="#" 
                        onclick="
                                 document.getElementById('printIcon').style.display = 'none';

                                 setTimeout(function(){
                                    document.getElementById('printIcon').style.display = 'inline';
                                },2000);
                                 window.print();
                                 "
                        class="btn btn-sm btn-primary" id="printIcon">
                        <i class="fas fa-print" > Print</i>
                    </a>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
@endsection