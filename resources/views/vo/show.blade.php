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
			
			table {
				width: 100%;
				<!--border-collapse: collapse;-->
				margin: 30px auto;
				
			}

			tr,th,td
			{
				/*border: 1px solid black;*/
				text-align: justify;
				font-weight: bold;
				padding: 12px ;
				width: 5%;
				/height: 20%;
				/*display: inline-block;*/
				
			}
			
			tr:nth-of-type(1)
			{
				font-size: 18px;
				background-color: #00cc99;
			}
			tr:nth-child(even){background-color: #ccccb3 }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <!--div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div-->
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Updated Profile Information
                </div>
				<div>
				
					<table>
							<th>VO Name</th>
							<th>Email</th>
							<th>Phone Number</th>
							<th>Required Skills</th>
							<th>Description</th>
							<th>Location</th>
							<th>Work Hours</th>
							<th>Time Period</th>
							<th>Stipend</th>
							
								
							<tr>
							<td>{{$vo->name}}</td>
							<td>{{$vo->email}}</td>
							<td>{{$vo->phone_number}}</td>
							<td>{{$vo->required_skills}}</td>
							<td>{{$vo->vo_description}}</td>
							<td>{{$vo->work_location}}</td>
							<td>{{$vo->work_hours}}</td>
							<td>{{$vo->time_period}}</td>
							<td>{{$vo->stipend}}</td>
							</tr>
				
							
						</table>
				
					<!--p>VO Name:{{$vo->name}}</p>
					<p>Email: {{$vo->email}}</p>
					<p>Phone:{{$vo->phone_number}}</p>
					<p>Required Skills:{{$vo->required_skills}}</p>
					<p>Description:{{$vo->vo_description}}</p>
					<p>Work Location:{{$vo->work_location}}</p>
					<p>Work Hours:{{$vo->work_hours}}</p>
					<p>Time Period:{{$vo->time_period}}</p>
					<p>Stipend:{{$vo->stipend}}</p-->
					
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
