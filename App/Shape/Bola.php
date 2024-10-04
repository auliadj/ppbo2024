<?php

namespace App\Shape;

/**
 * Class Bola
 *
 * Merepresentasikan bentuk bola.
 *
 * @package App\Shape
 * @author Dian Prawira <wiradian84@gmail.com>
 */
class Bola
{
    /**
     * Nilai konstanta PI.
     */
    public const PHI = 3.14;

    /**
     * Jari-jari bola.
     *
     * @var float
     */
    public float $jari_jari;

    /**
     * Konstruktor untuk membuat objek Bola.
     *
     * @param float $jari_jari Jari-jari bola
     */
    public function __construct(float $jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    /**
     * Menghitung volume bola.
     *
     * Metode ini menghitung volume bola menggunakan rumus:
     * V = (4/3) * π * r^3
     * di mana:
     * V = volume
     * π = pi (3.14)
     * r = jari-jari bola
     *
     * @return float Volume bola dalam satuan kubik
     */
    public function volume(): float
    {
        return (4 / 3) * self::PHI * pow($this->jari_jari, 3);
    }
}