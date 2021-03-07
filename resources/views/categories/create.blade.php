@extends('layouts.app')
@section('content')
<div class="container py-2">
    <div class="justify-content-center row">
        <div class="col-8">
            <h1 class="text-center text-primary display-4">Create New Category</h1>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('category.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label >Ctegory Name</label>
                            <input type="text" class="form-control form-control-lg" name="name">
                        </div><!-- name --> 

                        <div class="form-group text-center">
                            
                            <button type="submit" class="btn btn-primary btn-lg" >Add New Category</button>
                        </div><!-- name --> 

                        </form><!-- form -->
                    </div><!-- card-body -->
                </div><!-- card -->
        </div><!-- 8 -->
    </div><!-- row -->
</div><!-- container -->
    
@endsection