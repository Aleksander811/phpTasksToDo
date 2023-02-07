<?php

namespace ToDo;

class Request{
    public static function uri(){             // šis metodas grąžina užklausą į serverį
        return trim($_SERVER['REQUEST_URI']); // trim pašalina tarpus
    }
}
