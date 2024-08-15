<form method="GET" action="{{ url('/contacts') }}">
    <input type="text" name="search" placeholder="Search by name or email" value="{{ request('search') }}">
    <button type="submit">Search</button>
</form>

<a href="{{ url('/contacts/create') }}">Add New Contact</a>

<table>
    <thead>
    </thead>
        <tr>
            <th><a href="{{ url('/contacts?sort=id') }}">Id  </a></th>
            <th><a href="{{ url('/contacts?sort=name') }}">Name     </a></th>
            <th><a href="{{ url('/contacts?sort=created_at') }}">Created At     </a></th>
            <th><a href="{{ url('/contacts?sort=updated_at') }}">Updated At    </a></th>
            <th>Email     </th>
            <th>Phone    </th>
            <th>Address   </th>
    
        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->created_at }}</td>
                <td>{{ $contact->updated_at }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->address }}</td>
                <td>
                    <a href="{{ url('/contacts/' . $contact->id) }}">View</a>
                    <a href="{{ url('/contacts/' . $contact->id . '/edit') }}">Edit</a>
                    <form action="{{ url('/contacts/' . $contact->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
