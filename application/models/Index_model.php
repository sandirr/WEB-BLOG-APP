<?php 

class Index_model extends CI_Model
{
	public function tambahPesan($da)
	{
		$this->db->insert('contact',$da);
		return $this->db->insert_id();
	}

	public function getBlogs($filter, $limit, $offset){
		
		$this->db->where('kategori', $filter);
		$this->db->limit($limit, $offset);
		$this->db->order_by('id', 'desc');
		return $this->db->get("blog");
	}

	public function getBlogss($filter, $limit, $offset){
		
		$this->db->where('kategori', $filter);
		$this->db->limit($limit, $offset);
		$this->db->order_by('id', 'asc');
		return $this->db->get("blog");
	}
		public function getTotalArtikel($filter){
		$this->db->where('kategori', $filter);
		return $this->db->count_all_results("blog");
	}

	public function getOne($field, $value){
		$this->db->where($field, $value);
		return $this->db->get('blog');
	}

}