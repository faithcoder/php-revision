<?php

class Course{
    protected static $courseName = "Python Advance Course";

    public static function getCourseName(){
        #return self::$courseName; //যদি একই ফাংশন প্যারেন্ট ক্লাস এবং চাইল্ড ক্লাসে ব্যবহার হয় এবং self use করা হয়, তাহলে প্রথম ভ্যালূ হিসেবে "Python Advance course" show করবে।

        return static::$courseName; //যদি একই ফাংশন প্যারেন্ট ক্লাস এবং চাইল্ড ক্লাসে ব্যবহার হয় এবং static use করা হয়, তাহলে সর্বশেষ ভ্যালূ হিসেবে "Zend Php" show করবে
    }
}


class Student extends Course {
    protected static $courseName="Zend Php";
}

echo Student::getCourseName();

//এটা কে বলা হয় Late static binding 