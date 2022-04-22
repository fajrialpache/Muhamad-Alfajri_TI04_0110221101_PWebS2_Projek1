<?php

class Bmi
{
    public $tinggi;
    public $berat;

    public function __construct($tinggi, $berat)
    {
        $this->tinggi = $tinggi;
        $this->berat = $berat;
    }
    public function nilaiBMI()
    {
        $tinggi = $this->tinggi / 100;
        return number_format($this->berat / ($tinggi * $tinggi), 2);
    }
    public function statusBMI()
    {
        $nilaiBMI = $this->nilaiBMI();
        if ($nilaiBMI < 18.5) {
            return "Kekurangan Berat Badan";
        } elseif ($nilaiBMI >= 18.5 && $nilaiBMI < 25.0) {
            return "Normal (Ideal)";
        } elseif ($nilaiBMI >= 25.0 && $nilaiBMI < 30.0) {
            return "Kelebihan Berat Badan";
        } else {
            return "Kegemukan (Obesitas)";
        }
    }
}
