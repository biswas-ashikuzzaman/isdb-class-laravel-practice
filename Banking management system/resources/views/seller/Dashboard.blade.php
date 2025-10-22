@extends('seller.layouts.layout')
@section('seller_page_title')
    Dashboard
@endsection
@section('seller_layout')
   
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f6f9;
    }

    .header {
      background-color: #2c3e50;
      color: white;
      padding: 20px;
      text-align: center;
    }

    .sidebar {
      width: 220px;
      background-color: #34495e;
      position: fixed;
      top: 70px;
      bottom: 0;
      left: 0;
      padding-top: 30px;
    }

    .sidebar a {
      display: block;
      color: white;
      padding: 15px 20px;
      text-decoration: none;
      font-weight: bold;
    }

    .sidebar a:hover {
      background-color: #2c3e50;
    }

    .main {
      margin-left: 240px;
      padding: 30px;
    }

    .card {
      background-color: white;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    .card h3 {
      margin-top: 0;
      color: #2c3e50;
    }
  </style>
</head>
<body>

  <div class="header">
    <h1>Banking Management Dashboard</h1>
  </div>

  <div class="sidebar">
    <a href="#">🏦 Customers</a>
    <a href="#">💳 Accounts</a>
    <a href="#">💰 Transactions</a>
    <a href="#">📊 Reports</a>
    <a href="#">⚙️ Settings</a>
    <a href="#">🔓 Logout</a>
  </div>

  <div class="main">
    <div class="card">
      <h3>Welcome, Admin</h3>
      <p>Use the sidebar to manage banking operations.</p>
    </div>

    <div class="card">
      <h3>Quick Stats</h3>
      <ul>
        <li>Total Customers: 1,250</li>
        <li>Active Accounts: 980</li>
        <li>Pending Transactions: 12</li>
      </ul>
    </div>
  </div>

</body>


@endsection