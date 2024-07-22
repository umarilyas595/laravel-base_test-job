@extends('layouts.app')
@section('page_content')




<div class="container">
    <div class="row">
        
        <div class="col-md-offset-2 col-md-8">
            <div class="alert alert-info alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ $message }}
            </div>
            <div class="form-container">
                <div class="form-data">
                    <ul>
                        <li><span class="label-name">Name</span><span class="seperator-col">:</span><span class="data-input">{{ $data->name }}</span></li>
                        <li><span class="label-name">Province</span><span class="seperator-col">:</span><span class="data-input">{{ $data->province }}</span></li>
                        <li><span class="label-name">Telephone</span><span class="seperator-col">:</span><span class="data-input">{{ $data->phone }}</span></li>
                        <li><span class="label-name">Postal code</span><span class="seperator-col">:</span><span class="data-input">{{ $data->postal_code }}</span></li>
                        <li><span class="label-name">Salary</span><span class="seperator-col">:</span><span class="data-input">{{ $data->salary }}</span></li>
                    </ul>
                </div>
            </div><!-- form container -->
        </div>
    </div>
</div>


@endsection
