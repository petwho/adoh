<?php

class CarouselImagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /carouselimages
	 *
	 * @return Response
	 */
	public function index()
	{
		$carouselImages = CarouselImage::all();
		return View::make('admin.carousel', array('carouselImages' => $carouselImages));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /carouselimages/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /carouselimages
	 *
	 * @return Response
	 */
	public function store()
	{
		$urls = Input::get('carousel_image');
		for ($i = 0; $i < count($urls); $i++) {
			$carouselImage = CarouselImage::find($i + 1);
			$carouselImage->url = $urls[$i];
			$carouselImage->save();
		}
		return Redirect::back();
	}

	/**
	 * Display the specified resource.
	 * GET /carouselimages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /carouselimages/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

	}

	/**
	 * Update the specified resource in storage.
	 * PUT /carouselimages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /carouselimages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}