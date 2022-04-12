<?php

class Car {
    private bool $hasParkBrake = true;

    public function start() {
        $brake = $this->getHasParkBrake();
        if($brake === true){
            throw new Exception('frein a main actif');
        }
    }

    /**
     * Get the value of hasParkBrake
     *
     * @return bool
     */
    public function getHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    /**
     * Set the value of hasParkBrake
     *
     * @param bool $hasParkBrake
     *
     * @return self
     */
    public function setHasParkBrake(bool $hasParkBrake): self
    {
        $this->hasParkBrake = $hasParkBrake;

        return $this;
    }
}