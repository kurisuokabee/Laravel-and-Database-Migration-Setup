<div>
    <!-- He who is contented is rich. - Laozi -->
    <h1>Customer Details</h1>
   
    <div>
            <h2>Name: {{ $customer->first_name}} {{ $customer->last_name}} </h2>
            <p>Phone: {{ $customer->contact}} </p>
            <p>Address: {{ $customer->address}} </p>
            <p>Created At: {{$customer->created_at}}</p>
    </div>
    <form action={{ route('customers.destroy', $customer->id)}} method="POST" onsubmit="return confirm('Are you sure you want delete this customer?')">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Customer</button>
    </form> 
    <a href={{ route('customers.edit', $customer->id)}}>Edit Customer</a>
    <a href={{ route('customers.index')}}>Back to Customer List</a>
</div>
