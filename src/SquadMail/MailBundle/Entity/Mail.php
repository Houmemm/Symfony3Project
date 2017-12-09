<?php

namespace SquadMail\MailBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;




class Mail {
    
    private $objet;
    private $text;
    private $from;
    
    
    
    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please, upload the product brochure as a PDF file.")
     * @Assert\File(mimeTypes={ "application/pdf" })
     */
    private $file;
   
    function getFrom() {
        return $this->from;
    }

    function setFrom($from) {
        $this->from = $from;
    }

        
    function getObjet() {
        return $this->objet;
    }

    function setObjet($objet) {
        $this->objet = $objet;
    }

        function getFile() {
        return $this->file;
    }

    function setFile($file) {
        $this->file = $file;
    }

        
    
    
    
    
    

        function getText() {
        return $this->text;
    }

    

    function setText($text) {
        $this->text = $text;
    }
     
    


}
