 <?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class M_login extends CI_Model
	{
		public function login($post)
		{
			$query = $this->db->select('*')
				->from('user')
				->join('tb_role', 'user.id_role = tb_role.id_role')
				->where('username', $post['username'])
				->where('password', md5($post['pass']))
				->get();
			return $query;
		}

		public function get($id_user = null)
		{
			$this->db->from('user');
			if ($id_user != null) {
				$this->db->where('id_user', $id_user);
			}
			$query = $this->db->get();
			return $query;
		}
	}
