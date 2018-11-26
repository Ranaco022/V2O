
@yield('vo-container')
<div class="flex-center position-ref full-height">
<div class="content">
    <div>
        <div class="title m-b-md">
            <h1>List of Current Volunteers</h1>
        </div>
        <div class = "vo-container">

            <table class="tg">
                <tr>
                    <th class="tg-ddb2">First Name</th>
                    <th class="tg-0lax">Last Name</th>
                    <th class="tg-0lax">Address</th>
                    <th class="tg-0lax">Email</th>
                    <th class="tg-0lax">Home #</th>
                    <th class="tg-0lax">Cell #</th>
                    <th class="tg-0lax">Hours Worked</th>
                </tr>

            @foreach ($currentvolunteers as $currentvolunteer)
                <p>Organization Name: {{$currentvolunteer->volorg->name}}</p>
                    <tr>
                        <td class="tg-buh4">{{$currentvolunteer->firstName}}</td>
                        <td class="tg-buh4">{{$currentvolunteer->lastName}}</td>
                        <td class="tg-buh4">{{$currentvolunteer->homeAddress}}</td>
                        <td class="tg-buh4">{{$currentvolunteer->emailAddress}}</td>
                        <td class="tg-buh4">{{$currentvolunteer->homeNumber}}</td>
                        <td class="tg-buh4">{{$currentvolunteer->cellNumber}}</td>
                        <td class="tg-buh4">{{$currentvolunteer->hoursWorked}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
</div>


