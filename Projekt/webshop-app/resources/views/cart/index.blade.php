<x-app-layout>
    @if(session('cart'))
    @foreach(session('cart') as $id => $details)
    <div>
        <h3>{{ $details['name'] }}</h3>
        <p>Ár: {{ $details['price'] }} Ft</p>
        <p>Mennyiség: {{ $details['quantity'] }}</p>

        <form action="{{ route('cart.update') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $id }}">
            <input type="number" name="quantity" value="{{ $details['quantity'] }}">
            <button type="submit">Akarsz többet?</button>
        </form>

        <form action="{{ route('cart.remove') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $id }}">
            <button type="submit">Törlés:</button>
        </form>
    </div>
    @endforeach
    <p>Összesen: {{ array_sum(array_column(session('cart'), 'price')) }} Ft</p>
    @else
    <p>ÜRES A KOSARAD!</p>
    @endif
</x-app-layout>