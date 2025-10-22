@extends('seller.layouts.layout')
@section('seller_page_title')
    Dashboard
@endsection
@section('seller_layout')
    <style>
  body {
    font-family: 'Segoe UI', sans-serif;
    background-color: #eef2f5;
    margin: 0;
    padding: 0;
  }

  .container {
    max-width: 600px;
    margin: 15px auto;
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
  }

  h2 {
    text-align: center;
    color: #2c3e50;
    margin-bottom: 25px;
  }

  label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #34495e;
  }

  input, select {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 15px;
  }

  button {
    width: 100%;
    padding: 12px;
    background-color: #2980b9;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
  }

  button:hover {
    background-color: #2471a3;
  }
</style>
</head>
<body>

  <div class="container">
    <h2>Update Account Status</h2>
    <form action="#" method="POST">
      <label for="account_number">Account Number</label>
      <input type="text" id="account_number" name="account_number" placeholder="Enter account number" required>

      <label for="customer_name">Customer Name</label>
      <input type="text" id="customer_name" name="customer_name" placeholder="Enter customer name" required>

      <label for="status">Account Status</label>
      <select id="status" name="status">
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
        <option value="suspended">Suspended</option>
        <option value="closed">Closed</option>
      </select>

      <label for="remarks">Remarks</label>
      <input type="text" id="remarks" name="remarks" placeholder="Optional remarks">

      <button type="submit">Update Status</button>
    </form>
  </div>

</body>

@endsection