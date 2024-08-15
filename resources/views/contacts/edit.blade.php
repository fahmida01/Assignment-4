<form method="POST" action="{{ url('/contacts/' . $contact->id) }}">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name" value="{{ $contact->name }}" required>
    <input type="email" name="email" placeholder="Email" value="{{ $contact->email }}" required>
    <input type="text" name="phone" placeholder="Phone" value="{{ $contact->phone }}"required>
    <input type="text" name="address" placeholder="Address" value="{{ $contact->address }}"required>
    <button type="submit">Update</button>
</form>
<a href="{{ url('/contacts') }}">Back to Contacts</a>
