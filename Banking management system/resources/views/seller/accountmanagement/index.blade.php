@extends('seller.layouts.layout')

@section('seller_page_title')
    Dashboard
@endsection

@section('seller_layout')

<style>
  body {
    font-family: 'Segoe UI', sans-serif;
    background-color: #f4f6f8;
    margin: 0;
    padding: 0;
  }

  .container {
    max-width: 900px;
    margin:10px auto;
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

  table {
    width: 100%;
    border-collapse: collapse;
  }

  th, td {
    padding: 12px 15px;
    border-bottom: 1px solid #ddd;
    text-align: left;
  }

  th {
    background-color: #2c3e50;
    color: white;
  }

  tr:hover {
    background-color: #f1f1f1;
  }

  .action-btn {
    padding: 6px 12px;
    background-color: #3498db;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
    text-decoration: none;
  }

  .action-btn:hover {
    background-color: #2980b9;
  }

  .delete-btn {
    background-color: #e74c3c;
  }

  .delete-btn:hover {
    background-color: #c0392b;
  }
</style>

<div class="container">
  <h2>All Accounts</h2>

  @if(session('success'))
    <div style="color:green; margin-bottom:15px;">
      {{ session('success') }}
    </div>
  @endif

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Customer Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Account Type</th>
        <th>Initial Amount</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse($accounts as $account)
        <tr>
          <td>{{ $account->id }}</td>
          <td>{{ $account->customer_name }}</td>
          <td>{{ $account->email }}</td>
          <td>{{ $account->phone }}</td>
          <td>{{ ucfirst($account->account_type) }}</td>
          <td>{{ $account->initial_amount }}</td>
          <td>
            <a href="{{ route('accounts.edit', $account->id) }}" class="action-btn">Edit</a>

            <form action="{{ route('accounts.destroy', $account->id) }}" method="POST" style="display:inline-block;">
              @csrf
              @method('DELETE')
              <button type="submit" class="action-btn delete-btn" onclick="return confirm('Are you sure you want to delete this account?')">Delete</button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="7" style="text-align:center;">No accounts found.</td>
        </tr>
      @endforelse
    </tbody>
  </table>
</div>

@endsection
