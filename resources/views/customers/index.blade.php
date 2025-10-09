<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
    <div>
        <a href={{ route('customers.create')}}>Create New Customer</a>
    </div>
    @foreach($customers as $customer)
    <div>
            <h2><a href={{route('customers.show', $customer->id)}}>Name: {{ $customer->first_name}} {{ $customer->last_name}}</a></h2>
            <p>Phone: {{ $customer->contact}} </p>
            <p>------------------------------------------------------------------ </p>
    </div>
    @endforeach 
</div>
