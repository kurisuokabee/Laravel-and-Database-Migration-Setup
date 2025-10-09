<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
    <h1>Customer Details</h1>
    <form action={{route('customers.update', $customer->id)}} method="POST">
        @csrf
        @method('PUT')
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" 
            value= "{{ old('first_name', $customer->first_name)}}" required>
        <br>
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" 
            value= "{{ old('last_name', $customer->last_name)}}" required>
        <br>
        <label for="contact">Phone:</label>
        <input type="text" id="contact" name="contact" 
            value= "{{ old('contact', $customer->contact)}}" required>
        <br>
        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" cols="50" required>
            {{ old('address', $customer->address)}}
        </textarea>
        <br>
        <button type="submit">Update Customer Info</button>
    </form>

    <a href={{ route('customers.index')}}>Back to Customer List</a>
</div>
