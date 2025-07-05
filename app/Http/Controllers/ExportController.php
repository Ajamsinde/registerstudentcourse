<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExportController extends Controller
{
    public function export(Request $request)
    {
        $course = $request->input('course'); // گرفتن ناوی کورس

        // بناء الاستعلام
        $query = Registration::select('name', 'age', 'gender', 'phone', 'location', 'course');

        if ($course) {
            $query->where('course', $course); // فلترة حسب اسم الدورة
        }

        $registrations = $query->get();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // ترويسة الأعمدة
        $sheet->setCellValue('A1', 'ناڤ');             // الاسم
        $sheet->setCellValue('B1', 'ژی');              // العمر
        $sheet->setCellValue('C1', 'رەگەز');           // الجنس
        $sheet->setCellValue('D1', 'ژمارەی تەلەفۆن');  // رقم الهاتف
        $sheet->setCellValue('E1', 'ناونیشان');        // العنوان
        $sheet->setCellValue('F1', 'کورس');            // اسم الدورة

        $row = 2;
        foreach ($registrations as $reg) {
            $sheet->setCellValue('A' . $row, $reg->name);
            $sheet->setCellValue('B' . $row, $reg->age);
            $sheet->setCellValue('C' . $row, $reg->gender);
           $sheet->setCellValueExplicit('D' . $row, $reg->phone, \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
            $sheet->setCellValue('E' . $row, $reg->location); // تأكد أن العمود اسمه "location" وليس "address"
            $sheet->setCellValue('F' . $row, $reg->course);
            $row++;
        }

        $writer = new Xlsx($spreadsheet);
        return response()->streamDownload(function () use ($writer) {
            $writer->save('php://output');
        }, 'registrations.xlsx');
    }
}
