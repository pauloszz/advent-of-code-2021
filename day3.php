<?php

echo "<h1>Day 2</h1>";
echo "<a href='index.html' target='_top'>Back</a><br><br>";

$values = [
	"011110011110",
	"101101001111",
	"000000010101",
	"100111001010",
	"110000011010",
	"011101010101",
	"011110001100",
	"010111111001",
	"111011100101",
	"011110000110",
	"010100001111",
	"000001001100",
	"110001001000",
	"001000100101",
	"010100011110",
	"010111011110",
	"110101001111",
	"011010111011",
	"000011010101",
	"100111011100",
	"010010100011",
	"010010011001",
	"000111010011",
	"111001000111",
	"100101111111",
	"011001101110",
	"110010101100",
	"001000010001",
	"110101100011",
	"101110001011",
	"010100000110",
	"001110011110",
	"011101100110",
	"001111101101",
	"000101101000",
	"100110000111",
	"000001010100",
	"111100010110",
	"000100100100",
	"001000110001",
	"101000001011",
	"101000100110",
	"110000101010",
	"010111110000",
	"111110010110",
	"011011111111",
	"111010100000",
	"100001000111",
	"011000001010",
	"011000010001",
	"101101100001",
	"011001101011",
	"111001001010",
	"000010110101",
	"101110100010",
	"001111111101",
	"011110001001",
	"000111100011",
	"010101001001",
	"111110111111",
	"111000111010",
	"001001111100",
	"000011000001",
	"011100010110",
	"110010000111",
	"000010010101",
	"110000001110",
	"010011111011",
	"001010100100",
	"111001010101",
	"001101000011",
	"110100110011",
	"110010100101",
	"001000001011",
	"111110011000",
	"110111011011",
	"110110101001",
	"010010100100",
	"111100001100",
	"100100001100",
	"110001111010",
	"111011001011",
	"010000010001",
	"110010100000",
	"010100011100",
	"000110001001",
	"010011000001",
	"111011010001",
	"010011111101",
	"111101110100",
	"110110101100",
	"010100111110",
	"100011001101",
	"000010000010",
	"011111100001",
	"100000101100",
	"100001110011",
	"100101100100",
	"000100001001",
	"101000000011",
	"110111101100",
	"100100101001",
	"001001101001",
	"000001010000",
	"001001111110",
	"111011111010",
	"001000011110",
	"110000100111",
	"010010010101",
	"011010001011",
	"100010010101",
	"010110101010",
	"011111001011",
	"110010011100",
	"111110101010",
	"000001111010",
	"111101110101",
	"101010110111",
	"100010101111",
	"000110101110",
	"000000010000",
	"000010100110",
	"111110010001",
	"000100110000",
	"110010011011",
	"101001000010",
	"010110000101",
	"100011100100",
	"110000110100",
	"110011000001",
	"101110001000",
	"010100011111",
	"111000100111",
	"110001100010",
	"100001101000",
	"101001000111",
	"111110100000",
	"000011000010",
	"110000000001",
	"111010000111",
	"100100111011",
	"101101110001",
	"111100110100",
	"100110010000",
	"001001001110",
	"100010001001",
	"101000110100",
	"011100001111",
	"001110100110",
	"110100001100",
	"101101001011",
	"000011111110",
	"101101010100",
	"000110110001",
	"011100011001",
	"111000111111",
	"011010101100",
	"111000100101",
	"100111011110",
	"011010100110",
	"110000101111",
	"110010000001",
	"100001110101",
	"110101011111",
	"111111000011",
	"101010010010",
	"000111111111",
	"000001001111",
	"101101010010",
	"111111001000",
	"001001110000",
	"110010011110",
	"110011001111",
	"100111101011",
	"011111000111",
	"110010111100",
	"010110000000",
	"110001100011",
	"111000100001",
	"011000101000",
	"100110001100",
	"001101011011",
	"011001111110",
	"011101000110",
	"110110111001",
	"110101001010",
	"111000111011",
	"100111010001",
	"100110000011",
	"010001000100",
	"001001001000",
	"010010001010",
	"010101101101",
	"001110001001",
	"101110011111",
	"010111001111",
	"110111001110",
	"100000101011",
	"010000111111",
	"101000101011",
	"101011010111",
	"000101110001",
	"100100010010",
	"100111011101",
	"111100000100",
	"100110000001",
	"000001000101",
	"101100001111",
	"100000101001",
	"010101010110",
	"000110010111",
	"011101001100",
	"000111111011",
	"000001100101",
	"100001011011",
	"111000101110",
	"111101100111",
	"011010010100",
	"101001001010",
	"110100110001",
	"111101011101",
	"000011101110",
	"011000100100",
	"101110000111",
	"011101110110",
	"111001010001",
	"011110000100",
	"011110001101",
	"100111100001",
	"010011100001",
	"001001101101",
	"001111111010",
	"010101000101",
	"011100000110",
	"100010001101",
	"011011101011",
	"110111001010",
	"101000010010",
	"111111100011",
	"000101111011",
	"001101010011",
	"100101000001",
	"101101100011",
	"101110010011",
	"011001100000",
	"110001111111",
	"011100101100",
	"010010001110",
	"111110101101",
	"010110001000",
	"000011000110",
	"101010011011",
	"000100111011",
	"001000111101",
	"010011111111",
	"011101100111",
	"111111011111",
	"001100000000",
	"101100001110",
	"101100001000",
	"100001011111",
	"100001000101",
	"000101011001",
	"010100111100",
	"110000111011",
	"010000111100",
	"011100110000",
	"101111110010",
	"100011110101",
	"100100110101",
	"100001100000",
	"101000100101",
	"111000001100",
	"010000001011",
	"110101010111",
	"011011001000",
	"100111000101",
	"011000000100",
	"110110011000",
	"101101101101",
	"100101110010",
	"001100001010",
	"010111000011",
	"111111100001",
	"100010111011",
	"110011001001",
	"000011011101",
	"001100101101",
	"010110011001",
	"111100110010",
	"011111001110",
	"100110001111",
	"000111101111",
	"011000110001",
	"001010001010",
	"000111010100",
	"010011110101",
	"011111000010",
	"000101000010",
	"111101011010",
	"110011111100",
	"100000001000",
	"100001000110",
	"101010100001",
	"000101000101",
	"100100011111",
	"110000101110",
	"000110000101",
	"001001011111",
	"100010011100",
	"000001110001",
	"110000010100",
	"011111010100",
	"001000001111",
	"000111000001",
	"110010001000",
	"001001111101",
	"111000001001",
	"001011000001",
	"111110010100",
	"110010001100",
	"010110110000",
	"011100100010",
	"011000101011",
	"001001000001",
	"011001001110",
	"111000010100",
	"000110000110",
	"011011000100",
	"011000010111",
	"110001011000",
	"010111011000",
	"000101110100",
	"000000011111",
	"001100111100",
	"000010100101",
	"000111110000",
	"000110000001",
	"000100101001",
	"101111110100",
	"010010000001",
	"001100010001",
	"101111001101",
	"111011111101",
	"000011110011",
	"111001011100",
	"010110110110",
	"000000001101",
	"010010000000",
	"000001010011",
	"101000010000",
	"101000001110",
	"010001000111",
	"111010011011",
	"101001111110",
	"000110101100",
	"100110101001",
	"100111111111",
	"101001101001",
	"110010010011",
	"011001011111",
	"111111110110",
	"101110010110",
	"100100001101",
	"010001111110",
	"111111101000",
	"100010100001",
	"011110010100",
	"101000110011",
	"010110110011",
	"011111001000",
	"100010100101",
	"110010010110",
	"111011001000",
	"101110001101",
	"000010110011",
	"001110100100",
	"100000011101",
	"011001100001",
	"011001101010",
	"001100011101",
	"000111101100",
	"001010001001",
	"111001101110",
	"110110001111",
	"001111001010",
	"001001000011",
	"001000010000",
	"000001111110",
	"000101101111",
	"001001000110",
	"100001101110",
	"101111011100",
	"111110010010",
	"010001100011",
	"101000100111",
	"001101000111",
	"111011110011",
	"000011000101",
	"111101001110",
	"110111111111",
	"011100010100",
	"110011110001",
	"001011011001",
	"000011010111",
	"011000001110",
	"000101010111",
	"110101110001",
	"001100001111",
	"110111010111",
	"110010010101",
	"100111100111",
	"101000000111",
	"101111000100",
	"100011100010",
	"000100100101",
	"111011110110",
	"001111100110",
	"011011000010",
	"100010010100",
	"010111110010",
	"100010110011",
	"111111111000",
	"011010101111",
	"101110111011",
	"101110101010",
	"001011001000",
	"110110001011",
	"110100101111",
	"001011001011",
	"110011010000",
	"000000100000",
	"100000110000",
	"101110011011",
	"100101101111",
	"010110100010",
	"000010100011",
	"000110110000",
	"111101000001",
	"011001010011",
	"000000001110",
	"000100110101",
	"111111111110",
	"001010101001",
	"001101100111",
	"010100000101",
	"000111001001",
	"101100101110",
	"011011110111",
	"011010000011",
	"000100101011",
	"100001100110",
	"000111011101",
	"000100011100",
	"000101100101",
	"011111111110",
	"111010111011",
	"100000100101",
	"011001011110",
	"010101100010",
	"010101111101",
	"100001000001",
	"001000100001",
	"010010111110",
	"100011001011",
	"011011000111",
	"110011010101",
	"111101100100",
	"001110001010",
	"110011111101",
	"111011011101",
	"001101000001",
	"101011011011",
	"100000111010",
	"010101110101",
	"000101011100",
	"011000011001",
	"111001010011",
	"100100010110",
	"111101010001",
	"110110011011",
	"011110110100",
	"101000110101",
	"101110111101",
	"011011011110",
	"000100110110",
	"100011011111",
	"111010101001",
	"011111011000",
	"101000101110",
	"110010111001",
	"111010000010",
	"110011011001",
	"110110010100",
	"111010011010",
	"000010110001",
	"011101100010",
	"110010110111",
	"010101001111",
	"011011001101",
	"101111000110",
	"010111010010",
	"101111011011",
	"100111101100",
	"001000001101",
	"010110100000",
	"001010100110",
	"111111000111",
	"100101000100",
	"100101001100",
	"110111010110",
	"101000101000",
	"100001001111",
	"110011110010",
	"111111101111",
	"110001111000",
	"010001110110",
	"101100000010",
	"000110000111",
	"001011100101",
	"101010100101",
	"110110001001",
	"000011011111",
	"110110101110",
	"101100110010",
	"101110101110",
	"101010110101",
	"000111000011",
	"101000011111",
	"001100000111",
	"101001111111",
	"100100011101",
	"111100011011",
	"000010111010",
	"111010101010",
	"101001010010",
	"101100010011",
	"010000110110",
	"011110110011",
	"001101110111",
	"110111110110",
	"001011000100",
	"101111100010",
	"011010011100",
	"110100001010",
	"100100110111",
	"000011010011",
	"000110111010",
	"001100100000",
	"100111011011",
	"001101101011",
	"101011101111",
	"001101100100",
	"111010010111",
	"100111111100",
	"101101000100",
	"000011111100",
	"011111001101",
	"110101001101",
	"011100100110",
	"101011000000",
	"100001010011",
	"011110111110",
	"011011100110",
	"110001011010",
	"111111110101",
	"001111111000",
	"100010011011",
	"100001101100",
	"110011010100",
	"100011000001",
	"011110111001",
	"010111110110",
	"100110001010",
	"100000000011",
	"001001101111",
	"101111011010",
	"010000110100",
	"101001011110",
	"100100011000",
	"101101000111",
	"011101001001",
	"010101110010",
	"000110000000",
	"000100111000",
	"010110111010",
	"110000011111",
	"011001011100",
	"010100110110",
	"011111110011",
	"111011011010",
	"001000101011",
	"000010110100",
	"011100101000",
	"111111100110",
	"011001110100",
	"000100011000",
	"010101010111",
	"001011101000",
	"001000011100",
	"110101101100",
	"010001000010",
	"001010010000",
	"111000110001",
	"101111111111",
	"011101011110",
	"001001111010",
	"001000100110",
	"000011011001",
	"100101100001",
	"110111000000",
	"100111011111",
	"111000110000",
	"110010111111",
	"000010010011",
	"100001100111",
	"010110100100",
	"001101001010",
	"101001100110",
	"010001110101",
	"001011000010",
	"010111110101",
	"000001001110",
	"010010100110",
	"111011001110",
	"101011111001",
	"000100000000",
	"111101001100",
	"100111011010",
	"000010010001",
	"100000010000",
	"101101000010",
	"110100010100",
	"111011111000",
	"101001100100",
	"001110101011",
	"000111001010",
	"111110000011",
	"001110100101",
	"101010000101",
	"010101010011",
	"110000111100",
	"101011001010",
	"010001011011",
	"010000011010",
	"000010101011",
	"100110110101",
	"100111011001",
	"100111010111",
	"000101100000",
	"101110000001",
	"100100001000",
	"010111000010",
	"000101001010",
	"001110010010",
	"111011000111",
	"001110110010",
	"111010000001",
	"011000100101",
	"000111100101",
	"100000100111",
	"100110011011",
	"001011100001",
	"101010100111",
	"011001111000",
	"000011011010",
	"001011101100",
	"010011011001",
	"000111111100",
	"010001011110",
	"111111011010",
	"111010010101",
	"110000010011",
	"001001101010",
	"000101011011",
	"100111111110",
	"110010101001",
	"111000011000",
	"011100101110",
	"011100010001",
	"001101110010",
	"101000111111",
	"101011011001",
	"110111000110",
	"001000010100",
	"000111000100",
	"010000101110",
	"001100100001",
	"111100000011",
	"111011101010",
	"000001111000",
	"100100010000",
	"110110000110",
	"000010111100",
	"110110110111",
	"010000011011",
	"101110000100",
	"011100100100",
	"010111001011",
	"001011010000",
	"000111010001",
	"110010111000",
	"001011011110",
	"000001100111",
	"010000101111",
	"110001100100",
	"111000001101",
	"000110011001",
	"010000010110",
	"101010001110",
	"111000111000",
	"011111011100",
	"111001110110",
	"111100010001",
	"110101111001",
	"001001010011",
	"010001111001",
	"001101101110",
	"010011000010",
	"000100011011",
	"000001101000",
	"001110100001",
	"100011010011",
	"100000011100",
	"011001010111",
	"110011011010",
	"100110001011",
	"011001110111",
	"001010001100",
	"000111010111",
	"110111111101",
	"111001101010",
	"001110001000",
	"011100001010",
	"010011101010",
	"111011010011",
	"000011001010",
	"100101000110",
	"100101010111",
	"110010100010",
	"010100101111",
	"111011011100",
	"100011100101",
	"101111111101",
	"001001110011",
	"110111101001",
	"100100010101",
	"010101100001",
	"100011000011",
	"001010010111",
	"011001001001",
	"110001101001",
	"010011100010",
	"111000001111",
	"010101111111",
	"001001001011",
	"000111110111",
	"100110111101",
	"011011110000",
	"001001011110",
	"011010101101",
	"111011101011",
	"010001100111",
	"110100001111",
	"100010110111",
	"000000010100",
	"100000010001",
	"010011010101",
	"010011100110",
	"100011111011",
	"110110100001",
	"110000100110",
	"110101100000",
	"110001101011",
	"110110100110",
	"101111101110",
	"011010101011",
	"101001010101",
	"110110111101",
	"100111100010",
	"101100100010",
	"101011101101",
	"010011010011",
	"001111011100",
	"100101010100",
	"101010101010",
	"010000011101",
	"011100000010",
	"100111101000",
	"111111010101",
	"011010101000",
	"001010110010",
	"111110010011",
	"110111011010",
	"010010111111",
	"111001100111",
	"010101111000",
	"000111110011",
	"111101000110",
	"001011000000",
	"110100100110",
	"101001110010",
	"101111011001",
	"111110000001",
	"011101110010",
	"011000010110",
	"101011010010",
	"100110011101",
	"000010011101",
	"001111110100",
	"110011001100",
	"111110111100",
	"011001011000",
	"001110000011",
	"110001001101",
	"111110111011",
	"110000000000",
	"010000110001",
	"000100110001",
	"001000101101",
	"001100110111",
	"101011001111",
	"110011110011",
	"010011100101",
	"001001000000",
	"011110100000",
	"001010110111",
	"110101111101",
	"001111000000",
	"100011011001",
	"100000001001",
	"000010101010",
	"110000100000",
	"111111101001",
	"111010101100",
	"101100110111",
	"110100011000",
	"010011000111",
	"010010001000",
	"001011001111",
	"001001001100",
	"100010110110",
	"111100111011",
	"111100101100",
	"000111111101",
	"101110000011",
	"100001011101",
	"111101110011",
	"100100000011",
	"111110011001",
	"100010111101",
	"110001001010",
	"111111100100",
	"010000110101",
	"001100001101",
	"001001110111",
	"110110101010",
	"011110010010",
	"101011010000",
	"101101110010",
	"010010110000",
	"011110100111",
	"010111000100",
	"010100000010",
	"000011110100",
	"111001011101",
	"010111100101",
	"110010101101",
	"011100010010",
	"001110111100",
	"011111110110",
	"001110100010",
	"000001100001",
	"011011110010",
	"000010111101",
	"001011111110",
	"111110111010",
	"001010101101",
	"100011110010",
	"001111110010",
	"011001110010",
	"100110101100",
	"010111010011",
	"001000010011",
	"111110110010",
	"011000000110",
	"011111111100",
	"000111110110",
	"110001110100",
	"101110010101",
	"010000111101",
	"011011101110",
	"011010100111",
	"001010000010",
	"100001100011",
	"110001000000",
	"101111100111",
	"101111110011",
	"001101110011",
	"110001110101",
	"100101010010",
	"010101011110",
	"000011111000",
	"000100001000",
	"101001110011",
	"011100110001",
	"000000011100",
	"111110010111",
	"101011101100",
	"110011101100",
	"110101011000",
	"010111001000",
	"111100001010",
	"001000011111",
	"010100111011",
	"101010101011",
	"001110001110",
	"100011000110",
	"000101101011",
	"110011010111",
	"111001011110",
	"111010100110",
	"010001110001",
	"011010101110",
	"101011110000",
	"001101010010",
	"001010000011",
	"011001000111",
	"010001000110",
	"010110011111",
	"001111011000",
	"000010010111",
	"100011110111",
	"111100111100",
	"010101010001",
	"100011101111",
	"011101011001",
	"001011001100",
	"001111000101",
	"110111011000",
	"011001001010",
	"010000000100",
	"100110111010",
	"000000111110",
	"011100100011",
	"100100111110",
	"000010011010",
	"111000000100",
	"001110001111",
	"011000101010",
	"011100110010",
	"110101000111",
	"110110111111",
	"101110110010",
	"000110100000",
	"110100001101",
	"000111101110",
	"111000111001",
	"000111111010",
	"010110111011",
	"000101110111",
	"111000011011",
	"010110001010",
	"001011111011",
	"100100100011",
	"011110110010",
	"000111110101",
	"110110011101",
	"000011000011",
	"110011001010",
	"000100101100",
	"101100100011",
	"010111000001",
	"110101100001",
	"011110111010",
	"111100101000",
	"010000100010",
	"110011000111",
	"010011011100",
	"100110101011",
	"000100001011",
	"101111000010",
	"010000010000",
	"111110000100",
	"111100011110",
	"010100111001",
	"100000011111",
	"010111110100",
	"100100110011",
	"111101111001",
	"100010011000",
	"111110101111",
	"010111001010",
	"110000101000",
	"001111111111",
	"000111100110",
	"000011101100",
	"011010001000",
	"001011010011",
	"110011111011",
];

