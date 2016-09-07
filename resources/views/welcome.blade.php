@extends('layouts.app')


<style>
    .Alert{
        background: #e3e3e3;
    }
    
    .Alert--Info{
        background: #e3e3e3;
    }
    
    .Alert--Success{
        background: #73ca73;
        color: white;
    }
    
    .Alert--Error{
        background: red;
        color: white;
    }
</style>


@section('content')
<div class="container">
    @include ('flash')
    
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
