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
</head>
<body>

  <div class="container">
    <h2>All Users</h2>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Role</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Rahim Uddin</td>
          <td>rahim@example.com</td>
          <td>Admin</td>
          <td>
            <button class="action-btn">Edit</button>
            <button class="action-btn delete-btn">Delete</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Karim Hossain</td>
          <td>karim@example.com</td>
          <td>Manager</td>
          <td>
            <button class="action-btn">Edit</button>
            <button class="action-btn delete-btn">Delete</button>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Nasrin Akter</td>
          <td>nasrin@example.com</td>
          <td>Staff</td>
          <td>
            <button class="action-btn">Edit</button>
            <button class="action-btn delete-btn">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</body>




@endsection