<div>
    <h1>Product List</h1>
    <ol>
        @foreach($products as $product)
            <li>
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p>Price: ${{ $product->price }}</p>
                <p>Stock Quantity: {{ $product->stock_quantity }}</p>
                <p>Saler: {{ $product->saler->name }}</p>
            </li>
        @endforeach
        {{ $products->links() }}
    </ol>
</div>