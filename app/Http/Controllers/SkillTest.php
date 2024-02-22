<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillTest extends Controller
{
    public function index()
    {
        // Jawaban no 01
        $alphabet = 'aaabbcccddeddbzaa';
        $compressedString = '';
        $count = 1;

        for ($i = 0; $i < strlen($alphabet); $i++) {
            if ($i < strlen($alphabet) - 1 && $alphabet[$i] == $alphabet[$i + 1]) {
                $count++;
            } else {
                $compressedString .= $alphabet[$i] . $count;

                $count = 1;
            }
        }

        echo $compressedString;
        echo "<br>";
        echo "--------------------------------------------------------------------------------";
        echo "<br>";

        //  Jawaban no 02
        $numbers = [9, 3, 7, 8, 2, 6, 1, 4, 10, 2, 2, 3];
        $numberResult = $this->bubbleSort($numbers);

        foreach ($numberResult as $item) {
            echo $item;
            echo "<br>";
        }
        echo "--------------------------------------------------------------------------------";
        echo "<br>";

        return view('skill-test/views');
    }

    public function bubbleSort($arr)
    {
        $n = count($arr);
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                // Jika elemen ke-j lebih besar dari elemen ke-(j+1), tukar posisinya
                if ($arr[$j] > $arr[$j + 1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }

        return $arr;
    }

    public function hitungBelanjaan(Request $input)
    {
        $jenisBarang = $input->post('jenis_barang');
        $jumlahBarang = $input->post('jumlah_barang');
    }
}
