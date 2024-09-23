<?php 



namespace Nico\Stats;

use Nico\Stats\Functions\Average;



class Stats {
    
    public function average($list): float 
    {
        return Average::calculate($list);
    }
}