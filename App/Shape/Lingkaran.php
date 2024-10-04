<?php

namespace App\Shape;

/**
 * Class Lingkaran
 *
 * Merepresentasikan bentuk lingkaran.
 *
 * @package App\Shape
 * @author Dian Prawira <wiradian84@gmail.com>
 */
class Lingkaran
{
    /**
     * Nilai konstanta PI.
     */
    public const PHI = 3.14;

    /**
     * Jari-jari lingkaran.
     *
     * @var float
     */
    public float $jari_jari;

    /**
     * Konstruktor untuk membuat objek Lingkaran.
     *
     * @param float $jari_jari Jari-jari lingkaran
     */
    public function __construct(float $jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    /**
     * Menghitung luas lingkaran.
     *
     * @return float Luas lingkaran
     */
    public function luas(): float
    {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    /**
     * Menghitung keliling lingkaran.
     *
     * @return float Keliling lingkaran
     */
    public function keliling(): float
    {
        return 2 * self::PHI * $this->jari_jari;
    }
}