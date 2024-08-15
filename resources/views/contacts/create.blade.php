<form method="POST" action="{{ url('/contacts') }}">
    @csrf
    <input type="Number" name="id" placeholder="Id" required>
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="phone" placeholder="Phone"required>
    <input type="text" name="address" placeholder="address"required>
