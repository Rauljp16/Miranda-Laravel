
<h1>Create Activity:</h1>

<form action="{{ route('activities.store') }}" method="POST" style="display:flex; flex-direction:column; gap:20px; width:250px;" >
        @csrf

        <div style="display:flex; justify-content: space-between">
            <label for="type">Type:</label>
            <select name="type" id="type" required>
                <option value="">Select an activity type</option>
                <option value="surf">Surf</option>
                <option value="windsurf">Windsurf</option>
                <option value="kayak">Kayak</option>
                <option value="atv">ATV</option>
                <option value="hot air balloon">Hot Air Balloon</option>
            </select>
        </div>

        <div style="display:flex; justify-content: space-between">
            <label for="user_id">User ID:</label>
            <input type="number" name="user_id" id="user_id" required>
        </div>

        <div style="display:flex; justify-content: space-between">
            <label for="date">Date:</label>
            <input type="date" name="date" id="date" required>
        </div>

        <div style="display:flex; justify-content: space-between">
            <label for="paid">Paid:</label>
            <input type="checkbox" name="paid" id="paid" value="1">
        </div>

        <div style="display:flex; justify-content: space-between">
            <label for="notes">Notes:</label>
            <textarea name="notes" id="notes" placeholder="Enter notes (optional)"></textarea>
        </div>

        <div style="display:flex; justify-content: space-between">
            <label for="satisfaction">Satisfaction (1-5):</label>
            <input type="number" name="satisfaction" id="satisfaction" min="1" max="5">
        </div>

        <button type="submit">Create Activity</button>
    </form>