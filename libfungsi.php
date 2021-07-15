<?php

function kelulusan($nilai)
{
	if ($nilai > 55) {
		return 'LULUS';
	}else{
		return 'TIDAK LULUS';
	}
}

function grade($nilai_total)
{
	if ($nilai_total >= 85 && $nilai_total <= 100) {
		$grade = 'A';
	}elseif ($nilai_total >= 70 && $nilai_total <= 84) {
		$grade = 'B';
	}elseif ($nilai_total >= 56 && $nilai_total <= 69) {
		$grade = 'C';
	}elseif ($nilai_total >= 36 && $nilai_total <= 55) {
		$grade = 'D';
	}elseif ($nilai_total >= 0 && $nilai_total <= 35) {
		$grade = 'E';
	}else{
		$grade = 'I';
	}

	return $grade;
}

function predikat($grade)
{
	switch ($grade) {
		case 'E':
			$predikat = 'Sangat Kurang';
			break;
		case 'D':
			$predikat = 'Kurang';
			break;
		case 'C':
			$predikat = 'Cukup';
			break;
		case 'B':
			$predikat = 'Bagus';
			break;
		case 'A':
			$predikat = 'Sangat Memuaskan';
			break;
		case 'I':
			$predikat = 'Tidak Ada';
			break;
		default:
			$predikat = 'Tidak Ditemukan';
			break;
	}

	return $predikat;
}