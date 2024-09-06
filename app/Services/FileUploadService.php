<?php

namespace App\Services;

use GuzzleHttp\Client;

class FileUploadService
{
    private $url = "https://api-storage.batangharikab.go.id/submit-upload";
    private $publicKey = "eyJhbGciOiJIUzUxMiIsInR5cCI6IkpXVCJ9.eyJjcmVhdGVfYXQiOiIyMDI0LTA5LTAzIDE0OjA3OjMxIiwiaWF0IjoxNzI1MzQ3MjUxLCJpc3MiOiIqLmJhdGFuZ2hhcmlrYWIuZ28uaWQiLCJqdGkiOiJiYWIxZjBiMy05YTUyLTQ0YjEtYmZkMS0zMjBjNmM4MzM0ZDgiLCJwcmVmaXgiOiIwZjk4MWI3MS01NDUwLTQ1YjUtYjQ1MC05ZjAyYTgyMjZmZTkiLCJyZWYiOiJ3ZWItc3RvcmFnZS5iYXRhbmdoYXJpa2FiLmdvLmlkIiwic3RlYW0iOiJiNjFlNzU0MS1mNGFhLTRjZjktOTRlZC0xOTdhMmI2MGViYjciLCJzdWIiOiIxMThhYTQ5OS05MjRhLTRjZWEtOGFjOC05ZGM3YTI3ZDdhYWYiLCJ1dWlkIjoiYzBhYWRjN2YtOTQwOS00YzVjLWFiYWYtMzFmOGI1MmYxMmU2In0.IqYhidgOHxlezCPooVek6tViYf0mcD-XUtlGOdam7roaPRsLWmgW4dT3OcYI6NV_QOu09Jbr583F6hvSZol3Sg";

    public function uploadFile($file)
    {
        $image_path = $file->getPathname();
        $nama_gambar = time() . '_' . $file->getClientOriginalName();
        $image_mime = $file->getMimeType();

        $client = new Client();
        $response = $client->request("POST", $this->url, [
            "headers" => ["Authorization" => "Bearer {$this->publicKey}"],
            "multipart" => [
                [
                    'name' => 'file',
                    'filename' => $nama_gambar,
                    'Mime-Type' => $image_mime,
                    'contents' => fopen($image_path, 'r'),
                ],
            ],
        ]);

        $responseBody = $response->getBody();
        $responseData = json_decode($responseBody, true);

        return $responseData['data']['url'];
    }
}
