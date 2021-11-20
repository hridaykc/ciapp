<?php 
namespace App\Models;
use CodeIgniter\Model;

class ContactModel extends Model {

	protected $table 				= 'tbl_contacts';
	protected $primaryKey 			= 'id';
	protected $useAutoIncrement 	= true;
	protected $returntype 			= 'array';
	protected $useSoftDeletes 		= true;
	protected $allowedFields 		= ['usrname','passwd', 'fname', 'lname', 'address', 'phoneno', 'dpimage', 'whatsapp', 'lastlogin', 'status'];
	protected $skipValidation    	= false;
	private $db;

	public function insertdata($data = array()){
		$this->db->table($this->table)->insert($data);
		return $this->db->insertID();
	}

	public function update_data($id, $data = array()){
        $this->db->table($this->table)->update($data, array("id" => $id,));
        return $this->db->affectedRows();
    }

    public function delete_data($id){
        return $this->db->table($this->table)->delete(array(
            "id" => $id,
        ));
    }

    public function get_all_data(){
        $query = $this->db->query('select * from ' . $this->table);
        return $query->getResult();
    }

}

?>