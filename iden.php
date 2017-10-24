 <?php


class identitas{
    	public $Nama;
    	public $Tl;
    	public $Kelas;
    	public $Status;
  public function __construct($Nama , $Tl , $Kelas , $Status){
    $this->Nama = $Nama;
    $this->Tl = $Tl;
    $this->Kelas = $Kelas;
    $this->Status = $Status;

  }
    	
    	public function get_Nama(){
    		return $this->Nama;
    	}
    	public function get_Tl(){
    		return $this->Tl;
    	}
    	public function get_Kelas(){
    		return $this->Kelas;
    	}
    	public function get_Status(){
    		return $this->Status;
    	}

    }


?>