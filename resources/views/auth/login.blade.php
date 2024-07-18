<h1>Login</h1>
<hr>
<form action="/login" method="POST" novalidate>
    @csrf
    <div class="mb-4">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full py-2 px2 rounded">
        @error('email')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="w-full py-2 px2 rounded">
        @error('password')
            <p>{{ $message }}</p>
        @enderror

    </div>
    <button type="submit">Login</button>

</form>
