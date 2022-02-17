<?php

trait DeviceAttribute
{
    protected $productDimension;
    protected $productWeight;
    protected $batteries;
    protected $displayTechnology;
    protected $formFactor;
    protected $color;
    protected $ram;
    protected $memory;
    protected $cpuModel;

    /**
     * Get the value of productDimension
     */ 
    public function getProductDimension()
    {
        return $this->productDimension;
    }

    /**
     * Set the value of productDimension
     *
     * @return  self
     */ 
    public function setProductDimension($productDimension)
    {
        $this->productDimension = $productDimension;

        return $this;
    }

    /**
     * Get the value of productWeight
     */ 
    public function getProductWeight()
    {
        return $this->productWeight;
    }

    /**
     * Set the value of productWeight
     *
     * @return  self
     */ 
    public function setProductWeight($productWeight)
    {
        $this->productWeight = $productWeight;

        return $this;
    }

    /**
     * Get the value of batteries
     */ 
    public function getBatteries()
    {
        return $this->batteries;
    }

    /**
     * Set the value of batteries
     *
     * @return  self
     */ 
    public function setBatteries($batteries)
    {
        $this->batteries = $batteries;

        return $this;
    }

    /**
     * Get the value of displayTechnology
     */ 
    public function getDisplayTechnology()
    {
        return $this->displayTechnology;
    }

    /**
     * Set the value of displayTechnology
     *
     * @return  self
     */ 
    public function setDisplayTechnology($displayTechnology)
    {
        $this->displayTechnology = $displayTechnology;

        return $this;
    }

    /**
     * Get the value of formFactor
     */ 
    public function getFormFactor()
    {
        return $this->formFactor;
    }

    /**
     * Set the value of formFactor
     *
     * @return  self
     */ 
    public function setFormFactor($formFactor)
    {
        $this->formFactor = $formFactor;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of ram
     */ 
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * Set the value of ram
     *
     * @return  self
     */ 
    public function setRam($ram)
    {
        $this->ram = $ram;

        return $this;
    }

    /**
     * Get the value of memory
     */ 
    public function getMemory()
    {
        return $this->memory;
    }

    /**
     * Set the value of memory
     *
     * @return  self
     */ 
    public function setMemory($memory)
    {
        $this->memory = $memory;

        return $this;
    }

    /**
     * Get the value of cpuModel
     */ 
    public function getCpuModel()
    {
        return $this->cpuModel;
    }

    /**
     * Set the value of cpuModel
     *
     * @return  self
     */ 
    public function setCpuModel($cpuModel)
    {
        $this->cpuModel = $cpuModel;

        return $this;
    }
}
