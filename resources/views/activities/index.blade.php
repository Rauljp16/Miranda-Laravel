
<h1>Activities.</h1>
<h3> User: {{ $user_id}}</h3>

<ul>

    @foreach ($activities as $activity)
    <strong>Activity</strong>
    <li><p>TYPE: {{$activity["type"]}}</p></li>
    <li><p>DATE: {{$activity["date"]}}</p></li>
    <br>

    @endforeach

</ul>