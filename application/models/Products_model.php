<?php

class Products_model extends CI_Model {
   
    public function __construct()
    {
        $this->load->database();

    }
    public function get_twrCategories(){
    	$this->db->select('TwG_GIDNumer', 'TwG_GrONumer');
    	$this->db->from('CDN.TwrGrupy');
    	$data = $this->db->get()->result_array();
    	return $data;
    }

    public function get_categories(){
    	$this->db->select('nazwa');
    	$this->db->from('Kategorie');
    	$data =  $this->db->get()->result_array();
        return $data;
    }

    public function get_product()
    {
    	

        $this->db->select('Twr_TwrId, Twr_Kod, Twr_Nazwa, cena,TwZ_Ilosc, DAB_NazwaPliku');
        $this->db->from('CDNTowary');

        //$this->db->where('TwA_DeAId', 39);
        //$id = array('1'=>1, '2'=>26, '3'=>27);
       // $this->db->where_in('TwZ_MagId', $id);

        //$this->db->distinct();
        $data =  $this->db->get()->result_array();
        /*
        $password = md5('test3');
        $data2 = array(
    		'username' => 'test3',
    		'email' => 'test3@gmail.com',
    		'password' => $password
    	);

        $this->db->insert('dbo.users', $data2);
        */
        return $data;
    }

    public function make_order($name,$amount, $productName, $username, $price){

        $db2 = $this->load->database('db2', TRUE);
    	if($name == 'kupuj'){
            $bit = 1;
        }elseif($name == 'rezerwuj'){
            $bit = 0;
        }elseif($name=='wypozycz'){
            $bit = 2;
        }
        else{
            $bit = 666;
        }

    	$time= date('Y-m-d H:i:s');
    	$data = array(
    		'order_amount' => $amount,
    		'product_name' => $productName,
    		'date' => $time,
            'kontrahent' => $username,
            'price' =>$price,
            'confirmed' => 0,
            'action' => $bit
    	);
    	$db2->insert('dboorders', $data);
    }

    public function search($productCode){
    	$this->db->select('Twr_Kod, Twr_Nazwa, cena, DAB_NazwaPliku');
    	$this->db->from('CDNTowary');
        //$this->db->join('CDN.TwrGrupy','CDN.TwrGrupy.TwG_GIDNumer = CDN.TOWARY.Twr_TwrId');
    

    	$this->db->where('Twr_Kod', $productCode);
    	$data =  $this->db->get()->result_array();

    	return $data;
    }

    public function priceFilter($minP, $maxP, $Twr_TwrId){

        $this->db->select('Twr_TwrId, Twr_Kod, Twr_Nazwa, Twr_Opis, TwC_Wartosc,TwZ_Wartosc, TwZ_Ilosc');
        $this->db->from('CDN.TOWARY');
        $this->db->join('CDN.TwrCeny','CDN.TwrCeny.TwC_TwrID = CDN.TOWARY.Twr_TwrId' );
        $this->db->join('CDN.TwrZasoby','CDN.TwrZasoby.TwZ_TwrId = CDN.TOWARY.Twr_TwrId');
        $this->db->where('TwC_TwCNumer', 2);
        $this->db->where('TwC_Wartosc >', $minP);
        $this->db->where('TwC_Wartosc <', $maxP);
        $this->db->where_in('Twr_TwrId', $Twr_TwrId);
 
        $this->db->distinct();
        $data =  $this->db->get()->result_array();
    	return $data;

    }

    public function groNumber($TwG_Kod){

    	$this->db->select('TwG_GIDNumer');
    	$this->db->from('CDN.TwrGrupy');
    	$this->db->where('TwG_Kod', $TwG_Kod);
    	$data =  $this->db->get()->result_array();
    	return $data;

    }
   	//This function is taking GroNumber of categories and returns ID numbers of this products
    public function productsCategories($TwG_GIDNumer){
    	
    	$this->db->select('TwG_GIDNumer');
    	$this->db->from('CDN.TwrGrupy');
    	$this->db->where('TwG_GrONumer', $TwG_GIDNumer);
        //$this->db->where('TwG_GIDTyp', 16);
    	$data =  $this->db->get()->result_array();
    	return $data;
	}

    public function subCategories($TwG_GIDNumer){   //for products like Audio GD or electron lamps
        
        $this->db->select('TwG_GIDNumer, TwG_Nazwa');
        $this->db->from('CDN.TwrGrupy');
        $this->db->where_in('TwG_GrONumer', $TwG_GIDNumer);
        $this->db->where('TwG_GIDTyp',-16);

        $data =  $this->db->get()->result_array();

        /*
        $this->db->select('TwG_GIDNumer');
        $this->db->from('CDN.TwrGrupy');
        $this->db->where_in('TwG_GrONumer', $TwG_GIDNumer);
        
        $data =  $this->db->get()->result_array();
        //echo $this->db->last_query();
        */
        return $data;
    }

