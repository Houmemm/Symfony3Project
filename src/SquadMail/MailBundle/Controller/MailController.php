<?php

namespace SquadMail\MailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Swift_Message;
use Swift_Attachment;
use SquadMail\MailBundle\Entity\Mail;
use SquadMail\MailBundle\Form\MailType;

class MailController extends Controller {

    public function indexAction() {
        return $this->render('SquadMailMailBundle:mail:mail.html.twig', array());
    }

    public function sendMailAction() {
        $to = "alaeddine.talmoudi@esprit.tn";
        $mail = new Mail();
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('SquadFttBundle:Rapport')->findAll();
        $form = $this->createForm(new MailType(), $mail);
        $request = $this->get('request');
        $form->handleRequest($request);
        if ($form->isValid()) {
            $this->addFlash(
            'notice',
            'Votre mail a été envoyé avec succés!'
        );
            $pdf = $mail->getFile();
            $fileName = md5(uniqid()) . '.' . $pdf->guessExtension();
            $brochuresDir = $this->container->getParameter('kernel.root_dir') . '/../web/upload';
            $pdf->move($brochuresDir, $fileName);
            $mail->setFile($fileName);
            $message = Swift_Message::newInstance()
                    ->setSubject($mail->getObjet())
                    ->setFrom(array('aladin.talmoudi@gmail.com' => 'Medecin'))
                    ->setTo($to)
                    ->setBody($mail->getText())
                    ->attach(Swift_Attachment::fromPath('upload/' . $mail->getFile())->setFilename('rapport.pdf'));
            $this->get('mailer')->send($message);
            $transport = $this->container->get('mailer')->getTransport();
            $spool = $transport->getSpool();
            $spool->flushQueue($this->container->get('swiftmailer.transport.real'));
            unlink('upload/' . $mail->getFile());
            
            return $this->render('SquadFttBundle:rapport:index.html.twig', array('to' => $to,
                 'entities' => $entities,
                'from' => $mail->getFrom()));
        }
        return $this->redirect($this->generateUrl('squad_mail_form'));
    }

    public function newAction() {
        $mail = new Mail();
        $form = $this->createForm(new MailType(), $mail);
        $request = $this->get('request');
        $form->handleRequest($request);
        if ($form->isValid()) {
            $this->sendMailAction('aladin.talmoudi@gmail.com', $mail->getFrom(), $mail->getNom(), $mail->getText());
        }
        return $this->render('SquadMailMailBundle:mail:new.html.twig', array('form' => $form->createView()));
    }

}
