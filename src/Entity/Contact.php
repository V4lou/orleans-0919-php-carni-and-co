<?php


namespace App\Entity;

use Symfony\Component\Validator\Constraint as Assert;

class Contact
{
    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *     min=1,
     *     max=100,
     *     minMessage = "Votre prénom doit contenir au moins {{ limit }} caractères."))
     *     maxMessage = "Votre prénom doit contenir moins de {{ limit }} caractères."))
     */
    private $firstname;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(
     *     min=1,
     *     max=100,
     *     minMessage = "Votre nom doit contenir au moins {{ limit }} caractères.")
     *     maxMessage = "Votre prénom doit contenir moins de {{ limit }} caractères."))
     */
    private $lastname;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Email(
     *     message = "Veuillez rentrer un Email valide.")
     */
    private $mail;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(
     *     min=10,
     *     minMessage = "Votre message doit contenir au moins {{ limit }} caractères.")
     */
    private $message;

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return null|string
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * @param null|string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return null|string
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * @param null|string $mail
     */
    public function setMail(string $mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return null|string
     */
    public function getMail(): ?string
    {
        return $this->mail;
    }

    /**
     * @param null|string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return null|string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
}
