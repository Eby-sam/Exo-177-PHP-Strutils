<?php

class strUtils {
    private string $str;
    private $bold;
    private $italic;
    private $underline;
    private $capitalize;

    public function __construct ($str, $bold, $italic, $underline, $capitalize) {
        $this->setStr($str);
        $this->setBold($bold);
        $this->setItalic($italic);
        $this->setUnderline($underline);
        $this->setCapitalize($capitalize);
    }
    /**
     * @return string
     */
    public function getStr(): string
    {
        return $this->str;
    }

    /**
     * @param string $str
     */
    public function setStr(string $str): void
    {
        $this->str = $str;
    }

    /**
     * @return mixed
     */
    public function getBold()
    {
        return "<bold> $this->str </bold>";
    }

    /**
     * @param mixed $bold
     */
    public function setBold($bold): void
    {
        $this->bold = $bold;
    }

    /**
     * @return mixed
     */
    public function getItalic()
    {
        return "<i> $this->str </i>";
    }

    /**
     * @param mixed $italic
     */
    public function setItalic($italic): void
    {
        $this->italic = $italic;
    }

    /**
     * @return mixed
     */
    public function getUnderline()
    {
        return "<span style='text-decoration: underline'> $this->str </span>";
    }

    /**
     * @param mixed $underline
     */
    public function setUnderline($underline): void
    {
        $this->underline = $underline;
    }

    /**
     * @return mixed
     */
    public function getCapitalize()
    {
        return "<span style='text-transform: capitalize'> $this->str </span>";
    }

    /**
     * @param mixed $capitalize
     */
    public function setCapitalize($capitalize): void
    {
        $this->capitalize = $capitalize;
    }

    public function uglify () {
        echo "<span style='text-decoration: underline; text-transform: capitalize'><bold><i> $this->str </i></bold></span>";
    }
}