<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    private static $content;

    public static function newContent($contentData, $moduleId)
    {
        self::$content              = new Content();
        self::$content->module_id   = $moduleId;
        self::$content->title       = $contentData['title'] ?? '';
        self::$content->description = $contentData['description'] ?? '';
        self::$content->remarks     = $contentData['remarks'] ?? '';
        self::$content->save();

        return self::$content;
    }

    public static function updateContent($contentData, $moduleId, $id)
    {
        self::$content = Content::find($id);

        self::$content->module_id   = $moduleId;
        self::$content->title       = $contentData['title'] ?? '';
        self::$content->description = $contentData['description'] ?? '';
        self::$content->remarks     = $contentData['remarks'] ?? '';
        self::$content->save();

        return self::$content;
    }

    public static function deleteContent($id)
    {
        self::$content = Content::find($id);
        self::$content->delete();
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
