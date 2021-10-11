<?php

class Calculator
{
    public $firstNum;
    public $secondNum;
    public $result = "";

    function __call($name_of_function, $arguements) 
    {
              
        // It will match the function name
        if($name_of_function == 'calc') 
        {
              
            switch (count($arguements)) 
            {
                      
                // If there is only one argument
                // area of circle
                case 1:
                case 2:
                    return "<br> you must enter two numbers and an operator.";
                case 3:
                    switch($arguements[0])
                    {
                        case '+':
                         $result= $arguements[1] + $arguements[2];
                         return "<br> The sum of {$arguements[1]} + {$arguements[2]} = " . $result; 
                         
                        case '-':
                        $result= $arguements[1] - $arguements[2];
                        return "<br> The difference of {$arguements[1]} + {$arguements[2]} = " . $result;
                        
                        case '/':
                            if($arguements[2] == 0)
                            {
                                return "Cannot divide by a zero in the denominator";
                            }
                            else
                            {
                            $result= $arguements[1] / $arguements[2];
                            return "<br> The division of {$arguements[1]} + {$arguements[2]} = " . $result;
                            }

                        case '*':
                         $result= $arguements[1] * $arguements[2];
                        return "<br> The product of {$arguements[1]} + {$arguements[2]} = " . $result;
                    }
            }
        }

    }

}  

?>


