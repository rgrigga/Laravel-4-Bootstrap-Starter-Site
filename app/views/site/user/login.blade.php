@extends('layouts.scaffold')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.login') }}} ::
@parent
@stop

@section('nav')
<!-- @ parent -->
@include('site.partials.nav-top-min')
@stop

{{-- Content --}}
@section('main')
<h1>
    {{{$company->brand}}}
</h1>

<style>
    .page-header{
        padding-top:+60px;
    }
</style>

<div class="page-header">
	<h1>Welcome Home.</h1>
</div>


<form method="POST" action="{{ URL::to('user/login') }}" accept-charset="UTF-8">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <fieldset>
        <label for="email">{{ Lang::get('confide::confide.username_e_mail') }}</label>
        <input tabindex="1" placeholder="{{ Lang::get('confide::confide.username_e_mail') }}" type="text" name="email" id="email" value="{{ Input::old('email') }}">

        <label for="password">
            {{ Lang::get('confide::confide.password') }}
            <small>
                <a href="forgot">{{ Lang::get('confide::confide.login.forgot_password') }}</a>
            </small>
        </label>
        <input tabindex="2" placeholder="{{ Lang::get('confide::confide.password') }}" type="password" name="password" id="password">

        <label for="remember" class="checkbox">{{ Lang::get('confide::confide.login.remember') }}
            <input type="hidden" name="remember" value="0">
            <input tabindex="4" type="checkbox" name="remember" id="remember" value="1">
        </label>

        @if ( Session::get('error') )
        <div class="alert alert-error">{{ Session::get('error') }}</div>
        @endif

        @if ( Session::get('notice') )
        <div class="alert">{{ Session::get('notice') }}</div>
        @endif

        @if ( Session::get('notice') )
        <div class="alert">{{ Session::get('notice') }}</div>
        @endif

        <button tabindex="3" type="submit" class="btn">{{ Lang::get('confide::confide.login.submit') }}</button>
    </fieldset>
</form>

More about that later.  For now, You can go back and look around the main site, or you 

Not A Member?
        <a class="btn btn-large btn-primary" href="{{{ URL::to('user/create') }}}">Sign Up</a>

@stop
