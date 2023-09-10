<?php
    class Product{
        public $strDescription;
        public $fltPrice;
        protected $intStock = 10;
        protected $srtStatus = "Active";

        public function __construct(string $description, float $price){
            $this->strDescription = $description;
            $this->fltPrice = $price;
            
        }

        public function getInfoProduct(){
            $arrProduct = array('product' => $this->strDescription,
                                'price'   => $this->fltPrice,
                                'stock'   => $this->intStock,
                                'status'  => $this->srtStatus
                            );
            return $arrProduct;
        }

    } //End class Product.

?>