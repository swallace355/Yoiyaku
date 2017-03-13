/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
      // Form validation code will come here.
function validate()
     {
      
        if( document.contactform.name.value == "" )
        {
            alert( "Please provide your name!" );
            document.contactform.name.focus() ;
            return false;
        }
         
        if( document.contactform.email.value == "" )
        {
            alert( "Please provide your e-mai addressl!" );
            document.contactform.eMail.focus() ;
            return false;
        }
         
        if( document.contactform.message.value == "" )
        {
            alert( "Please leave a message!" );
            document.contactform.message.focus() ;
            return false;
        }
         
        return( true );
      }

function validateEmail()
      {
         var emailID = document.contactform.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter a correct email ID")
            document.contactform.email.focus() ;
            return false;
         }
         return( true );
      }
