<?php

namespace App\Shape;

/**
 * Class Tabung
 *
 * Represents a cylinder shape.
 *
 * @package App\Shape
 * @author Dian Prawira <wiradian84@gmail.com>
 */
class Tabung
{
    /**
     * Nilai konstanta PI.
     */
    public const PHI = 3.14;

    /**
     * Jari-jari tabung.
     *
     * @var float
     */
    public float $jari_jari;

    /**
     * Tinggi tabung.
     *
     * @var float
     */
    public float $tinggi;

    public function __construct(float $jari_jari, float $tinggi)
    {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    /**
     * Menghitung volume tabung.
     *
     * Metode ini menghitung volume tabung menggunakan rumus:
     * V = π * r^2 * t
     * di mana:
     * V = volume
     * π = pi (3.14)
     * r = jari-jari alas tabung
     * t = tinggi tabung
     *
     * @return float Volume tabung dalam satuan kubik
     */
    public function volume(): float
    {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }

}