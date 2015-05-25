<?php

class Gerardo_Helloworld_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction() {

        $resource = Mage::getSingleton('core/resource');
        $connection = $resource->getConnection('core/read');
        $results =  $connection->query('SELECT * FROM core_store')->fetchAll();
        Zend_Debug::dump($results);
        $this->loadLayout();
        $this->renderLayout();

    }

    public function helloAction() {

        $this->loadLayout();
        $this->renderLayout();

    }

    public function flatAction()
    {
        // $resource = Mage::getSingleton('core/resource');
        // $connection = $resource->getConnection('core/read');

        // $results = $connection->query('SELECT * FROM review_detal')->fetchAll();

        // Zend_Debug::dump($results);

        $reviews = Mage::getModel('review/review')->getCollection();

        foreach ($reviews as $review) {
            Zend_Debug::dump($review->debug());
            echo $review->getReviewUrl().'<br />';
        }
    }

    public function subscriptionAction()
    {
        $subscription = Mage::getModel('helloworld/subscription');

        $subscription->setFirstname('John');
        $subscription->setLastName('Doe');
        $subscription->setEmail('john.doe@example.com');
        $subscription->setMessage('A short message test');

        $subscription->save();

        echo 'success';
    }
}