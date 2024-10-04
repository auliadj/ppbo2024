<?php

namespace App\Shape;

/**
 * Class Kerucut
 *
 * Merepresentasikan bentuk kerucut.
 *
 * @package App\Shape
 * @author Dian Prawira <wiradian84@gmail.com>
 */
class Kerucut
{
    /**
     * Nilai konstanta PI.
     */
    public const PHI = 3.14;

    /**
     * Jari-jari alas kerucut.
     *
     * @var float
     */
    public float $jari_jari;

    /**
     * Tinggi kerucut.
     *
     * @var float
     */
    public float $tinggi;

    /**
     * Konstruktor untuk membuat objek Kerucut.
     *
     * @param float $jari_jari Jari-jari alas kerucut
     * @param float $tinggi Tinggi kerucut
     */
    public function __construct(float $jari_jari, float $tinggi)
    {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    /**
     * Menghitung volume kerucut.
     *
     * Metode ini menghitung volume kerucut menggunakan rumus:
     * V = (1/3) * π * r^2 * t
     * di mana:
     * V = volume
     * π = pi (3.14)
     * r = jari-jari alas kerucut
     * t = tinggi kerucut
     *
     * @return float Volume kerucut dalam satuan kubik
     */
    public function volume(): float
    {
        return (1 / 3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}