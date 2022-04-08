<?php


class User
{

    public string $first_name;
    public string $last_name;
    public string $email_address;
    public string $username;
    public string $password;



    /**
     * @param string $first_name
     * @param string $last_name
     * @param string $email_address
     * @param string $username
     * @param string $password
     */


    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->email_address;
    }

    /**
     * @param string $email_address
     */
    public function setEmailAddress(string $email_address): void
    {
        $this->email_address = $email_address;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }




}