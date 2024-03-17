@extends('layout.app')

@section('content') 

 <div class="container mt-5">
    <div class="row ">
        <div class="col-md-6 mt-2">
            <h1>Looking for a job?</h1>
            <h3>Please Create an Account</h3>
            <img src="{{asset('image/register.png')}}" alt="">
        </div>
        <div class="col-md-6">
           <div class="card">
            <div class="card-header">Register </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Full Name</label>
                    <input type="text" name="name" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="Email" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" name="password" class="form-control" id="">
                </div>
                <br>
                <button class="btn btn-primary" type="submit">Register</button>
            </div>

           </div>
        </div> 
    </div>
</div>



@endsection