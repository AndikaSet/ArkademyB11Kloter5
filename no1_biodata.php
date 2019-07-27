<?php
//membuat fungsi biodata
    function biodata(){

    $biodata = [

          "name" => "Andika Setyawan",
          "age" => 24,
          "address" => "Pagersalam RT 1/2, Gunungpati, Semarang",
          "hobbies" => [

                         "Membaca","Editing video"
          ],
          "is_married" => false,
          "list_school" => [

              "university" => "universitas dian nuswantoro",
              "year_in" => 2013,
              "year_out" => 2017,
              "major" => "Teknik Informatika"
          ],
          "skills" => [
              "skill_name_1" => "HTML/CSS",
              "level_1" => "beginner",
              "skill_name_2" => "PHP",
              "level_2" => "beginner"

          ],
          "interest_in_coding" => true,
      ];
//konvert ke json
        $json_data = json_encode($biodata);
        return $json_data;
  }

  echo biodata();
  