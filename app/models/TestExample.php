<?php
/**
 * 2014 , 02 24
 
    Copyright (c) 2014, Pascal Brewing
    All rights reserved.
    
    Redistribution and use in source and binary forms, with or without modification,
    are permitted provided that the following conditions are met:
    
    * Redistributions of source code must retain the above copyright notice, this
      list of conditions and the following disclaimer.
    
    * Redistributions in binary form must reproduce the above copyright notice, this
      list of conditions and the following disclaimer in the documentation and/or
      other materials provided with the distribution.
    
    * Neither the name of the {organization} nor the names of its
      contributors may be used to endorse or promote products derived from
      this software without specific prior written permission.
    
    THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
    ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
    WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
    DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR
    ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
    (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
    LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
    ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
    (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
    SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

class TestExample extends CModel{

    public static $number1 = 1;
    public static $number2 = 2;
    public static $string1 = 'String one';
    public static $string2 = 'String two';
    public static $array   = [
        0 => 'String one',
        1 => 'String two',
        2 => 'String three',
    ];
    public $number_1;
    public $number_2    = 1;
    public $string_1    = 'String one';
    public $string_2    = 'String two';
    public $array_1     = [
        1 => 'String two'
    ];


    /**
     * @return array
     */
    public function attributeNames(){
        return [
            'number_1',
            'number_2',
            'string_1',
            'string_2',
            'array_1'
        ];
    }

    /**
     * @return array
     */
    public function attributesLabel(){
        return [
            'number_1'   => 'Number 1',
            'number_2'   => 'Number 2',
            'string_1'   => 'String One',
            'string_2'   => 'String Two',
            'array_1'     => 'Array'
        ];
    }
} 