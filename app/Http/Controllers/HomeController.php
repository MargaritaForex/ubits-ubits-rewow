<?php namespace App\Http\Controllers;

use App\Pet;
use App\Product;
use App\User;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request)
    {
        $value = $request->user()->authorizeRoles(['user', 'admin']);
        $users = User::all();
        $pets = Pet::all();
        if ($value) {
            return view('product/create_products', ['pets' => $pets]);
        } else {
            $products =  DB::table('products')->where('status', true)->paginate(4);
            return view('customer/homeCustomer', ['products' => $products]);
        }
    }

}
