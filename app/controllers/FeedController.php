<?php

class FeedController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        $media = Media::where('status','approved')->orderBy('createdDate','desc')->get();

        for( $i = 0; $i < count($media); $i++ ){
                unset($media[$i]->thumbnail_url);
                unset($media[$i]->large_url);
                unset($media[$i]->medium_url);
                unset($media[$i]->full_url);
                unset($media[$i]->delete_type);
                unset($media[$i]->delete_url);
                unset($media[$i]->filename);
                unset($media[$i]->filesize);
                unset($media[$i]->temp_dir);
                unset($media[$i]->filetype);
                unset($media[$i]->is_image);
                unset($media[$i]->is_audio);
                unset($media[$i]->is_video);
                unset($media[$i]->fileurl);
                unset($media[$i]->file_id);
                unset($media[$i]->caption);

                // non file related
                unset($media[$i]->lyric);
                unset($media[$i]->files);
                unset($media[$i]->defaultmedias->delete_type);
                unset($media[$i]->defaultmedias->delete_url);
                unset($media[$i]->defaultmedias->temp_dir);

                unset($media[$i]->defaultpictures->delete_type);
                unset($media[$i]->defaultpictures->delete_url);
                unset($media[$i]->defaultpictures->temp_dir);

        }

        return $media;
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
