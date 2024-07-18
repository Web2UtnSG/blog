<h1>Register</h1>
<hr>
<form action="/register" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    @error('name')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    @error('email')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    @error('password')
        <p>{{ $message }}</p>
    @enderror
    <br>
    <label for="password_confirmation">Confirm Password</label>
    <input type="password" name="password_confirmation" id="password_confirmation">
    <br>
    <button type="submit">Register</button>

</form>
