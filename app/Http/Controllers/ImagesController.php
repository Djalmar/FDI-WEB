<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditImageRequest;
use App\Http\Requests\ImageRequest;
use App\Picture;
use Faker\Provider\Uuid;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class ImagesController extends Controller
{
    /**
     * ImagesController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Picture::get();
        return view('images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $picture = null;
        return view('images.create', compact('picture'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ImageRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImageRequest $request)
    {
        $photo = new Picture($request->all());
        $destinationFolder = '/img/photo_gallery/';
        $destinationThumbnail = '/img/photo_gallery/thumbnail/';

        $file = Input::file('image');
        $imageName = Uuid::uuid();
        $extension = $request->file('image')->getClientOriginalExtension();
        $image = Image::make($file->getRealPath());

        $photo->image_path = $imageName . '.' . $extension;
        $image->save(public_path() . $destinationFolder . $imageName . '.' . $extension)
            ->resize(64, 64)
            ->save(public_path() . $destinationThumbnail . 'thumb-' . $imageName . '.' . $extension);
        $photo->save();
        Session::flash('flash_message', 'Se agrego la nueva imagen correctamente !');
        return redirect("/images");
    }

    /**
     * Display the specified resource.
     *
     * @param Picture $picture
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show(Picture $picture)
    {
        return view('images.image', compact('picture'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Picture $picture
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Picture $picture)
    {
        return view('images.edit', compact('picture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param EditImageRequest|ImageRequest|Request $request
     * @param Picture $picture
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(EditImageRequest $request, Picture $picture)
    {
        if ($request->exists('image')) {
            $destinationFolder = '/img/photo_gallery/';
            $destinationThumbnail = '/img/photo_gallery/thumbnail/';
            $imageName = Uuid::uuid();
            $extension = $request->file('image')->getClientOriginalExtension();
            $file = Input::file('image');
            $image = Image::make($file->getRealPath());
            $picture->image_path = $imageName . '.' . $extension;
            $image->save(public_path() . $destinationFolder . $imageName . '.' . $extension)
                ->resize(64, 64)
                ->save(public_path() . $destinationThumbnail . 'thumb-' . $imageName . '.' . $extension);
        }
        $picture->update($request->all());
        Session::flash('flash_message', 'Se cambio correctamente la imagen !');
        return redirect('/images');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Picture $picture
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(Picture $picture)
    {
        $picture->delete();
        Session::flash('flash_message', 'Se elimino correctamente la imagen !');
        return redirect('/images');
    }
}
