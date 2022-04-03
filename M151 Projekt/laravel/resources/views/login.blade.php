<x-layout>
    <form action="/login" method="POST">
        @csrf
        <div class="container">
            <h4>{{ $msg }}</h4>
            <h2>Login</h2><br>

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" id="name" required><br>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required><br><br>

            <a href="/register">Register</a><br><br>

            <button class="duolingo" type="submit">Login</button><br>
        </div>
    </form>
</x-layout>