echo "Total values: ";
echo count($values);
echo "<h3>Part 1</h3>";

$zero0 = 0;
$zero1 = 0;
$zero2 = 0;
$zero3 = 0;
$zero4 = 0;
$zero5 = 0;
$zero6 = 0;
$zero7 = 0;
$zero8 = 0;
$zero9 = 0;
$zero10 = 0;
$zero11 = 0;

$one0 = 0;
$one1 = 0;
$one2 = 0;
$one3 = 0;
$one4 = 0;
$one5 = 0;
$one6 = 0;
$one7 = 0;
$one8 = 0;
$one9 = 0;
$one10 = 0;
$one11 = 0;

foreach ($values as $value) {
	for ($i = 0; $i < 12; $i++) {
		$sub = substr($value, $i, 1);
		if ($sub == 0) {
			${"zero" . $i}++;
		} else {
			${"one" . $i}++;
		}
	}
}

$gamma = "";
$epsilon = "";

for ($i = 0; $i < 12; $i++) {
	if (${"one" . $i} > ${"zero" . $i}) {
		$gamma = $gamma . 1;
		$epsilon = $epsilon . 0;
	} else {
		$gamma = $gamma . 0;
		$epsilon = $epsilon . 1;
	}
}

$gammaRate = bindec($gamma);
$epsilonRate = bindec($epsilon);

echo "Gamma: " . $gamma . " (" . $gammaRate . ")<br>";
echo "Epsilon: " . $epsilon . " (" . $epsilonRate . ")<br>";
echo "Powerrate: " . $gammaRate * $epsilonRate;

echo "<h3>Part 2</h3>";
