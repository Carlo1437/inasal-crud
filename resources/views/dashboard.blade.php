<x-app-layout>
    <div class="container mx-auto p-6">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-700">Product Management</h1>
            <a href="{{ route('products.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                Add Product
            </a>
        </div>

        <!-- Table Section -->
        <div class="bg-white rounded shadow p-4">
            <table class="min-w-full table-auto border-collapse border border-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Name</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Qty</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Price</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Description</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Actions</th>
                    </tr>
                </thead>
                @foreach($products as $product )
                     
                <tbody>
                    <!-- Example Row -->
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2">{{$product->id}}</td>
                        <td class="border border-gray-300 px-4 py-2">{{$product->name}}</td>
                        <td class="border border-gray-300 px-4 py-2">{{$product->qty}}</td>
                        <td class="border border-gray-300 px-4 py-2">{{$product->price}}</td>
                        <td class="border border-gray-300 px-4 py-2">{{$product->description}}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <a href="{{ route('products.edit', $product->id) }}" class="px-2 py-1 bg-green-500 text-white rounded">
                                Edit
                            </a>                                                      
                            <button onclick="deleteProduct({{ $product->id }})" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600">
                                Delete
                            </button>
                            <form id="delete-product-form-{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}" method="post" style="display: none;">
                                @csrf
                                @method('delete')
                            </form>
                          
                        </td>
                    </tr>
                 @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
          function deleteProduct(id) {
            if (confirm("Are you sure you want to delete this product?")) {
                document.getElementById('delete-product-form-' + id).submit();
            }
        }
    </script>
</x-app-layout>
