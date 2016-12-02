<?php
    function recordsArray (){
        return file(__DIR__.'\records.txt',FILE_IGNORE_NEW_LINES);
    }
    assert(is_array(recordsArray()));