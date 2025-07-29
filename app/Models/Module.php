<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    private static $module;

    public static function newModule($moduleData, $courseId)
    {
        self::$module = new Module();
        self::$module->course_id = $courseId;
        self::$module->title     = $moduleData['title'] ?? 'Untitled Module';
        self::$module->save();

        // Create contents if available
        if (!empty($moduleData['contents']) && is_array($moduleData['contents'])) {
            foreach ($moduleData['contents'] as $contentData) {
                Content::newContent($contentData, self::$module->id);
            }
        }

        return self::$module;
    }


    public static function updateModule($moduleData, $courseId, $id)
    {
        self::$module = Module::find($id);

        self::$module->course_id = $courseId;
        self::$module->title     = $moduleData['title'] ?? 'Untitled Module';
        self::$module->save();

        if (!empty($moduleData['contents'])) {
            foreach ($moduleData['contents'] as $contentData) {
                // Delete content if _destroy set
                if (!empty($contentData['_destroy']) && !empty($contentData['id'])) {
                    Content::find($contentData['id'])?->delete();
                    continue;
                }

                if (!empty($contentData['id'])) {
                    Content::updateContent($contentData, self::$module->id, $contentData['id']);
                } else {
                    Content::newContent($contentData, self::$module->id);
                }
            }
        }

        return self::$module;
    }

    public static function deleteModule($id)
    {
        self::$module = Module::find($id);
        self::$module->delete();
    }




    public function contents()
    {
        return $this->hasMany(Content::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
