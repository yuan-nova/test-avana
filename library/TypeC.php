<?php

namespace Library;

use Yuannova\Excel\Format\FormatAbstract;

class TypeC extends FormatAbstract {
    
    public static function fieldRow() {
        return 1;
    }    
    
    protected static function numOfField() {
        return 8;
    }    
    
    public static function listOfField() {
        return [
            'A' => 'Field_A*',
            'B' => '#Field_B',
            'C' => 'Field_C',
            'D' => 'Field_D*',
            'E' => 'Field_E*',
            'F' => 'Field_F',
            'G' => 'Field_G*',
            'H' => 'Field_H*'
        ];
    }
    
    public static function startRowData() {
        return 2;
    }
}