<?php

namespace App\Models;

use App\Models\Resources\FAQ;

class FAQs {

  
    // Estrae i prodotti della categoria/e $catId (tutti o solo quelli in sconto), eventualmente ordinati
    public function getFAQ() {
       // da rivedere jhjhjhh
        $faq = FAQ::where('id','!=',0)->get();
        return $faq;
    }
    
    public function getFAQbyid($id_faq) {
       // da rivedere jhjhjhh
        $faq = FAQ::where('id',$id_faq)->first();
        return $faq;
    }
    
    public function deleteFAQ ($id_faq) {
       $faq = FAQs::find($id_faq);
        $faq->delete();
        
        }
}