<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Resources\PostCollection;
use App\Image;
use App\Post;
use App\Unit;
use App\Utilities\PostSlug;
use Illuminate\Http\Request;
use App\Utilities\StoreImageTrait;

use function GuzzleHttp\json_decode;

class PostController extends Controller
{
    use StoreImageTrait, PostSlug;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::with('image', 'currency')->get();
        $default_image = '';
        return $posts;

        // return new PostCollection(Post::with('image')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $units = Unit::get();
        return view('posts.create', compact('units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // return $request->all();
        // Basic Info
        // title: '',
        // description: '',
        // price: '',
        // currency: '',
        // quantity: '',
        // unit: '',
        // img: '',
        // dealType: '',
        $post = new \App\Post;
        $post->title = $request->title;
        $post->slug = $this->createSlug($post->title, $post->id);
        $post->description = $request->description;
        $post->price = $request->price;
        $post->currency_id = $request->currencyId;
        $post->quantity = $request->quantity;
        $post->unit_id = $request->unit;
        $post->deal_type = $request->dealType;

        // // Electronic Devices
        // Electronic Devices
        // deviceBrand: '',
        // deviceModel: '',
        // devicePcType: '',
        // deviceHddSize: '',
        // deviceRamSize: '',
        // deviceProcessor: '',
        $post->device_brand =$request->deviceBrand;
        $post->device_model =$request->deviceModel;
        $post->device_pc_type =$request->devicePcType;
        $post->device_hdd_size =$request->deviceHddSize;
        $post->device_ram_size =$request->deviceRamSize ;
        $post->device_processor =$request->deviceProcessor;

        // // Building
        // buildingBuildYear: '',
        // buildingAreaAsSquare: '',
        // buildingFloor: '',
        // buildingRooms: '',
        // buildingDeposit: '',
        // buildingRentPerMonth: '',
        // buildingHasParking: '',
        // buildingHasElevator: '',
        $post->building_build_year = $request->buildingBuildYear;
        $post->building_area_as_square = $request->buildingAreaAsSquare;
        $post->building_floor = $request->buildingFloor;
        $post->building_rooms = $request->buildingRooms;
        $post->building_deposit = $request->buildingDeposit;
        $post->building_rent_per_month = $request->buildingRentPerMonth;
        $post->building_has_parking = $request->buildingHasParking ? 1 : 0;
        $post->building_has_elevator = $request->buildingHasElevator ? 1 : 0;

        // // Car
        // carBrand: '',
        // carModel: '',
        // carKilometersConsumed: '',
        $post->car_brand = $request->carBrand;
        $post->car_model = $request->carModel;
        $post->car_hand = $request->carHand;
        $post->car_kilometers_consumed = $request->carKilometersConsumed;

        // Genereal
        // availableColors: [],
        // Age: '',
        // usageStatus: '',
        // $post->available_colors = $request->availableColors;
        $post->usage_status = $request->usageStatus;

        $colors = [];
        if ($request->availableColors!="") {
            $colors = explode(',', $request->availableColors);
        }

        // Contact Information
        // contactEmail: '',
        // contactPhone: '',
        // contactCountry: '',
        // contactCity: '',
        // contactLocationType: 1,
        // contactAddress: '',
        // mapZoom: '',
        // mapLat: '',
        // mapLng: ''
        $post->contact_email = $request->contactEmail ;
        $post->contact_phone = $request->contactPhone ;
        $post->contact_phone_visibility = $request->contactPhoneVisibility == true ? 1 : 0 ;
        $post->contact_country = $request->contactCountry ;
        $post->contact_city = $request->contactCity ;
        $post->contact_location_type = $request->contactLocationType ;
        $post->contact_address = $request->contactAddress ;
        $post->contact_map_zoom = $request->contactMapZoom ;
        $post->contact_map_lat = $request->contactMapLat ;
        $post->contact_map_lng = $request->contactMapLng ;

        // Category
        $post->category_id = $request->categoryId;

        // Author
        $post->posted_by = auth('api')->user()->id;

        
        
        // Check Image and Thumbnails
        $files = $this->verifyAndStoreImage($request, 'post_photos');

        $post->save();
        if ($colors) {
            $post->colors()->sync($colors);
        }

        if (!$post->image) {
            $image = new Image;
            $image->path = $files['path'];
            $image->thumbnail_path = $files['thumbnail_path'];
            $post->image()->save($image);
        } else {
            $image = $post->image;
            Storage::delete($image->path);
            $image->path = $files['path'];
            $image->thumbnail_path = $files['thumbnail_path'];
            $image->save();
        }
        return $post;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $post = Post::with(['image', 'user', 'likes', 'colors', 'deviceBrand', 'pcType', 'carBrand', 'carHand'])->where('slug', '=', $slug)->first();

            
        // $post = Post::find($post);

        // foreach ($post->comments as $comment) {
        //     $user = $comment->user;
        //     $image = $comment->user->image->path;
        // }

        
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    public function postsByMe()
    {
        $posts = Post::with('image')->where('posted_by', auth()->user()->id)->get();
        return $posts;
    }

    public function postsByUser($user)
    {
        //
        $posts = Post::with('image')->where('posted_by', $user)->get();
        return $posts;

        // return new PostCollection(Post::with('image')->get());
    }

    public function comments(Post $post)
    {
        $comments = Comment::where([['commentable_type', 'App\Post'], ['commentable_id', $post->id]])->get();
        $comments->load('user.image');
        foreach ($comments as $comment) {
            // if ($commen)
            $comment->userProfileImage = asset(env('APP_URL').'/profile-default.jpg');

            if (isset($comment->user->image)) {
                $comment->userProfileImage = asset(env('APP_URL').'/'. $comment->user->image->path);
            } else {
                // $comment->user['image'] = ['path'=> ''];
                if ($comment->user->socialAccounts->count()) {
                    $comment->userProfileImage = $comment->user->socialAccounts->first()->avatar;
                }
            }
        }
        return $comments;
    }

    public function addComment(Request $request)
    {
        $post = \App\Post::find($request->post_id);
        $comment = new \App\Comment;
        $comment->text = $request->comment_text;
        $comment->user_id = $request->user()->id;
        $post->comments()->save($comment);
        return redirect()->back();
    }

    public function addLike(Post $post)
    {
        if (!$post->user_liked->count()>0) {
            $post->likes()->attach(auth()->user()->id);
        } else {
            $post->likes()->detach(auth()->user()->id);
        }
        return redirect()->back();
    }
}
