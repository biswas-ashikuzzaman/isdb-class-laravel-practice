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
      background-color: #27ae60;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #219150;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Add New Customer</h2>
    <form action="#" method="POST">
      <label for="name">Customer Name</label>
      <input type="text" id="name" name="name" placeholder="Enter full name" required>

      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" placeholder="Enter email" required>

      <label for="phone">Phone Number</label>
      <input type="tel" id="phone" name="phone" placeholder="Enter phone number" required>

      <label for="address">Address</label>
      <input type="text" id="address" name="address" placeholder="Enter address" required>

      <label for="account_type">Account Type</label>
      <select id="account_type" name="account_type">
        <option value="savings">Savings</option>
        <option value="current">Current</option>
        <option value="fixed">Fixed Deposit</option>
      </select>

      <label for="initial_deposit">Initial Deposit Amount</label>
      <input type="number" id="initial_deposit" name="initial_deposit" placeholder="Enter amount" required>

      <button type="submit">Add Customer</button>
    </form>
  </div>

</body>


@endsection