    public function subCategories2($TwG_GIDNumer){   //for products like Audio GD or electron lamps
        
        $this->db->select('TwG_GIDNumer, TwG_Nazwa');
        $this->db->from('CDN.TwrGrupy');
        $this->db->where_in('TwG_GrONumer', $TwG_GIDNumer);
        $this->db->where('TwG_GIDTyp',16);

        $data =  $this->db->get()->result_array();

        /*
        $this->db->select('TwG_GIDNumer');
        $this->db->from('CDN.TwrGrupy');
        $this->db->where_in('TwG_GrONumer', $TwG_GIDNumer);
        
        $data =  $this->db->get()->result_array();
        //echo $this->db->last_query();
        */
        return $data;
    }
    public function subCategoriesAudio(){   //for products like Audio GD or electron lamps
        
        $this->db->select('TwG_Nazwa, TwG_GIDNumer');
        $this->db->from('CDN.TwrGrupy');
        $this->db->where('TwG_GrONumer', 380);
        
        $data =  $this->db->get()->result_array();
        //echo $this->db->last_query();
    
        return $data;
    }



	public function categorisedProducts($TwG_Kod){

        //dodać ceny do optimy
		
		$this->db->select('Twr_Kod, Twr_Nazwa, TwZ_Ilosc, cena');
        $this->db->join('Kategorie', 'CDNTowary.category_id = Kategorie.id');
        $this->db->from('CDNTowary');
        
		$this->db->where('nazwa', $TwG_Kod);
		//$this->db->distinct();
		$data =  $this->db->get()->result_array();
        //echo $this->db->last_query();
        
    	return $data;

	}



    public function lampyElektronowe(){   //subcategories of electron lamps
        $this->db->select('TwG_Nazwa');
        $this->db->from('CDN.TwrGrupy');
        $this->db->where('TwG_GrONumer', 386);

        $data =  $this->db->get()->result_array();
        return $data;
    }


    public function audioGdCategories(){   //subcategories of electron lamps
        
        $this->db->select('TwG_Nazwa');
        $this->db->from('CDN.TwrGrupy');
        $this->db->where('TwG_GrONumer', 380);

        $data =  $this->db->get()->result_array();
        return $data;
    }
    public function lineMagneticCategories(){   //subcategories of electron lamps
        
        $this->db->select('TwG_Nazwa');
        $this->db->from('CDN.TwrGrupy');
        $this->db->where('TwG_GrONumer', 491);

        $data =  $this->db->get()->result_array();
        return $data;
    }



    public function orderAddress($street, $city, $postalCode, $subject){
        
        $db2 = $this->load->database('db2', TRUE);

        $data = array(
            'ulica' => $street,
            'miasto' => $city,
            'kod_pocztowy' => $postalCode   
        );
        $db2->insert('dbo.address', $data);

        $db2->limit(1);
        $db2->select('id');
        $db2->order_by('id', 'desc');
        $db2->from('dbo.address');

        $data =  $db2->get()->result_array();
        
        return $data;

    }

     public function lastOrderId(){

        $db2 = $this->load->database('db2', TRUE);

        $db2->limit(1);
        $db2->select('id');
        $db2->order_by('id', 'desc');
        $db2->from('dbo.orders');
        $data =  $db2->get()->result_array();
        return $data;
     }

     public function addAddressToOrder($addressId, $lastOrderId){

        $db2 = $this->load->database('db2', TRUE);
        $db2->set('id_address', $addressId);
        $db2->where('id', $lastOrderId);
        $db2->update('dbo.orders');

     }
     public function selectNameFromKod($TwG_Kod){
        $this->db->select('TwG_Nazwa');
        $this->db->from('');
     }   

     public function producentsCategorised($TwG_Kod){
        $this->db->select('TwG_GIDNumer');
        $this->db->where_in('TwG_Kod', $TwG_Kod);
        //$this->db->distinct();
        $this->db->from('CDN.TwrGrupy');
        $data =  $this->db->get()->result_array();
        return $data;
     }

     public function productsIds($TwG_GrONumer){
        $this->db->select('TwG_GIDNumer');
        $this->db->where_in('TwG_GrONumer', $TwG_GrONumer);
        //$this->db->distinct();
        $this->db->from('CDN.TwrGrupy');
        $data =  $this->db->get()->result_array();
        return $data;
     }

}
?>