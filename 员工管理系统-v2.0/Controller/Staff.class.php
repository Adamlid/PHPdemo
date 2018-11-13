<?php
/**
 * Created by PhpStorm.
 * User: Carzy_Ning
 * Date: 2018/11/8
 * Time: 12:02
 *注释不存在的
 */

class Staff{
    private $Staff;
    public function __construct(){
        $this->Staff=new StaffM();
    }

    public function AdStaff(){
         $AdStaff=$this->Staff;
         return $AdStaff->AdStaff();
     }
     public function ASHandle(){
         $ASHandle=$this->Staff;
         return $ASHandle->ASHandle();
     }
     public function Home(){
         $home=$this->Staff;
         return $home->Home();
     }
     public function UpdateHandle(){
        $UpdateHandle= $this->Staff;
        return $UpdateHandle->UpdateHandle();
     }
     public function Delete(){
        $Delete=$this->Staff;
        return $Delete->Delete();
     }
     public function Update(){
         $Update=$this->Staff;
         return $Update->Update();
     }
}