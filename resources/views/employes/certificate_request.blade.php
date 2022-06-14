@extends('adminlte::page')

@section('title')
    Certificate Request
@endsection

@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-8 mx-auto">
                <div class="card p-3 my-5">
                    <div class="card-header">
                        <h3>        Certificate Request

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
                   His employment began on <b> {{$employe->hire_date}}</b>  
                </p>
                <p class="lead">
                    This certification is being upon the request of<b> {{$employe->fullname}}</b> for whatever legal purpose it may serve.  
                 </p>
                 <p class="lead">
                    Issued on <b> {{\Carbon\Carbon::today()->toDateString()}}</b>  
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