<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html

	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->database('default', TRUE);
        $this->load->library('session');
        $this->load->helper('url');
     
        $this->load->model('products_model');
        $this->load->model('user_model');

    }

	public function index()
	{
		
		$data['userdata'] = $this->session->userdata;
		
		$this->load->view('start');
		//$this->load->view('templates\footer');
	}
	
	public function index2()
	{
		
		$data['product'] = $this->products_model->get_product();
		$data['categories'] = $this->products_model->get_categories();
		//$data['lampyElektronowe'] = $this->products_model->lampyElektronowe();
		//$data['audioGd'] = $this->products_model->audioGdCategories();
		//$data['lineMagnetic'] = $this->products_model->lineMagneticCategories();
		//echo $this->session->sessionData['if_user_logged'];
		
		$data['userdata'] = $this->session->userdata;
		
		$this->load->view('header', $data);
		$this->load->view('sidebar');
		$this->load->view('welcome_message');
		$this->load->view('footer');
	}

	/*
	public function unique_multidim_array($array, $key) {    
    	$temp_array = array(); 
    	$i = 0; 
    	$key_array = array(); 
    
    	foreach($array as $val) { 
        	if (!in_array($val[$key], $key_array)) { 
            	$key_array[$i] = $val[$key]; 
            	$temp_array[$i] = $val; 
        } 
        $i++; 
    } 
   		return $temp_array; 
	} 
		 */
	public function login(){

        
        $username = $this->input->post('username');
        $password = $this->input->post('password');       
           //Get user id from model
         
        $data2 = $this->user_model->login_user($username,$password);
        if($data2){
        	foreach ($data2 as $key){
        		 //echo $key['Knt_Email'];
        		 $sessionData = array(
        			'username' => $username,
        			'password' => $password,
        			'if_user_logged' => 1
        );
        $this->session->set_userdata($sessionData);
        	}
        	$data['product'] = $this->products_model->get_product();
		$data['categories'] = $this->products_model->get_categories();
		
		$data['userdata'] = $this->session->userdata;	
		$this->load->view('header', $data);
		$this->load->view('sidebar');
		$this->load->view('welcome_message');
		$this->load->view('footer');
        }else{
        	echo "Błedny login lub hasło";
        }
        
        
        
    }
   
    public function logout(){
    	$sessionData = array(
        			'username' => '',
        			'password' => '',
        			'if_user_logged' => 0
        );
        $this->session->set_userdata($sessionData);

    	$this->load->view('start');
    	
    }
    public function orderConfirmation(){
    	

		$username = $this->session->userdata['username'];
		//$data['kontrahent'] = $this->user_model->optima_address($username);
		$data['userdata'] = $this->session->userdata;
		$data['categories'] = $this->products_model->get_categories();
		$orderId=$this->user_model->lastId();

		if(!(isset($orderId[0]['MAX(id)']))){
			$orderId=$this->user_model->lastId();
			$orderId2 = $orderId[0]['MAX(id)'];
		}else{
			$orderId2 = $orderId[0]['MAX(id)'];
		}

		$data['ordered'] = $this->user_model->orderedProducts($username, $orderId2);
		//$data['kontrahent'] = $this->user_model->optima_address($username);


		//$this->user_model->updateKoszykStatus($username, $orderId2);
		$this->load->helper('url');
		$this->load->view('header', $data);
		$this->load->view('sidebar');
		$this->load->view('confirmation_order');
		$this->load->view('footer');
	}

	public function order(){
    	

		$username = $this->session->userdata['username'];
		
		$data['userdata'] = $this->session->userdata;
		$data['categories'] = $this->products_model->get_categories();
		$orderId=$this->user_model->lastId();

		if(!(isset($orderId[0]['MAX(id)']))){
			$orderId=$this->user_model->lastId();
			$orderId2 = $orderId[0]['MAX(id)'];
		}else{
			$orderId2 = $orderId[0]['MAX(id)'];
		}

		$data['ordered'] = $this->user_model->orderedProducts($username, $orderId2);

		$this->user_model->updateKoszykStatus($username, $orderId2);
		$this->load->helper('url');
		$this->load->view('header', $data);
		$this->load->view('sidebar');
		$this->load->view('after_order');
		$this->load->view('footer');
	}
	public function koszyk(){
		
		$data['userdata'] = $this->session->userdata;
		$productName = $this->input->post('kod');
		$username = $this->session->userdata['username'];
		$price = $this->input->post('price');
		$amount =  $this->input->post('amount');
		$name = $this->input->post('name');   //if somebody wants to buy a product is equal to 1

		echo "cena " . $price . " amount: ". $amount;
		$price = $price;
		$this->products_model->make_order($name, $amount,$productName, $username, $price);

		echo $amount . " " . $productName;

	}
	public function showKoszyk(){

		$data['userdata'] = $this->session->userdata;
		$data['categories'] = $this->products_model->get_categories();
		$username = $this->session->userdata('username');
		$data['koszykProducts'] = $this->user_model->koszykOrders($username);

		$this->load->helper('url');
		$this->load->view('header', $data);
		$this->load->view('sidebar');
		$this->load->view('koszyk');
		$this->load->view('footer');

	}

	public function showReservations(){

		$data['userdata'] = $this->session->userdata;
		$data['categories'] = $this->products_model->get_categories();
		
		$username = $this->session->userdata('username');
		$data['koszykProducts'] = $this->user_model->koszykOrders($username);

		$this->load->helper('url');
		$this->load->view('header', $data);
		$this->load->view('sidebar');
		$this->load->view('reservations');
		$this->load->view('footer');

	}
	public function showRent(){

		$data['userdata'] = $this->session->userdata;
		$data['categories'] = $this->products_model->get_categories();
		
		$username = $this->session->userdata('username');
		$data['koszykProducts'] = $this->user_model->koszykOrders($username);

		$this->load->helper('url');
		$this->load->view('header', $data);
		$this->load->view('sidebar');
		$this->load->view('rent');
		$this->load->view('footer');

	}

	public function test1(){

    	$data['userdata'] = $this->session->userdata;
		$data['categories'] = $this->products_model->get_categories();
	
		$this->load->helper('url');
		$this->load->view('templates\header', $data);
		$this->load->view('templates\sidebar');
		$this->load->view('test1');
		$this->load->view('templates\footer');
	}
	public function test2(){

    	$data['userdata'] = $this->session->userdata;
		$data['categories'] = $this->products_model->get_categories();
	
		$this->load->helper('url');
		$this->load->view('templates\header', $data);
		$this->load->view('templates\sidebar');
		$this->load->view('test2');
		$this->load->view('templates\footer');
	}

    public function account(){

    
    	//echo "test ". $this->data3;
    	$userName = $this->input->post('userName'); 
    	$id = $this->user_model->get_user_id($userName);
    	//$data['user'] = $this->user_model->user_info($id);
    	//echo "test ID ". $id[0];
    	//$data['categories'] = $this->products_model->get_categories();
    	//$this->load->view('templates\header');
    	//$this->load->view('templates\sidebar', $data);
    	//$this->load->view('users\userAccount', $data); 

    	$orders = $this->user_model->order_info($id[0]['id']);

    	//$products = Array();
    	echo "<div class='product'>";
    	
    	foreach($orders as $key){
    	 	$product = $this->products_model->categorisedProducts($key['id_product']);
    	 	echo "<div class='product-img'><img src='./assets/images/audioGD.jpg'></div><div class='products-description'>" . $product[0]['Twr_Kod'] . $product[0]['Twr_Opis'] .$product[0]['Twr_Nazwa'] ."</div>". " <div class='product-ammount'>ilość: " . $key['order_ammount'] . " </div>". "<div class='product-value'> data zamówienia: ". "</div>".$key['date'] . "<div></div>"; 

        }
        echo "</div>";
 
    }
	
	public function search(){
		$this->load->helper('url');
		$code=$this->input->post('search');
		$data= $this->products_model->search($code);
		
		echo json_encode($data);

		//$this->user_model->login();
		//$data['twrCategories'] = $this->products_model->get_twrCategories();
	}

	public function filter(){

		$minP = $this->input->post('minP');
		$maxP = $this->input->post('maxP');
		$TwG_Kod = $this->input->post('TwG_Kod');

		$GroNr = $this->products_model->producentsCategorised($TwG_Kod);

		$GroNr = array_column($GroNr, 'TwG_GIDNumer');

		$Twr_TwrId = $this->products_model->productsIds($GroNr);
		//print_r($Twr_TwrId);

		$Twr_TwrId=array_column($Twr_TwrId, 'TwG_GIDNumer');

		$test = $this->products_model->priceFilter($minP, $maxP, $Twr_TwrId);	
		echo json_encode($test);
		return 0;
	}

	public function categories(){

		$TwG_Kod = $this->input->post('kod');
		 
		$data['categories'] = $this->products_model->get_categories();
		$data['products'] = $this->products_model->categorisedProducts($TwG_Kod);
		$data['userdata'] = $this->session->userdata;
		$data['sciezka'] = $TwG_Kod;
		
		$this->load->view('header', $data);
		$this->load->view('sidebar');
		$this->load->view('categorised_products1');
		$this->load->view('footer');
	}

	 public function seeOrderAdmin(){
        $id = $this->input->post('orderNr');
        //$//userId=$this->user_model->id_user_from_order($id);
        //$userId=$userId[0]['id_user'];
        //$kontrahentId = $this->user_model->get_kontrahent_id($userId);

        //$kontrahentName = $this->user_model->get_kontrahent_name($id);
        //echo $id. " testowanie " .$kontrahentName[0]['kontrahent'];
        $order = $this->user_model->single_order_info($id);
        $kontrahent = $this->user_model->optima_address($order[0]['kontrahent']);
        
        $kontrahent = array_merge($kontrahent, $order);

        echo json_encode($kontrahent);
    } 
    public function seeOrderUser(){
        $id = $this->input->post('orderNr');

        
        $order = $this->user_model->single_order_info($id);
        
        echo json_encode($order);
    } 
	public function categories2(){

		$data['categories'] = $this->products_model->get_categories();
		$data['lampyElektronowe'] = $this->products_model->lampyElektronowe();
		$data['audioGd'] = $this->products_model->audioGdCategories();
		$data['lineMagnetic'] = $this->products_model->lineMagneticCategories();
		$TwG_TwGID = $this->input->post('gidNumer');
		//echo "test ". $TwG_TwGID;
		$TwG_TwGID = $this->products_model->productsCategories($TwG_TwGID);
		$TwG_TwGID = array_column($TwG_TwGID, 'TwG_GIDNumer');
		$data['products'] = $this->products_model->categorisedProducts($TwG_TwGID);

		
		$data['userdata'] = $this->session->userdata;
		
		$this->load->view('templates\header', $data);
		$this->load->view('templates\sidebar');
		$this->load->view('categorised_products');
		$this->load->view('templates\footer');
		
	}

	public function database2(){
		$test = $this->user_model->test();

		echo $test;
	}

	public function address(){

		
		$data['userdata'] = $this->session->userdata;
		$data['categories'] = $this->products_model->get_categories();


		$username = $this->session->userdata('username');

		$orderId=$this->user_model->lastId();

		if(!(isset($orderId[0]['id']))){
			$orderId=$this->user_model->lastId();
			$orderId2 = $orderId[0]['id'];
		}else{
			$orderId2 = $orderId[0]['id'];
		}

		$data['ordered'] = $this->user_model->orderedProducts($username, $orderId2);
		$data['kontrahent'] = $this->user_model->optima_address($username);

		//$this->user_model->updateKoszykStatus($username, $orderId2);
		$this->load->view('templates\header', $data);
		$this->load->view('templates\sidebar');
		$this->load->view('confirmation_order');
		$this->load->view('templates\footer');

	}

	public function addressFaktura(){
		echo "test AdresuFaktury";
	}

	public function ordersAdministration(){

		$data['categories'] = $this->products_model->get_categories();
		$data['orders'] = $this->user_model->all_orders_info();
		$data['userdata'] = $this->session->userdata;

		$this->load->helper('url');
		$this->load->view('header', $data);
		$this->load->view('sidebar');
		$this->load->view('all_orders');
		$this->load->view('footer');
	}

	public function ordersHistory(){

		$username = $this->session->userdata('username');
		$data['categories'] = $this->products_model->get_categories();
		$data['orders'] = $this->user_model->order_info($username);
		$data['userdata'] = $this->session->userdata;
		$data['lampyElektronowe'] = $this->products_model->lampyElektronowe();
		$data['audioGd'] = $this->products_model->audioGdCategories();
		$data['lineMagnetic'] = $this->products_model->lineMagneticCategories();

		$this->load->helper('url');
		$this->load->view('templates\header', $data);
		$this->load->view('templates\sidebar');
		$this->load->view('history');
		$this->load->view('templates\footer');

	}

	public function OrderAdmin(){
		$id = $this->input->post('orderNr');
		//$//userId=$this->user_model->id_user_from_order($id);
		//$userId=$userId[0]['id_user'];
		//$kontrahentId = $this->user_model->get_kontrahent_id($userId);

		//$kontrahentName = $this->user_model->get_kontrahent_name($id);
		//echo $id. " testowanie " .$kontrahentName[0]['kontrahent'];
		$order = $this->user_model->single_order_info($id);
		$kontrahent = $this->user_model->optima_address($order[0]['kontrahent']);
		
		$kontrahent = array_merge($kontrahent, $order);

		echo json_encode($kontrahent);
	} 

	public function orderAccept(){

		$id = $this->input->post('id');
		$this->user_model->orderAccept($id);
	}

	public function edit(){

		$city = $this->input->post('cityE');
		$street = $this->input->post('streetE');
		$postalCode = $this->input->post('postalCodeE');
		$nip = $this->input->post('nipE');
		$idA = $this->input->post('idA');
		$idO = $this->input->post('idO');
		$price = $this->input->post('priceE');

		$this->user_model->changeOrderByAdmin($idA, $idO, $city, $street, $postalCode, $nip, $price);

		//$this->user_model->updateOrder($city, $street, $postalCode, $nip); 
	}

	public function updateKoszyk(){
		$newAmount = $this->input->post('amount');
		$id = $this->input->post('orderId');
		$this->user_model->updateKoszyk($newAmount, $id);
	}

	public function removeFromKoszyk(){

		$orderId = $this->input->post('orderId');

		$this->user_model->removeKoszyk($orderId);
 }

 	public function wypozycz(){
 		$test = $this->input->post('test');
 		echo $test;
 		$this->load->view('after_order');
 	}

 	public function start(){

 		$this->load->view('start');
 	}
}
