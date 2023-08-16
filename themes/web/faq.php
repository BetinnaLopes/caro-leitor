<?php  
    $this->layout("_theme");
?>

<?php
    if(!empty($faqs)){
       //var_dump($faqs);
       foreach ($faqs as $faqs){
           //var_dump($faq);
           echo "<div>{$faqs->question} - {$faqs->answer}</div>";
       }
   }
?>