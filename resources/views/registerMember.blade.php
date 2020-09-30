@extends('layouts.admin')
   
@section('content')
      <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center" style="color: red">{{ __('Register and Accredit a member') }}</div>

                <div class="card-body">
                        <form method="POST" action="{{url('/store')}}" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                                <label for="phone_no" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>

                                <div class="col-md-6">
                                    <input id="phone_no" type="tel" maxlength="11" class="form-control{{ $errors->has('phone_no') ? ' is-invalid' : '' }}"
                                           name="phone_no" value="{{ old('phone_no') }}" required autofocus>

                                    @if ($errors->has('phone_no'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_no') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="dob"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth ') }}</label>

                                <div class="col-md-6">

                                    {{--<input id="dob" type="date" placeholder="(DD/MM/YYYY)"--}}
                                    <input id="dob" type="text" placeholder="(DD/MM/YYYY) Eg 22/04/1987"
                                           class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob"
                                           value="{{ old('dob') }}" required
                                           autofocus>
                                    @if ($errors->has('dob'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                <div class="col-md-6">
                                    <select id="gender" type="text" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="{{ old('gender') }}" required autofocus>
                                        <option value="male"> male</option>
                                        <option value="female">female</option>
                                    </select>
                                    @if ($errors->has('gender'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                             <div class="form-group row">
                                <label for="passport_name"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Upload Passport Photograph') }}</label>

                                <div class="col-md-6">
                         <input type="file" id="passport_name" class="form-control{{ $errors->has('passport_name') ? ' is-invalid' : '' }}"
                                           name="passport_name" value="{{ old('passport_name') }}" required autofocus>
                                    @if ($errors->has('passport_name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('passport_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                           <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address ') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address"
                                           value="{{ old('address') }}" required autofocus>

                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                        <p align="center"><strong> Select State </strong></p>

                        <div class="form-group row">
                            <label for="state"
                                class="col-md-4 col-form-label text-md-right">{{ __('state ') }}</label>
                            <div class="col-md-6">
                                <select name="state" id="state" onchange="changeCat(this);"
                                        class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}">
                                    <option value="">Select</option>
                                    <option value="Abia">Abia</option>
                                    <option value="Adamawa"> Adamawa </option>
                                    <option value="Akwa Ibom">Akwa Ibom</option>
                                    <option value="Anambra">Anambra</option>
                                    <option value="Bauchi">Bauchi</option>
                                    <option value="Bayelsa">Bayelsa</option>
                                    <option value="Benue">Benue</option>
                                    <option value="Borno">Borno</option>
                                    <option value="Cross River">Cross River</option>
                                    <option value="Delta">Delta</option>
                                    <option value="Ebonyi">Ebonyi</option>
                                    <option value="Edo">Edo</option>
                                    <option value="Ekiti">Ekiti</option>
                                    <option value="Enugu">Enugu</option>
                                    <option value="Gombe">Gombe</option>
                                    <option value="Imo">Imo</option>
                                    <option value="Jigawa">Jigawa</option>
                                    <option value="Kaduna">Kaduna</option>
                                    <option value="Kano">Kano</option>
                                    <option value="Katsina">Katsina</option>
                                    <option value="Kebbi">Kebbi</option>
                                    <option value="Kogi">Kogi</option>
                                    <option value="Kwara">Kwara</option>
                                    <option value="Lagos">Lagos</option>
                                    <option value="Nasarawa">Nasarawa</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Ogun">Ogun</option>
                                    <option value="Ondo">Ondo</option>
                                    <option value="Osun">Osun</option>
                                    <option value="Oyo">Oyo</option>
                                    <option value="Plateau">Plateau</option>
                                    <option value="Rivers">Rivers</option>
                                    <option value="Sokoto">Sokoto</option>
                                    <option value="Taraba">Taraba</option>
                                    <option value="Yobe">Yobe</option>
                                    <option value="Zamfara">Zamfara</option>                               
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lgalcda" class="col-md-4 col-form-label text-md-right">{{ __('LGA / LCDA') }}</label>

                            <div class="col-md-6">
                                <input id="lgalcda" type="text" class="form-control @error('lgalcda') is-invalid @enderror" name="lgalcda" value="{{ old('lgalcda') }}" required autocomplete="lgalcda" autofocus>

                                @error('lgalcda')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $lgalcda }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="party_reg_no" class="col-md-4 col-form-label text-md-right">{{ __('Party Registrtion Number') }}</label>

                            <div class="col-md-6">
                                <input id="party_reg_no" type="text" class="form-control @error('party_reg_no') is-invalid @enderror" name="party_reg_no" value="{{ old('party_reg_no') }}" required autocomplete="party_reg_no" autofocus>

                                @error('party_reg_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $party_reg_no }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                <div class="form-group row">
                            <label for="acc_no" class="col-md-4 col-form-label text-md-right">{{ __('Accrediation Number') }}</label>

                            <div class="col-md-6">
                                <input id="acc_no" type="text" class="form-control @error('acc_no') is-invalid @enderror" name="acc_no" value="{{ old('acc_no') }}" required autocomplete="acc_no" autofocus>

                                @error('acc_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $acc_no }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            <button type="reset" class="btn btn-danger">
                            {{ __('Reset')}}
                            </button>
                           </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@include ('layouts.footer')
</div>
@endsection