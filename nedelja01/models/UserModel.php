<?php
    namespace App\Models;

    use \App\Core\Model;
    use \App\Core\Field;

    class UserModel extends Model {
        protected function getFields() {
            return [
                'user_id'        => Field::readonlyInteger(11),
                'created_at'     => Field::readonlyDateTime(),
                'username'       => Field::editableString(1, 64),
                'password_hash'  => Field::editableString(1, 128),
                'email'          => Field::editableString(1, 255),
                'forename'       => Field::editableString(1, 64),
                'surname'        => Field::editableString(1, 64),
                'is_active'      => Field::editableBit()
            ];
        }
    }
