<x-layout>
    <div class="productstable">
        <h3>Bestellen</h3>
        <form action="/ordering" method="POST">
        @foreach ($products as $item)
            @if (!($amount[$item['id']] == 0 || $amount[$item['id']] === null))
                <fieldset style="border:solid black;width: fit-content;">
                    Name: {{ $item['name'] }}
                    Bild: <img src="{{ asset($item->image) }}">
                    Preis: {{ $item['price'] * $amount[$item['id']] }}
                    Anzahl: {{ $amount[$item['id']] }}
                </fieldset>
            @endif
        @endforeach
        <Button type="submit">Bestellen</Button>
    </form>
    </div><br><br>
    <div class="productstable">
<h3>Alle getätigten Bestellungen auf dem Weg</h3>
<p> Hier foreach mit fieldset pro Bestellung</p>
    </div>
</x-layout>
