<?php
   

$girisdogru=false;
if(empty($_POST)==false)
{
    $kuladi=$_POST["kuladi"];
    $sifre=$_POST["sifre"];
    
    if($kuladi=="")
    {
        echo "Kullanıcı adını boş bıraktınız!";
        header("Refresh: 1; url=girisyap.php");
    }
     else if($kuladi!="b201210053@sakarya.edu.tr")
    {
        echo "Kullanıcı adınız yanlış";
        echo "!!!TEKRAR DENEYİN!!!";
        header("Refresh: 1; url=girisyap.php");
    }
      
    else if($sifre=="")
    {
        echo "Şifreyi boş bıraktınız!";
        echo "!!!TEKRAR DENEYİN!!!";
        header("Refresh: 1; url=girisyap.php");
    }
    
     
    else if($sifre!="b201210053")
    {  
        echo "Şifre yanlış";
         echo "!!!TEKRAR DENEYİN!!!";
         header("Refresh: 1; url=girisyap.php");
    }
    
    else
    {  
        //kullanıcı adı ve şifre doğru ise
        if($kuladi=="b201210053@sakarya.edu.tr" && $sifre=="b201210053")
        {
            $girisdogru=true;
            echo "SİTEYE GİRİŞ YAPTINIZ HOŞGELDİNİZ b201210053" ;
          
        }
        
     
        else
        {
            header("Location:girisyap.php?>kuladi=$kuladi");
         }
    }

}


?>
