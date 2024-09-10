<h1>Edit Activity:</h1>

<form action="{{ route('activities.update', $activity->id) }}" method="POST" style="display:flex; flex-direction:column; gap:20px; width:250px;" >
        @csrf
        @method('PATCH')

        <div style="display:flex; justify-content: space-between">
        <label for="type">Type:</label>
        <select name="type" id="type" required>
            <option value="">Select an activity type</option>
            <option value="surf" {{ $activity->type == 'surf' ? 'selected' : '' }}>Surf</option>
            <option value="windsurf" {{ $activity->type == 'windsurf' ? 'selected' : '' }}>Windsurf</option>
            <option value="kayak" {{ $activity->type == 'kayak' ? 'selected' : '' }}>Kayak</option>
            <option value="atv" {{ $activity->type == 'atv' ? 'selected' : '' }}>ATV</option>
            <option value="hot air balloon" {{ $activity->type == 'hot air balloon' ? 'selected' : '' }}>Hot Air Balloon</option>
        </select>
    </div>

    <div style="display:flex; justify-content: space-between">
        <label for="date">Date:</label>
        <input type="date" name="date" id="date" value="{{ old('date', (is_object($activity->date) ? $activity->date->format('Y-m-d') : \Carbon\Carbon::parse($activity->date)->format('Y-m-d'))) }}" required>
    </div>    
    <div style="display:flex; justify-content: space-between">
        <label for="paid">Paid:</label>
        <input type="checkbox" name="paid" id="paid" value="1" {{ $activity->paid ? 'checked' : '' }}>
    </div>

    <div style="display:flex; justify-content: space-between">
        <label for="notes">Notes:</label>
        <textarea name="notes" id="notes" placeholder="Enter notes (optional)">{{ old('notes', $activity->notes) }}</textarea>
    </div>

    <div style="display:flex; justify-content: space-between">
        <label for="satisfaction">Satisfaction (1-5):</label>
        <input type="number" name="satisfaction" id="satisfaction" min="1" max="5" value="{{ old('satisfaction', $activity->satisfaction) }}">
    </div>

        <button type="submit">Edit Activity</button>
    </form>