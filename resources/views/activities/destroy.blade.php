
<h1>Activity Deleted!!!</h1>

<div >
        <p><strong>Type:</strong> {{ $activity->type }}</p>
        <p><strong>User ID:</strong> {{ $activity->user_id }}</p>
        <p><strong>Date:</strong> {{ $activity->date }}</p>
        <p><strong>Paid:</strong> {{ $activity->paid ? 'Yes' : 'No' }}</p>
        <p><strong>Notes:</strong> {{ $activity->notes }}</p>
        <p><strong>Satisfaction:</strong> {{ $activity->satisfaction }}</p>
</div>

<div>
    <a href="{{ route('activities.index') }}">Back to Activities List</a>
</div>