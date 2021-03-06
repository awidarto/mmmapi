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

                $media[$i]->mongoid = $media[$i]->_id;
                $mongoid = new MongoId($media[$i]->_id);

                $media[$i]->id = $mongoid->getInc();

                $media[$i]->token = $media[$i]->_token;

                unset($media[$i]->_id);
                unset($media[$i]->_token);

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

                $dm = $media[$i]->defaultmedias;

                unset($dm['delete_type']);
                unset($dm['delete_url']);
                unset($dm['temp_dir']);

                $media[$i]->defaultmedias = $dm;

                foreach($dm as $k=>$v){
                    $name = 'media'.str_replace(' ', '', ucwords( str_replace('_', ' ', $k) ));
                    $media[$i]->{$name} = $v;
                }
                unset($media[$i]->defaultmedias);

                $dp = $media[$i]->defaultpictures;

                unset($dp['delete_type']);
                unset($dp['delete_url']);
                unset($dp['temp_dir']);

                foreach($dp as $k=>$v){
                    $name = 'picture'.str_replace(' ', '', ucwords( str_replace('_', ' ', $k) ));
                    $media[$i]->{$name} = $v;
                }
                unset($media[$i]->defaultpictures);

                $media[$i]->createdDate = date('Y-m-d H:i:s',$media[$i]->createdDate->sec);
                $media[$i]->lastUpdate = date('Y-m-d H:i:s',$media[$i]->lastUpdate->sec);

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
