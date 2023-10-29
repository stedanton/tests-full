<?php

/**
 * La classe FizzBizz permet de d'afficher Fizz, Bizz, FizzBizz, ou le nombre tester suivant s'il est divisible par 3 et 5.
 *
 * @author Stephane Mallaroni <stedanton@gmail.com>
 */
class FizzBizz
{
    private $end_number;

    /**
     * Constructeur initialise la variable $end_number
     * @param int $number
     */
    public function __construct($number){
        $this->end_number = $number;
    }


    /**
     * Display numbers between **1** and **N** by following the rules:
     *
     * - if number can be divided by 3: display **Fizz** ;
     * - if number can be divided by 5: display **Buzz** ;
     * - if number can be divided by 3 **AND** 5 : display **FizzBuzz** ;
     * - else: display the number.
     *
     * @return array un tableau contenant le résultat
     */
    public function display(){
        if(!is_int($this->end_number)){
            return false;
        }
        $array_resultat = array();
        for($i = 1; $i <= $this->end_number; $i++){
            if($i % 3 == 0 and $i % 5 == 0){
                $array_resultat[] = "**FizzBuzz**";
            }elseif ($i % 3 == 0){
                $array_resultat[] = "**Fizz**";
            }elseif ($i % 5 == 0){
                $array_resultat[] = "**Buzz**";
            }else{
                $array_resultat[] = $i;
            }
        }
        return $array_resultat;
    }
}