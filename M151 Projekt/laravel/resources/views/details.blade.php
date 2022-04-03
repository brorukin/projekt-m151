<x-layout>
    <p>
        {{ $product['name'] }}
        {{ $product['price'] }}
        {{ $product['details'] }}
        {{ $product['manual'] }}
        <img src="{{ asset($product->image) }}">
    <form action="/AddtoCart/{{ $product->id }}" method="POST">
        @csrf
        <input type="number" name="amount" min="1" max="99" placeholder="0" required>
        <button type="submit" name="cartbtn">Hinzufügen</button>
    </form>

    </p>
</x-layout>
