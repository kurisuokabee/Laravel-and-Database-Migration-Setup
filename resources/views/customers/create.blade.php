<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
    <form action={{route('customer.store')}} method="POST">
        @csrf
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>
        <br>
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>
        <br>
        <label for="contact">Phone:</label>
        <input type="text" id="contact" name="contact" required>
        <br>
        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" cols="50" required></textarea>
        <br>
        <button type="submit">Create Customer</button>
    </form>

    <a href={{ route('customers.index')}}>Back to Customer List</a>
</div>
