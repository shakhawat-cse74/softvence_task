<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    private static $course, $image, $directory, $imageName, $imageUrl;

    public static function newCourse($request)
    {
        self::$image = $request->file('image');

        if (self::$image) {
            self::$imageName = self::$image->getClientOriginalName();
            self::$directory = 'uploads/course-images/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl = self::$directory . self::$imageName;
        } else {
            self::$imageUrl = null;
        }

        self::$course                 = new Course();
        self::$course->name           = $request->name;
        self::$course->description    = $request->description;
        self::$course->category_id    = $request->category_id;
        self::$course->course_price   = $request->course_price;
        self::$course->image          = self::$imageUrl;
        self::$course->save();
        if (!empty($request->modules)) {
            foreach ($request->modules as $moduleData) {
                Module::newModule($moduleData, self::$course->id);
            }
        }
        return self::$course;
    }

    public static function updateCourse($request, $id)
    {
        self::$course = Course::find($id);
        if (!self::$course) return null;

        // Image upload or keep old
        if ($request->file('image')) {
            self::$image     = $request->file('image');
            self::$imageName = self::$image->getClientOriginalName();
            self::$directory = 'uploads/course-images/';
            self::$image->move(self::$directory, self::$imageName);
            self::$imageUrl  = self::$directory . self::$imageName;
        } else {
            self::$imageUrl = self::$course->image;
        }

        // Update course data
        self::$course->name         = $request->name;
        self::$course->description  = $request->description;
        self::$course->category_id  = $request->category_id;
        self::$course->course_price = $request->course_price;
        self::$course->image        = self::$imageUrl;
        self::$course->save();

        // Handle modules
        if (!empty($request->modules)) {
            foreach ($request->modules as $moduleData) {
                // Delete module if _destroy is set
                if (!empty($moduleData['_destroy']) && !empty($moduleData['id'])) {
                    Module::find($moduleData['id'])?->delete();
                    continue;
                }

                if (!empty($moduleData['id'])) {
                    Module::updateModule($moduleData, self::$course->id, $moduleData['id']);
                } else {
                    Module::newModule($moduleData, self::$course->id);
                }
            }
        }

        return self::$course;
    }

    public static function deleteCourse($id)
    {
        self::$course = Course::with('modules.contents')->find($id);

        if (!self::$course) return;

        foreach (self::$course->modules as $module) {
            foreach ($module->contents as $content) {
                $content->delete();
            }
            $module->delete();
        }

        self::$course->delete();
    }




    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
