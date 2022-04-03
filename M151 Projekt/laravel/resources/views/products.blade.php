<x-layout>
    <div class="productstable">
        <table>
            <h1>Online-Shop</h1>
            <tr>
                <th>Name</th>
                <th>Bild</th>
                <th>Preis</th>
                <th>Details</th>
                <th>Warenkorb hinzufügen</th>
            </tr>
            @foreach ($products as $item)
                <tr><td>
                        {{ $item['name'] }}
                    </td>
                    <td>
                        <img src="{{ asset($item->image) }}">
                    </td>
                    <td>
                        {{ $item['price'] }} Fr.
                    </td>
                    <td>
                        <a href="/details/{{ $item->id }}">Details anzeigen</a>
                    </td>

                    <td>
                        <a href="/AddtoCart/{{ $item->id }}">Warenkorb hinzufügen</a>
                    </td>

                </tr>
                </button>
            @endforeach
        </table>
    </div>
</x-layout>
