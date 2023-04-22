<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    public function joom (){
        $products = Product::limit(6)->orderBy(DB::raw('RAND()'))->get();
        $interesting =Product::limit(8)->orderBy(DB::raw('RAND()'))->get();
        $product_cat =  Product::limit(6)->orderBy(DB::raw('RAND()'))->get();
        $products_all =  Product::limit(18)->orderBy(DB::raw('RAND()'))->get();

        return view("profile.joom")
            ->with("products", $products)
            ->with("interesting",$interesting)
            ->with("product_cat",$product_cat)
            ->with("products_all",$products_all)
            ;

    }
    public function product_joom (){
        $products = Product::orderBy(DB::raw('RAND()'))->get();

        return view("profile.product_joom")->with("products",$products);
    }
}

