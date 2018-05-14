<?php

namespace TokenChef\IcoTemplate\Services;

use Carbon\Carbon;
use Illuminate\Http\UploadedFile;
use TokenChef\IcoTemplate\Exceptions\WebException;

class FileService
{

    private static $allowed_mime_types_images = ['image/jpeg', 'image/png', 'image/bmp'];
    private static $blocked_images_extension = ['svg', 'gif'];

    /**
     * @param UploadedFile $file
     * @param $filename
     * @param $path
     * @return string
     * @throws WebException
     */
    public static function upload_image($file, $filename, $path)
    {

        if ($file && $file->isValid()) {

            if (filesize($file->getRealPath()) / (1000 * 1000) > 5) {
                throw new WebException(trans('ico-template::home.file_error_too_large'));
            }

            $destinationPath = $path; // upload path
            $name = $filename;
            $name = self::repair_name($name);
            $extension = pathinfo($name, PATHINFO_EXTENSION);
            $extension = $extension ? $extension : $file->extension();
            $fileName = pathinfo($name, PATHINFO_FILENAME) . '_' . str_random(10) . '_' . Carbon::now()->timestamp; // renaming image

            $contentType = mime_content_type($file->getPathname());
            if (!in_array($contentType, self::$allowed_mime_types_images)) {
                throw new WebException(trans('ico-template::home.wrong_file'));
            }

            if (in_array($extension, self::$blocked_images_extension)) {
                throw new WebException(trans('ico-template::home.file_error_wrong_file'));
            }
            $full_name = $fileName . '.' . $extension;
            $file->move($destinationPath, $full_name); // uploading file to given path
            return $full_name;
        }
        throw new WebException(trans('ico-template::home.file_error_wrong_file'));
    }

    public static function remove_image($filename, $location = '')
    {
        \File::delete($location . '/' . $filename);
    }

    /**
     * Repair filename
     *
     * @param $name
     * @return mixed
     */
    private static function repair_name($name)
    {
        $name = str_replace('\\', '/', $name);
        $name = str_replace(' ', '_', $name);
        $name = str_replace('\'', '', $name);
        $name = str_replace('"', '', $name);
        return $name;
    }
}