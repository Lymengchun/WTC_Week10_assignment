@extends('layouts.app')

@section('content')





    <div class="container">
       <div class="row">
            <div class=" d-flex justify-content-center mt-5">
                
                <div class="d-flex flex-column">
                    
                        <p class="font-weight-bold">Create Category</p>
                        <form class="form-inline mt-3">
                            <input class="form-control mr-sm-2" type="create" placeholder="Type Category" aria-label="create">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Create</button>
                        </form>
                        
                        <hr style="width:100%">

                </div>
                
            </div>
          
               
          
                <div class="col ml-5">
                    <h1>Select Category</h1> 
                    
                    <p class="font-weight-bold">Category</p>
                    <select class="form-control">
                        <option>Default select</option>
                    </select>
                    <hr>
                    <p class="font-weight-bold">Name</p>
                    <select class="form-control">
                        <option>Default select</option>
                    </select> 
                    <hr>
                    <p class="font-weight-bold">Unit Price</p>
                    <select class="form-control">
                        <option>Default select</option>
                    </select> 
                </div>

            
               

              


        </div>
        
    </div>
    
    


    
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
