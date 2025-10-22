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

  .error {
    color: red;
    font-size: 14px;
    margin-top: -15px;
    margin-bottom: 15px;
  }
</style>

<div class="container">
  <h2>Add New Customer</h2>

  @if ($errors->any())
      <div class="error">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

  <form action="{{ route('accounts.store') }}" method="POST">
    @csrf

    <label for="customer_name">Customer Name</label>
    <input type="text" id="customer_name" name="customer_name" placeholder="Enter full name" value="{{ old('customer_name') }}" required>

    <label for="email">Email Address</label>
    <input type="email" id="email" name="email" placeholder="Enter email" value="{{ old('email') }}" required>

    <label for="phone">Phone Number</label>
    <input type="tel" id="phone" name="phone" placeholder="Enter phone number" value="{{ old('phone') }}" required>

    <label for="address">Address</label>
    <input type="text" id="address" name="address" placeholder="Enter address" value="{{ old('address') }}" required>

    <label for="account_type">Account Type</label>
    <select id="account_type" name="account_type">
      <option value="savings" {{ old('account_type') == 'savings' ? 'selected' : '' }}>Savings</option>
      <option value="current" {{ old('account_type') == 'current' ? 'selected' : '' }}>Current</option>
      <option value="fixed" {{ old('account_type') == 'fixed' ? 'selected' : '' }}>Fixed Deposit</option>
    </select>

    <label for="initial_amount">Initial Deposit Amount</label>
    <input type="number" id="initial_amount" name="initial_amount" placeholder="Enter amount" value="{{ old('initial_amount') }}" required>

    <button type="submit">Add Customer</button>
  </form>
</div>

@endsection
