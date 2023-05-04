<?php
//Creo una classe per la data di scadenza aggiungendo un metodo che la formatti correttamente
class ExpirationDate
{
    public $year;
    public $month;
    public $day;

    function __construct(int $year, int $month, int $day)
    {
        $this->year = $year;
        $this->month = $month;
        $this->day = $day;
    }

    public function getFullExpirationDate()
    {
        return "{$this->year}-{$this->month}-{$this->day}";
    }
}
