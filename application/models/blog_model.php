<?php
	class Blog_model extends CI_MODEL {
		function getPosts()
		{
			$query = $this->db->get('DATA');
			return $query->result_array();
		}

		public function create_post()
		{
			$data['title'] = $this->input->post('title');
			$data['content'] = $this->input->post('content');

			return $this->db->insert('DATA', $data);
		}
		function getPost($id)
		{
			$query = $this->db->get_where('DATA', array('ID' => $id));
			return $query->result_array();
		}
		function update_post($id)
		{
			$data['title'] = $this->input->post('title');
			$data['content'] = $this->input->post('content');
			$this->db->where('ID', $id);
			$this->db->update('DATA', $data);
		}
		function delete_post($id)
		{
			$this->db->delete('DATA', array('ID' => $id));
		}
	}