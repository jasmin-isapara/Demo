// function fnovalidate()
// {
//     var fn=document.form1.fname.value;
//     var ln=document.form1.lname.value;
//     var pass1=document.form1.password.value;
//     var pass2=document.form1.conpassword.value;
//     var patt=/[^a-z]/i;
//     var fname=patt.test(fn);
//     var lname=patt.test(ln);

//     if(fn == "")
//     {
//         alert('Please Input Firstname');
//         return false;
//     }
//         if(fn == null || fname == true)
//         {
//             alert("Enter Only Alphabet For Firstname");
//             return false;
//         }
//         if(ln == "")
//         {
//             alert("Please Input Lastname");
//             return false;
//         }
//             if(ln == null || lname == true)
//             {
//                 alert("Enter Only Alphabet For Lastname");
//                 return false;
//             }
        
//         var m= document.getElementById('male');
//         var f= document.getElementById('female');

//         if( (m.checked == false) && (f.checked == false) )
//         {
//             alert("Please Choose Gender");
//             document.getElementById("gen").style.border="2px solid red";
//             return false;
//         }
//         else{
//             document.getElementById("gen").style.border="";
//         }

//         var add=document.form1.address.value;
//         var patt2=/[^a-z, ]/i;
//         var address = patt2.test(add);

//         if(add == "")
//         {
//             alert("Please Enter Your Address");
//             return false;
//         }
//         if(add == null || address == true)
//         {
//             alert("Enter Only Alphabet for Address");
//             return false;
//         }

//         var c= document.getElementById("country");
//         if(c.value == null || c.value =="")
//         {
//             alert("Please Select A Country");
//             return false;
//         }
//         var p=document.form1.phone.value;
//         if(isNaN(p))
//         {
//             alert("Enter Only Numbers");
//             return false;
//         }
//         if(p=="")
//         {
//             alert("Enter 10 Digits");
//             return false;
//         }
//         if(p.length>10)
//         {
//             alert("Enter 10 Digits");
//             return false;
//         }
//         if(p.length<10)
//         {
//             alert("Enter 10 Digits");
//             return false;
//         }

//         var em = document.form1.email.value;
//         var atpos=em.indexof("@");
//         var dotpos=em.lastIndexof(".");
//         if(atpos < 1 || dotpos < atpos+2 || dotpos +2>=em.length)
//         {
//             alert("Invalid Email Id");
//             return false;
//         }
//         if(pass1 == "")
//         {
//             alert("Please Input Password");
//             return false;
//         }
//         if(pass1.length < 6)
//         {
//             alert("Password Strength Not Less Than ^ Characters");
//             return false;
//         }
//         if(paas2=="")
//         {
//             alert("Please Input Confrim Password");
//             return false;
//         }
//         if(paas1 != pass2)
//         {
//             alert("Confirm Password Not Match");
//             return false;
//         }
//         alert("Successfully Registered.");
//         document.form1.submit();
// }









// // let submit=document.getElementById("submit");

// // submit.addEventListener('click',()=>{

// //     var fn=document.form1.fname.value;
// //     var ln=document.form1.lname.value;
// //     var pass1=document.form1.password.value;
// //     var pass2=document.form1.conpassword.value;
// //     var patt=/[^a-z]/i;
// //     var fname=patt.test(fn);
// //     var lname=patt.test(ln);

// //     if(fn == "")
// //     {
// //         alert('Please Input Firstname');
// //         return false;
// //     }
// //         if(fn == null || fname == true)
// //         {
// //             alert("Enter Only Alphabet For Firstname");
// //             return false;
// //         }
// //         if(ln == "")
// //         {
// //             alert("Please Input Lastname");
// //             return false;
// //         }

// // });

function validation()
{
    var fn=document.getElementById("fname");
    if(fn.value== "")
    {
        alert("Please Enyter FirstName");
        return false;
    }
}