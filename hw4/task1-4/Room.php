<?php 

class Room {
    protected int $walls;
    protected int $windows;
    protected string $wallColor;
    protected array $furniture;

    function __construct(int $walls, int $windows, string $wallColor, array $furniture) {
        $this->$walls = $walls;
        $this->$windows = $windows;
        $this->$wallColor = $wallColor;
        $this->$furniture = $furniture;
    }

    function getWalls() : int {
        return $this->$walls;
    }

    function setWalls($walls) {
        $this->$walls = $walls;
    }

    function getWindows() : int {
        return $this->$windows;
    }

    function setWindows($windows) {
        $this->$windows = $windows;
    }

    function getWallColor() : string {
        return $this->$wallColor;
    }

    function setWallColor($wallColor) {
        $this->$wallColor = $wallColor;
    }

    function paintRoom($newColor) {
        echo "Painting...";
        $this->$wallColor = $newColor;
        echo "Done painting!";
    }

    function getFurniture() : array {
        return $this->$furniture;
    }

    function setFurniture($furniture) {
        $this->$furniture = $furniture;
    }
}