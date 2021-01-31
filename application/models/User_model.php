<?php
	class User_model extends CI_Model{
		public function register($enc_password){
			$data = array(
				'name' => $this->input->post('name'),
				'last_name' => $this->input->post('last_name'),
				'contact' => $this->input->post('contact'),
				'password' => $this->input->post('password'),
			);
			return $this->db->insert('User', $data);
		}
		public function login($name, $last_name, $password){
			$this->db->where('name', $name);
			$this->db->where('last_name', $last_name);
			$this->db->where('pasword', $password);
			$result = $this->db->get('User');
			if($result->num_rows() == 1){
				return $result->row(0)->user_id;
			} else{
				return false;
			}

		}

		public function check_email_exists($contact){
			$query = $this->db->get_where('User', array('contact' => $contact));
			if(empty($query->row_array())){
				return true;
			} else{
				return false;
			}
		}
	}