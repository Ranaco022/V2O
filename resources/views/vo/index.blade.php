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
        <link href="{{asset('/css/voStyle.css')}}" rel="stylesheet" type="text/css">
		
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
            <!--div class="content"-->
			<div>
				 <div class="title m-b-md">
					<h1>Volunteer Organization List</h1>
				 </div>
					<div class = "vo-container">
						
						<table>
							<th>VO Name</th>
							<th>Email</th>
							<th>Phone Number</th>
							<th>Work Location</th>
							<th>Work Hours</th>
							
								@foreach ($vos as $vo)
								<tr>
								<td>{{$vo->name}}</td>
								<td>{{$vo->email}}</td>
								<td>{{$vo->phone_number}}</td>
								<td>{{$vo->work_location}}</td>
								<td>{{$vo->work_hours}}</td>
								</tr>
								@endforeach
							
						</table>
					</div>
					
			</div>
			<!--/div-->

        </div>
    </body>
</html>
