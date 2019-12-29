<?php
namespace App\Models;

class VideoModel extends BaseModel {
    protected $table = 'video';
    protected $primaryKey = 'video_id';
    protected $allowedFields = [
        'name', 'desc', 'category_id', 'link', 'tag', 'author', 'channel', 'channel_link', 'is_deleted','deleted_at'
    ];
    protected $returnType = 'App\Entities\Video';

    protected function runDatatable($select='*',$params, $where=array(), $like=array()) {
        return $this->select($select)
                    ->join('category', 'category.category_id=video.category_id', 'left');
	}
}