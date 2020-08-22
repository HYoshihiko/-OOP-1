<?php

// 以下にCarクラスを定義して、当プログラムを実行した時にエラーがでないようにして下さい。

class Car
{
    private $Name;
    private $Number;
    private $Color;

    public function __construct($Name, $Number , $Color)
    {
        $this->Name = $Name;
        $this->Number = $Number;
        $this->Color = $Color;
    }




    public function getName()
    {
        return $this->Name;
    }

    public function getNumber()
    {
        return $this->Number;
    }

    public function getColor()
    {
        return $this->Color;
    }




    public function setName($Name)
    {
        $this->Name = $Name;
    }

    public function setNumber($Number)
    {
        $this->Number = $Number;
    }

    public function setColor($Color)
    {
        $this->Color = $Color;
    }



    public function infomation()
    {
        echo '車の車種:' . $this->Name . "、 " . '車体番号:' . $this->Number . "、 " . 'カラー:' . $this->Color . "です。";;
    }


}


class  Taxi extends Car
{
    private $passenger;

    public function Get_passenger()
    {
        return $this->passenger;
    }

    public function pickUp($Up_number)
    {
        $this->passenger += $Up_number;
    }

    public function infomation()
    {
        parent::infomation();
        echo '乗車人数は' . $this->passenger . '人です。';
    }

    public function lower($off_number)
    {
        $this->passenger -= $off_number;
        if ($this->passenger >= 0)
        {
            echo $off_number . '人降車しました。';
            $this->passenger -= $off_number;
        } else
        {
            echo '降車人数に誤りがあります';
        }
        
    }
}


// 以下を実行した時にエラーがでないようにして下さい。
// Carクラスのインスタンスを生成
// 引数 : 車名、車体番号、カラー
$car1 = new Car('ランクル', 100, 'black');

// 車の情報を表示
echo $car1->infomation();
echo '<br>';
echo '<hr>';

// Taxiクラスのインスタンスを生成
$taxi1 = new Taxi('クラウンのタクシー', 222, 'black');

// 3人乗車
$taxi1->pickUp(3);

// タクシーの情報表示を表示
echo $taxi1->infomation();
echo '<br>';

// 2人降車
$taxi1->lower(2);
echo '<br>';

// 2人降車
$taxi1->lower(2);