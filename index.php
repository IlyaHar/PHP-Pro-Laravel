<?php

class Color
{
    private int $red;
    private int $green;
    private int $blue;

    public function __construct(int $red, int $green, int $blue)
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }

    public function getRed(): int
    {
        return $this->red;
    }

    public function getGreen(): int
    {
        return $this->green;
    }

    public function getBlue(): int
    {
        return $this->blue;
    }

    private function setRed(int $red): void
    {
        if ($red < 0 || $red > 255) {
            throw new Exception('Invalid color');
        }

        $this->red = $red;
    }

    private function setGreen(int $green): void
    {
        if ($green < 0 || $green > 255) {
            throw new Exception('Invalid color');
        }

        $this->green = $green;
    }

    private function setBlue(int $blue): void
    {
        if ($blue < 0 || $blue > 255) {
            throw new Exception('Invalid color');
        }

        $this->blue = $blue;
    }

    public function equals(Color $color): bool
    {
        return
            $this->red === $color->getRed() &&
            $this->green === $color->getGreen() &&
            $this->blue === $color->getBlue();
    }

    public static function random(): Color
    {
        return new Color(rand(0, 255), rand(0, 255), rand(0, 255));
    }

    public function mix(Color $color): Color
    {
        return new Color(
            round($this->red + $color->getRed()) / 2,
            round($this->green + $color->getGreen()) / 2,
            round($this->blue + $color->getBlue() ) / 2
        );
    }
}

//$color1 = new Color(255, 255, 255);
//$color2 = new Color(255, 255, 255);
//
//var_dump($color1->equals($color2));


//$color1 = Color::random();
//$color2 = Color::random();
//var_dump($color1->equals($color2));


//$color = Color::random();
//echo $color->getRed() . '<br>';
//echo $color->getGreen() . '<br>';
//echo $color->getBlue() . '<br>';
//



//$color = new Color(250, 250, 250);
//$mixedColor = $color->mix(new Color(100, 100, 100));
//echo $mixedColor->getRed() . '<br>';
//echo $mixedColor->getGreen() . '<br>';
//echo $mixedColor->getBlue() . '<br>';
//
//if (!$color->equals($mixedColor)) {
//    echo 'Цвета не равные!';
//}