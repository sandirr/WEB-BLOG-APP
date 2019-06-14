<?php 

class Blog_model extends CI_Model
{
	public function getBlogs($limit, $offset)
	{
		$filter = $this->input->get('cari');
		$this->db->like('title', $filter);
		$this->db->or_like('contents', $filter);
		$this->db->or_like('kategori', $filter);
		$this->db->limit($limit, $offset);
		$this->db->order_by('id', 'desc');
		return $this->db->get("blog");
	} 

	public function getBlogss($limit, $offset)
	{
		$filter = $this->input->get('cari');
		$this->db->like('title', $filter);
		$this->db->or_like('contents', $filter);
		$this->db->or_like('kategori', $filter);
		$this->db->limit($limit, $offset);
		$this->db->order_by('id', 'asc');
		return $this->db->get("blog");
	} 

	public function getTotalArtikel(){
		$filter = $this->input->get('cari');
		$this->db->like('title', $filter);
		$this->db->or_like('contents', $filter);
		$this->db->or_like('kategori', $filter);
		return $this->db->count_all_results("blog");
	}

	public function getOne($field, $value){
		$this->db->where($field, $value);
		return $this->db->get('blog');
	}

	public function add($data)
	{
		$this->db->insert('blog',$data);
		return $this->db->insert_id();
	}

	public function update($id, $update)
	{
		$this->db->where('id', $id);
		$this->db->update('blog', $update);
		return $this->db->affected_rows();
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('blog');
		return $this->db->affected_rows();
	}
}
