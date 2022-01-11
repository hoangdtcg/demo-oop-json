<?php


class Student
{
    public $name;
    public $age;
    private $email;
    private $address;
    private $group;
    public $math;
    public $physic;
    public $chemistry;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function setScore($math,$physic,$chemistry)
    {
        $this->math = $math;
        $this->physic = $physic;
        $this->chemistry = $chemistry;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param mixed $group
     */
    public function setGroup($group)
    {
        $this->group = $group;
    }

    /**
     * @return mixed
     */
    public function getMath()
    {
        return $this->math;
    }

    /**
     * @return mixed
     */
    public function getPhysic()
    {
        return $this->physic;
    }

    /**
     * @return mixed
     */
    public function getChemistry()
    {
        return $this->chemistry;
    }


    public function getSumScore()
    {
        $sum = $this->math+$this->physic+$this->chemistry;
        return $sum;
    }

    public function getAvgScore()
    {
        $avg = $this->getSumScore()/3;
        return number_format($avg,1);
    }
}