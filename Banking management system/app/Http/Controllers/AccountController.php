<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accounts = Account::all();
        return view('seller.accountmanagement.index', compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('seller.accountmanagement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:accounts,email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'account_type' => 'required|string|max:50',
            'initial_amount' => 'required|numeric|min:0',
        ]);

        Account::create($validated);

        return redirect()->route('accounts.index')->with('success', 'Account created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Account $account)
    {
        return view('seller.accountmanagement.show', compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Account $account)
    {
        return view('seller.accountmanagement.edit', compact('account'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Account $account)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:accounts,email,' . $account->id,
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'account_type' => 'required|string|max:50',
            'initial_amount' => 'required|numeric|min:0',
        ]);

        $account->update($validated);

        return redirect()->route('accounts.index')->with('success', 'Account updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Account $account)
    {
        $account->delete();
        return redirect()->route('accounts.index')->with('success', 'Account deleted successfully!');
    }
}
