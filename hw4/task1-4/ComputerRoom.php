<?php 

require_once("Room.php");

class ComputerRoom extends Room
{
    private int $computers;
    
    function __construct(int $walls, int $windows, string $wallColor, array $furniture, int $computers) {
        $this->$walls = $walls;
        $this->$windows = $windows;
        $this->$wallColor = $wallColor;
        $this->$furniture = $furniture;
        $this->$computers = $computers;
    }

    function getComputers() : int {
        return $this->$computers;
    }

    function setComputers($computers) {
        $this->$computers = $computers;
    }

    function useComputer() {
        echo "Computing...";
    }
}
