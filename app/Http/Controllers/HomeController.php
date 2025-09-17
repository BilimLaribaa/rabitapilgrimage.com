<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Blog;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

public function Home(Request $req)
{
    
    $blogs = DB::table('blogs')->get(); 
    $lc = json_decode(file_get_contents(base_path('public/localization.json')), true)[0];
    return view('home', ['blogs' => $blogs, 'lc' => $lc, 'lang'=> $req->input('lang')=='ur']);
}


    public function about(Request $req)
    {
        $lc = json_decode(file_get_contents(base_path('public/localization.json')), true)[0];
        return view('about',['lc' => $lc, 'lang'=> $req->input('lang')=='ur']);
    }
    public function services()
    {
        return view('services');
    }
    public function contact()
    {
        return view('contact');
    }


    public function ContactCreates(Request $req)
    {
        // Check if the 'contacts' table exists
        if (!Schema::hasTable('contacts')) {
            // Create the 'contacts' table if it doesn't exist
            Schema::create('contacts', function (Blueprint $table) {
                $table->increments('id');  // Auto-incrementing ID
                $table->string('name');    // Name column
                $table->string('email');   // Email column
                $table->string('phone');   // Phone column
                $table->text('message');   // Message column
                $table->timestamps();      // Created at & Updated at columns
            });
        }

        // Define the fields you expect
        $fields = ['email', 'message', 'name', 'phone'];

        // Filter and validate the input data
        $data = array_filter($req->input(), function ($key) use ($fields) {
            return in_array($key, $fields);
        }, ARRAY_FILTER_USE_KEY);

        $validator = Validator::make($data, [
            'email' => 'required|email',
            'message' => 'required|string',
            'phone' => 'string',
            'name' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "message" => $validator->errors()->first()
            ]);
        }

        // Insert the data into the 'contacts' table
        DB::table('contacts')->insert($data);

        return response()->json([
            "success" => true,
            "message" => "Message has been Sent Successfully"
        ]);
    }


}
