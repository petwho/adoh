<?php

class AboutusController extends \BaseController {
	/* Apply filter */
	public function __construct()
	{
		$this->beforeFilter('auth');
	}

	/**
	 * Display a listing of the resource.
	 * GET /aboutus
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('admin.aboutus', array('aboutus' => Aboutus::find(1)));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /aboutus/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /aboutus
	 *
	 * @return Response
	 */
	public function store()
	{
		$aboutus = Aboutus::find(1);
		$aboutus->title = Input::get('title');
		$aboutus->subtitle = Input::get('subtitle');
		$aboutus->content = Input::get('content');
		$aboutus->save();
		return Redirect::back();
	}

	/**
	 * Display the specified resource.
	 * GET /aboutus/{id}
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
	 * GET /aboutus/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /aboutus/{id}
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
	 * DELETE /aboutus/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}