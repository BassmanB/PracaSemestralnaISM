<?php
class User_model extends CI_Model{
    
     public function __construct()
    {
        $db2 = $this->load->database('db2', TRUE);
    }

    
    public function login_user($username,$password){
        //Secure password
        
        /*
        $db2 = $this->load->database('db2', TRUE);
        
        $encPassword=md5($password);
        $db2->select('name','password','id');
        $db2->from('dbo.users');
        $db2->where('name',$username);
        $db2->where('password',$encPassword);

        $result = $db2->get()->result_array();
        */
        /*
        $password = md5('mediahit123');
        $data2 = array(
            'id' => 5,
            'name' => 'gliwice@media-hit.pl',
            'mail' => 'gliwice@media-hit.pl',
            'password' => $password
        );


        $db2->insert('dbo.users', $data2);

        $data3 = array(
            'id_user'=>5,
            'id_kontrahent'=>208
        );
        $db2->insert('dbo.user_kontrahent', $data3);
        //$db2->insert('dbo.user_kontrahent', $data4);
  
        */
        
        $this->db->select('Knt_Email, Knt_Zezwolenie, Knt_KntId');
        $this->db->from('CDNKontrahenci');
        $this->db->where('Knt_Email', $username);
        $this->db->where('Knt_Zezwolenie', $password);

        $result = $this->db->get()->result_array();
       
        if($result){
          return $result;
        }
        else {
            return false;
        }
    }

    public function get_kontrahent_id($userId){
        $db2 = $this->load->database('db2', TRUE);
        $db2->select('id_kontrahent');
        $db2->from('dbo.user_kontrahent');
        $db2->where('id_user',$userId);
        $result = $db2->get()->result_array();

        return $result;
    }

    public function optima_address($username){
       
        $result = "";

        return $result;
    }

    public function get_user_id($username){

        $db2 = $this->load->database('db2', TRUE);
        $db2->select('id');
        $db2->from('dbo.users');
        $db2->where('name',$username);
        $result = $db2->get()->result_array();


        return $result;
    }

    public function test(){

        $db2 = $this->load->database('db2', TRUE);
        $db2->select('name');
        $db2->from('dbo.users');
        $db2->where('name',$username);
        $result = $db2->get()->result_array();

        return $result;
    }

    public function order_info($userName){

         $db2 = $this->load->database('db2', TRUE);
         $db2->select('id,order_id,date,kontrahent, product_name, adminConfirmed,order_amount,action');
         $db2->where('kontrahent',$userName);
         $db2->from('dbo.orders');
         $db2->distinct();
         $result = $db2->get()->result_array();

        return $result;
    }

    public function id_user_from_order($orderId){
         
        $db2 = $this->load->database('db2', TRUE);
        $db2->select('id_user');
        $db2->where('id',$orderId);
        $db2->from('dbo.orders');
        $result = $db2->get()->result_array();

        return $result;
    }
    public function single_order_info($id){

        
         $db2 = $this->load->database('db2', TRUE);
         $db2->select('order_amount, price, kontrahent, product_name');
         $db2->from('dbo.orders');
         $db2->where('dbo.orders.order_id',$id);
         $result = $db2->get()->result_array();

         return $result;
    }

    public function all_orders_info(){

         $db2 = $this->load->database('db2', TRUE);
         $db2->select('id, date, product_name, order_amount, kontrahent, adminConfirmed');
         $db2->from('dboorders');
         $db2->where('confirmed', 1);
         
         $db2->order_by('date', 'desc');
         $result = $db2->get()->result_array();

         return $result;

    }

    public function updateOrder(){
        $db2 = $this->load->database('db2', TRUE);
        $db2->set('id_address', $addressId);
        $db2->where('id', $lastOrderId);
        $db2->update('dbo.orders');
    }

    public function changeOrderByAdmin($idA, $idO, $city, $street, $postalCode, $nip, $price){
        $db2 = $this->load->database('db2', TRUE);
        $db2->set('miasto', $city);
        $db2->set('ulica', $street);
        $db2->set('kod_pocztowy', $postalCode);
        $db2->set('nip', $nip);
        $db2->where('id', $idA);
        $db2->update('dbo.address');


        $db2->set('price', $price);
        $db2->where('id', $idO);
        $db2->update('dbo.orders');

    }

    public function orderAccept($id){
        $db2 = $this->load->database('db2', TRUE);
        $db2->set('adminConfirmed', 1);
        $db2->where('id', $id);
        $db2->update('dbo.orders');
    }

    public function get_kontrahent_name($id){
         
         $db2 = $this->load->database('db2', TRUE);
         $db2->select('kontrahent');
         $db2->from('dbo.orders');
         $db2->where('id',$id);
         $result = $db2->get()->result_array();

    }

    public function koszykOrders($username){

        $db2 = $this->load->database('db2', TRUE);
         $db2->select('date, product_name, order_amount, price,id, action');
         $db2->where('kontrahent',$username);
         $db2->where('confirmed !=',1);
         $db2->from('dboorders');
         $result = $db2->get()->result_array();

        return $result;
    }

    //updates order amount after click on + or - button 
    public function updateKoszyk($amount, $id){



        $db2 = $this->load->database('db2', TRUE);
        $db2->set('order_amount', $amount);
        $db2->where('id', $id);
        $db2->update('dboorders');


    }

    public function updateKoszykStatus($username, $orderId){


        $db2 = $this->load->database('db2', TRUE);
        
        $db2->set('order_id', $orderId);
        $db2->set('confirmed', 1);
        
        $db2->where('kontrahent', $username);
        $db2->where('confirmed != ', 1);
        $db2->where('action',1);
        $db2->update('dboorders');
    }

    public function orderedProducts($username, $orderId2){
        
        $db2 = $this->load->database('db2', TRUE);

        $db2->select('date, product_name, order_amount, price,id, action');
        $db2->from('dboorders');
        
        $db2->where('kontrahent', $username);
        $db2->where('confirmed != ', 1);
        $db2->where('action',1);

        $result = $db2->get()->result_array();
        return $result;
    }

    
    public function removeKoszyk($id){
        $db2 = $this->load->database('db2', TRUE);
        $db2->where('id', $id);
        $db2->delete('dbo.orders');
    }

    public function lastId(){
        $db2 = $this->load->database('db2', TRUE);
        $query = $db2->query("SELECT MAX(id) FROM dboorders where confirmed=0");
        $result = $query->result_array();
        
        return $result;
    }
}