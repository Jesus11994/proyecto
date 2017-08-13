<?PHP if (! defined('BASEPATH')) exit('No direct script access allowed');

class user_modelo extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$q = $this->db->get('usuarios');
		if($q->num_rows()>0) 
		{
			return true;
		}else
		{
			return false;
		}

		
	}

}