<?php


class StoreContactForm
{
    protected $name, $email, $phone, $subject, $message, $marketing;

    public function __construct($formData)
    {
        $this->name = $formData['name'];
        $this->email = $formData['email'];
        $this->phone = $formData['phone'];
        $this->subject = $formData['subject'];
        $this->message = $formData['message'];
        $this->marketing = $formData['marketing'];
    }
    public function hasEmptyFields()
    {
        $emptyFields = [];

        foreach ($this as $field => $value) {
            if (empty($value) && $value !== 0) {
                $emptyFields[] = $field;
            }
        }

        return $emptyFields;
    }
    public function isValidEmail()
    {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }

    public function isValidPhone()
    {
        $regEx = "/^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/";

        if (!preg_match($regEx, $this->phone) || strlen($this->phone) < 11) {
            return false;
        } else {
            return true;
        }
    }

    public function store()
    {
        global $db;
        try {
            $query = 'INSERT INTO contacts (name, email, phone, subject, message, accept_marketing) 
                  VALUES (:name, :email, :phone, :subject, :message, :accept_marketing)';
            $results = $db->prepare($query);
            $results->bindValue(':name', $this->name, PDO::PARAM_STR);
            $results->bindValue(':email', $this->email, PDO::PARAM_STR);
            $results->bindValue(':phone', $this->phone, PDO::PARAM_STR);
            $results->bindValue(':subject', $this->subject, PDO::PARAM_STR);
            $results->bindValue(':message', $this->message, PDO::PARAM_STR);
            $results->bindValue(':accept_marketing', $this->marketing, PDO::PARAM_STR);
            $results->execute();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        return true;
    }


}
