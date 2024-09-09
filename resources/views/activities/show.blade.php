

<h1>Activity created!!!</h1>

<div>
    <strong>Type:</strong> {{ $activity->type }}
</div>

<div>
    <strong>User ID:</strong> {{ $activity->user_id }}
</div>

<div>
    <strong>Date:</strong> {{ $activity->date }}
</div>

<div>
    <strong>Paid:</strong> {{ $activity->paid ? 'Yes' : 'No' }}
</div>

<div>
    <strong>Notes:</strong> {{ $activity->notes ?? 'No notes available' }}
</div>

<div>
    <strong>Satisfaction:</strong> {{ $activity->satisfaction ? $activity->satisfaction . '/5' : 'Not rated' }}
</div>

<div>
    <a href="{{ route('activities.index') }}">Back to Activities List</a>
</div>