<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
				<!--background-image: linear-gradient(170deg, #B621fe, #1fd1f9);-->
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
				color: #000000
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md">
                    Volunteer's Interests
                </div>
				<div>Edit</div>
				
				<section class="w3-container">
				@if($errors->any())
					<section class="w3-red">
						<ul>
							@foreach($errors->all() as $error)
								<li>{{$error}}</li>
							@endforeach
						</ul>
					</section>
				@endif
			</section>
				<div>
				{!! Form::open (array('method' => 'PUT','url' => '/interest/'. $interest->id)) !!}
					<p>
						{!!Form::Label('firstName', 'First Name') !!}
						{!!Form::text('firstName', $interest->firstName) !!}
					</p>
					<p>
						{!!Form::Label('lastName', 'Last Name') !!}
						{!!Form::text('lastName', $interest->lastName) !!}
					</p>
					<p>
						{!!Form::Label('email', 'Email') !!}
						{!!Form::text('email', $interest->email) !!}
					</p>
					<p>
						{!!Form::Label('interest', "Volunteer's Interest") !!}
						{!!Form::select('interest', array('animal care'=>'Animal Care',
														  'senior citizen care'=>'Senior Citizen Care',
														  'child care'=>'Child Care','sports'=>'Sports'),$interest->interest) !!}
					</p>
					{!!Form::submit('Update') !!}
				{!! Form::close() !!}
				</div>
				
                <!--div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div-->
            </div>
        </div>
    </body>
</html>
