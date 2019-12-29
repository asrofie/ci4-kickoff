<?php
namespace App\Models;

use CodeIgniter\Model;

class BaseModel extends Model {
    /**
	 * If true, will set created_at, and updated_at
	 * values during insert and update routines.
	 *
	 * @var boolean
	 */
	protected $useTimestamps = true;
    	/**
	 * The column used for insert timestamps
	 *
	 * @var string
	 */
	protected $createdField = 'created_at';

	/**
	 * The column used for update timestamps
	 *
	 * @var string
	 */
	protected $updatedField = 'updated_at';

	protected function runDatatable($select='*',$params, $where=array(), $like=array()) {
		if(!empty($where)) {
			$this->where($where);
		}
		if(!empty($like)) {
			$this->group();
			foreach($like as $key => $val) {
				$this->orLike($key, $val, 'both');
			}
			$this->endGroup();
		}
		return $this->asArray()
					->select($select);
	}

	public function datatable($select='*', $params=array(), $where=array(), $like=array()) {
		$output = array();
		// $this->runDatatable($select, $params, null, null);
		$output['recordsTotal'] = $this->countAllResults(false);
		$this->limit(intval($params['length']), intval($params['start']));
		$output['draw'] = $params['draw'];
		// $this->runDatatable($select, $params, $where, $like);
		$output['recordsFiltered'] = $this->countAllResults(false);
		$output['data'] = $this->runDatatable($select, $params, $where, $like)->asArray()->findAll();
		return $output;
	}
}