<?php

trait Reviewable
{

    // proprietà protetta per salvare le recensioni
    protected $reviews = array();

    // metodo per aggiungere una recensione
    public function setReview($review)
    {

        if (!is_string($review) || empty($review)) {
            throw new Exception("Devi scrivere qualcosa!");
        } else {
            $this->reviews[] = $review;
        }
    }

    // metodo per recuperare le recensioni
    public function getReviews()
    {
        return $this->reviews;
    }
}


