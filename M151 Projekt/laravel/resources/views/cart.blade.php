<x-layout>
    <div class="productstable">

        <h3>Warenkorb</h3>
        <p style="text-align:right;">Preis:</p>
        @foreach ($products as $item)
            @if (!($amount[$item['id'] - 1] == 0 || $amount[$item['id'] - 1] === null))
                <div class="rows">
                    <img src="{{ asset($item->image) }}">
                    <br><br><br>
                    <ul>
                        <li>
                            <label>Produkt: {{ $item['name'] }}</label>
                        </li>
                        <li>
                            <label>Einzelpreis: {{ $item['price'] }} Fr.</label>
                        </li>
                        <li>
                            <label>Menge im Warenkorb: {{ $amount[$item['id'] - 1] }}</label>
                        </li>
                    </ul><br><br>
                    <p style="text-align: right;">{{ $item['price'] * $amount[$item['id'] - 1] }} Fr.</p>
                </div>
            @endif
        @endforeach
    </div>
</x-layout>
