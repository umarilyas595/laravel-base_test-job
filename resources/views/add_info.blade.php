@extends('layouts.app')
@section('page_content')
<section class="main-login">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="form-container">

                    <form method="post" action="{{ route('add.info.form.submit') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="name">Name <span class="reqField">*</span></label>
                                <input type="text" class="inputText" id="name" name="name" value="{{ old('name') }}">
                                @if ($errors->has('name')) <span class="validation-error">{{ $errors->first('name') }} </span> @endif
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12 form-group"> 
                                <label for="province">Province <span class="reqField">*</span></label>
                                <select class="select-option inputText" name="province">
                                    <option value="">Select Province</option>
                                    <option value="Ontario" @if( old('province')== 'Ontario') selected="selected" @endif>Ontario</option>
                                    <option value="Québec" @if( old('province')== 'Québec') selected="selected" @endif>Québec</option>
                                    <option value="Nova Scotia" @if( old('province')== 'Nova Scotia') selected="selected" @endif>Nova Scotia</option>
                                    <option value="New Brunswick" @if( old('province')== 'New Brunswick') selected="selected" @endif>New Brunswick</option>
                                    <option value="Manitoba" @if( old('province')== 'Manitoba') selected="selected" @endif>Manitoba</option>
                                    <option value="British Columbia" @if( old('province')== 'British Columbia') selected="selected" @endif>British Columbia</option>
                                    <option value="Prince Edward Island" @if( old('province')== 'Prince Edward Island') selected="selected" @endif>Prince Edward Island</option>
                                    <option value="Saskatchewan" @if( old('province')== 'Saskatchewan') selected="selected" @endif>Saskatchewan</option>
                                    <option value="Alberta" @if( old('province')== 'Alberta') selected="selected" @endif>Alberta</option>
                                    <option value="Newfoundland and Labrador" @if( old('Newfoundland-and-Labrador')== 'Ontario') selected="selected" @endif>Newfoundland and Labrador</option>
                                    <option value="Northwest Territories" @if( old('Northwest Territories')== 'Northwest Territories') selected="selected" @endif>Northwest Territories</option>
                                    <option value="Yukon" @if( old('province')== 'Yukon') selected="selected" @endif>Yukon</option>
                                    <option value="Nunavut" @if( old('province')== 'Nunavut') selected="selected" @endif>Nunavut</option>
                                </select>
                                @if ($errors->has('province')) <span class="validation-error">{{ $errors->first('province') }} </span> @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="phone">Telephone <span class="reqField">*</span></label>
                                <input type="text" class="inputText" id="phone" name="phone" value="{{ old('phone') }}">
                                @if ($errors->has('phone')) <span class="validation-error">{{ $errors->first('phone') }} </span> @endif
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="postal_code">postal Code <span class="reqField">*</span></label>
                                <input type="text" class="inputText" id="postal_code" name="postal_code" value="{{ old('postal_code') }}">
                                @if ($errors->has('postal_code')) <span class="validation-error">{{ $errors->first('postal_code') }} </span> @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="salary">Salary <span class="reqField">*</span></label>
                                <input type="text" class="inputText" id="salary" name="salary" value="{{ old('salary') }}">
                                @if ($errors->has('salary')) <span class="validation-error">{{ $errors->first('salary') }} </span> @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="save-btn-group text-right">
                                    <button type="submit" name="submit" class="save-btn">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>          
                </div><!-- form container -->
            </div>
        </div>
    </div>
</section>

@endsection
