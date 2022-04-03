<x-layout>
    <form method="POST" action="/register">
        @csrf
        <div class="container">
            <h4>{{ $msg }}</h4>
            <h2>Register</h2><br>

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Namen eingeben:" name="name" required><br>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Email eingeben:" name="email" id="email" required><br>

            <label for="password"><b>Passwort</b></label>
            <input type="password" placeholder="Passwort eingeben:" name="password" id="psw" required><br>

            <label for="adresse"><b>Adresse</b></label>
            <input type="text" placeholder="Adresse eingeben:" name="adresse" required><br>

            <label for="telefonnummer"><b>Telefonnummer</b></label>
            <input type="tel" placeholder="Telefonnummer eingeben:" name="telefonnummer" required><br>

            <label for="plz"><b>PLZ</b></label>
            <input type="number" placeholder="PLZ Eingeben"  name="plz" required><br>
<br>
            <button type="submit">Registrieren</button><br>
        </div>
    </form>
</x-layout>
