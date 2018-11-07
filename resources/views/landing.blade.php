@include('app.header')


<style type="text/css">

    body {
        background-color: #151619 !important;
        color: #868686;
        
    }

    .bg {
        width: 100%;
        background: url(https://desktop.github.com/images/star-bg.svg) no-repeat;
        height: 100vh;
        transition: 6s;
        position: absolute;
    }

    .tour_unload .bg {
        margin-top: -100% !important;
    }

    
    h1 {
        text-align: center;
        margin-top: 100px;
        font-family: "Whitney", sans-serif;
        font-size: 45px;
        color: #efefef;
    }
    .box {
    box-sizing: border-box;
    max-width: 1200px;
    padding: 72px 50px 0;
    position: relative;
    z-index: 1;
        margin-left: auto;
    margin-right: auto;
    transition: 10s;
    }
    .tour_unload .box {
        margin-top: -100% !important;
    }

    .box .logo {
        font-size: 100px;
        text-align: center;
    }
    .box span {
        margin: 55px;
        position: relative;
    }
    .box p {
    max-width: 700px;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    }
    #top {
        width: 100%;
        position: relative;
        height: 50px;
        padding: 10px;
            background: #191b1f;
            z-index: 9999;
    }
    #top #top_logo img {
        width: auto;
        height: 30px;
        float: left;
    }
    .box button {
        background: #efefef;
        padding: 10px;
        width: 190px;
        border-radius: 5px;
        font-size: 12px;
        font-weight: bold;
        line-height: 24px;
        float: left;
        margin: 10px;
        cursor: pointer;
    }
    .box .buttons {
            margin-left: auto;
    margin-right: auto;
    position: relative;
    width: 450px;
        display: flex;
    justify-content: space-between;
    }

    .box .enter_site {
            color: #efefef;
    background: #4d6dd0;
}
#logo img {
    width: auto;
    height: 80px;
}
#logo {
    margin-left: auto;
    margin-right: auto;
}

</style>
<div class="bg"></div><!-- PAGE -->

<div id="top">
    
    <div id="top_logo"><img src="images/logo_white.png" alt="Space"></div>

</div>

<div class="box">
    <!-- <span class="logo"><i class="fas fa-rocket fa-lg fa-fw"></i></span>-->


        <!-- <div id="logo"><img src="images/space.png" alt="Space"></div> -->



    <h1>What will you do with your Space? {{-- {{ $vars['jeff'] }} --}}</h1>
    <p>
    Space is a social platform for creators, fine-tuned to show off and amplify your creative content. Combining the freedom of a personal portfolio, with the magic of traditional social media. 
{{-- @if(isset($vars['o']))
{{ $vars['o'] }}
@endif --}}
    </p>

    <div class="buttons">
    <button class="taketour">Take Tour</button>
    <button class="enter_site">Enter Site</button>
    </div>



    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>


    @if (Auth::check())
        logged in
    @else
        logged out
    @endif 
</div>


@include('app.footer')