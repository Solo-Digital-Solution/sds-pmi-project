<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class MessageController extends Controller
{
    public function send(Request $request)
    {
        // Handle the uploaded CSV file
        $csvFile = $request->file('nowa');
        if (!$csvFile || !$csvFile->isValid()) {
            return response()->json(['status' => 'CSV file is not valid'], 400);
        }

        // Store the uploaded file
        $csvPath = $csvFile->store('uploads', 'public');

        // Read the CSV file and extract numbers
        $numbers = [];
        $filePath = storage_path('app/public/' . $csvPath);
        if (File::exists($filePath)) {
            $content = File::get($filePath);
            $content = str_replace("\r", "", $content); // Remove carriage returns
            $lines = explode("\n", $content); // Split by new line

            foreach ($lines as $line) {
                $lineNumbers = preg_split('/\s+/', trim($line)); // Split by any whitespace
                foreach ($lineNumbers as $number) {
                    if (!empty($number)) {
                        $numbers[] = trim($number) . "@c.us";
                    }
                }
            }
        } else {
            return response()->json(['status' => 'File does not exist or is not readable'], 400);
        }

        // Handle the uploaded image file
        $imageFile = $request->file('gambar');
        if (!$imageFile || !$imageFile->isValid()) {
            return response()->json(['status' => 'Image file is not valid'], 400);
        }

        // Store the image file
        $imagePath = $imageFile->store('uploads', 'public');
        $imageFilePath = storage_path('app/public/' . $imagePath);

        if (!File::exists($imageFilePath)) {
            return response()->json(['status' => 'Image file does not exist or is not readable'], 400);
        }

        $data = [
            'numbers' => $numbers,
            'message' => $request->input('pesan'),
            'file_path' => $imageFilePath,
        ];

        // Send data to Node.js server
        $client = new \GuzzleHttp\Client();
        $response = $client->post('http://localhost:4000/send', [
            'json' => $data
        ]);

        return response()->json(['status' => 'Messages sent successfully']);
    }
}
