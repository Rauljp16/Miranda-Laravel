
<h1>Activities.</h1>
<h3> User: {{ $user_id}}</h3>

<ul>
    
    @foreach ($activities as $activity)

    <strong>Activity</strong>

    <li><p>TYPE: {{$activity["type"]}}</p></li>

    <li><p>DATE: {{$activity["date"]}}</p></li>

    <li><p>NOTE: {{$activity["notes"]}}</p></li>

    <div style="display: Flex; gap: 15px">
    <form action="{{ route('activities.destroy', $activity->id) }}" method="POST">
            @csrf
            @method('DELETE')
        <button type="submit" style="background-color:red">Delete</button>
    </form>
    <form action="{{ route('activities.edit', $activity->id) }}" method="GET">
            @csrf
            @method('GET')
        <button type="submit" style="background-color:grey">Edit</button>
    </form>
    </div>
    <br>
    
    @endforeach
    
</ul>
