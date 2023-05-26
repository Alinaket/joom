<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Category;
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

    public function joom()
    {
        $products = Product::limit(6)->orderBy(DB::raw('RAND()'))->get();
        $interesting = Product::limit(8)->orderBy(DB::raw('RAND()'))->get();
        $product_cat = Product::limit(6)->orderBy(DB::raw('RAND()'))->get();
        $products_all = Product::limit(18)->orderBy(DB::raw('RAND()'))->get();

        return view("profile.joom")
            ->with("products", $products)
            ->with("interesting", $interesting)
            ->with("product_cat", $product_cat)
            ->with("products_all", $products_all);

    }

    public function product_joom()
    {
        $products = Product::orderBy(DB::raw('RAND()'))->get();

        return view("profile.product_joom")->with("products", $products);
    }

    public function category()
    {
        $category = Category::orderBy("id")->get();
        $data = [];
        foreach ($category as $item) {
            $away = $this->find_parent($data, $item->parent_id, $item->id); // ключі вкладенності масиву
            if ($item->parent_id === 0) {     // находиме пирші нольові категорії
                $data[] = [
                    "id" => $item->id,
                    "name" => $item->name,
                    "img"=>$item->img,
                    "data" => [],
                ];
            } else if (is_array($away)) {  // обчинюєме ошибку, превірка на масив
                if (count($away) == 1) {     //добавляємо підкатегорію
                    $data[$away[0]]["data"][] = [
                        "id" => $item->id,
                        "name" => $item->name,
                        "img"=>$item->img,
                        "data" => [],
                    ];
                }
                if (count($away) == 2) {
                    $data[$away[0]]["data"][$away[1]]["data"][] = [
                        "id" => $item->id,
                        "name" => $item->name,
                        "img"=>$item->img,
                        "data" => [],
                    ];
                }
                if (count($away) == 3) {
                    $data[$away[0]]["data"][$away[1]]["data"][$away[2]]["data"][] = [
                        "id" => $item->id,
                        "name" => $item->name,
                        "img"=>$item->img,
                        "data" => [],
                    ];
                }
                if (count($away) == 4) {
                    $data[$away[0]]["data"][$away[1]]["data"][$away[2]]["data"][$away[3]]["data"][] = [
                        "id" => $item->id,
                        "name" => $item->name,
                        "img"=>$item->img,
                        "data" => [],
                    ];
                }
            }
        }
//        dd($data);
        return view("components.category")->with("category", $data);
    }

    private function find_parent($data, $find_id, $my_id)
    {
        foreach ($data as $key => $item) {   // переникуєме вложеность масива категорій
            if (isset($item["id"])) {    // обробка помилок, існування id
                if ($item["id"] === $find_id) {    // нашли позицію парент айді в массиві
                    return [$key];   // завершення програми
                }
                $away = $this->find_parent($item["data"], $find_id, $my_id); // якщо не знайшло парент айді в данному рівні вложенністі то
                                                                             // шукаємо у наступоному рівні влоденності
                if ($away !== null) {           // обробка помилки, на існування результату евей
                    return [$key, ...$away];  // передаємо ключі вкладеності
                }
            }
        };
    }

    public function category_sub(Request $request){
//        dd($request->input("cosplay"));
        $parent_id=$request->input("parent_id");
//        dd($parent_id);
        $category= Category::where("parent_id", $parent_id)->get();
        return view("profile.category_sub")
        ->with("category", $category);

    }
}

