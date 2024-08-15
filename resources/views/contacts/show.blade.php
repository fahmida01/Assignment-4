<p><strong> Id :</strong> {{ $contact->id }}</p>
<p><strong> Name:</strong> {{ $contact->name }}</p>
<p><strong> Email:</strong> {{ $contact->email }}</p>
<p><strong> Phone:</strong> {{ $contact->phone }}</p>
<p><strong> Address:</strong> {{ $contact->address }}</p>
<a href="{{ url('/contacts/' . $contact->id . '/edit') }}">Edit</a>
<form action="{{ url('/contacts/' . $contact->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
<a href="{{ url('/contacts') }}">Back to Contacts</a>
