<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => "L'attribut :attribute doit être accepté.",
    'accepted_if' => "L'attribut :attribute doit être accepté lorsque :other est :value.",
    'active_url' => "L'attribut :attribute n'est pas une URL valide.",
    'after' => "L'attribut :attribute doit être une date après :date.",
    'after_or_equal' => "L'attribut :attribute doit être une date après ou égale à :date.",
    'alpha' => "L'attribut :attribute doit contenir uniquement des lettres.",
    'alpha_dash' => "L'attribut :attribute doit contenir uniquement des lettres, des nombres, des traits d'union et des tirets bas.",
    'alpha_num' => "L'attribut :attribute doit contenir uniquement des lettres et des nombres.",
    'array' => "L'attribut :attribute doit être un tableau.",
    'ascii' => "L'attribut :attribute doit contenir uniquement des caractères alphanumériques et des symboles à un octet.",
    'before' => "L'attribut :attribute doit être une date avant :date.",
    'before_or_equal' => "L'attribut :attribute doit être une date avant ou égale à :date.",
    'between' => [
        'array' => "L'attribut :attribute doit avoir entre :min et :max éléments.",
        'file' => "L'attribut :attribute doit être entre :min et :max kilo-octets.",
        'numeric' => "L'attribut :attribute doit être compris entre :min et :max.",
        'string' => "L'attribut :attribute doit avoir entre :min et :max caractères.",
        ],
    'boolean' => "Le champ :attribute doit être vrai ou faux.",
    'confirmed' => "La confirmation de l'attribut :attribute ne correspond pas.",
    'current_password' => "Le mot de passe est incorrect.",
    'date' => "L'attribut :attribute n'est pas une date valide.",
    'date_equals' => "L'attribut :attribute doit être une date égale à :date.",
    'date_format' => "L'attribut :attribute ne correspond pas au format :format.",
    'decimal' => "L'attribut :attribute doit avoir :decimal décimales.",
    'declined' => "L'attribut :attribute doit être refusé.",
    'declined_if' => "L'attribut :attribute doit être refusé lorsque :other est :value.",
    'different' => "L'attribut :attribute et :other doivent être différents.",
    'digits' => "L'attribut :attribute doit être de :digits chiffres.",
    'digits_between' => 'Le :attribute doit comporter entre :min et :max chiffres.',
    'dimensions' => 'Les dimensions de l\'image :attribute sont invalides.',
    'distinct' => 'Le champ :attribute a une valeur en double.',
    'doesnt_end_with' => 'Le :attribute ne peut pas se terminer par l\'un des éléments suivants : :values.',
    'doesnt_start_with' => 'Le :attribute ne peut pas commencer par l\'un des éléments suivants : :values.',
    'email' => 'Le :attribute doit être une adresse email valide.',
    'ends_with' => 'Le :attribute doit se terminer par l\'un des éléments suivants : :values.',
    'enum' => 'L\'attribut sélectionné :attribute est invalide.',
    'exists' => 'L\'attribut sélectionné :attribute est invalide.',
    'file' => 'Le :attribute doit être un fichier.',
    'filled' => 'Le champ :attribute doit avoir une valeur.',
    'gt' => [
    'array' => 'Le :attribute doit avoir plus de :value éléments.',
    'file' => 'Le :attribute doit être supérieur à :value kilo-octets.',
    'numeric' => 'Le :attribute doit être supérieur à :value.',
    'string' => 'Le :attribute doit comporter plus de :value caractères.',
    ],
    'gte' => [
    'array' => 'Le :attribute doit avoir :value éléments ou plus.',
    'file' => 'Le :attribute doit être supérieur ou égal à :value kilo-octets.',
    'numeric' => 'Le :attribute doit être supérieur ou égal à :value.',
    'string' => 'Le :attribute doit comporter :value caractères ou plus.',
    ],
    'image' => 'Le :attribute doit être une image.',
    'in' => 'L\'attribut sélectionné :attribute est invalide.',
    'in_array' => 'Le champ :attribute n\'existe pas dans :other.',
    'integer' => 'Le :attribute doit être un entier.',
    'ip' => 'Le :attribute doit être une adresse IP valide.',
    'ipv4' => 'Le :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'Le :attribute doit être une adresse IPv6 valide.',
    'json' => 'Le :attribute doit être une chaîne JSON valide.',
    'lowercase' => 'Le :attribute doit être en minuscules.',
    'lt' => [
    'array' => 'Le :attribute doit contenir moins de :value éléments.',
    'file' => 'Le :attribute doit être inférieur à :value kilo-octets.',
    'numeric' => 'Le :attribute doit être inférieur à :value.',
    'string' => 'Le :attribute doit comporter moins de :value caractères.',
    ],
    'lte' => [
    'array' => 'Le :attribute ne doit pas contenir plus de :value éléments.',
    'file' => 'Le :attribute doit être inférieur ou égal à :value kilo-octets.',
    'numeric' => 'Le :attribute doit être inférieur ou égal à :value.',
    'string' => 'Le :attribute doit comporter moins de ou égal à :value caractères.',
    ],
    'mac_address' => 'Le :attribute doit être une adresse MAC valide.',
    'max' => [
    'array' => 'Le :attribute ne doit pas contenir plus de :max éléments.',
    'file' => 'Le :attribute ne doit pas être supérieur à :max kilo-octets.',
    'numeric' => 'Le :attribute ne doit pas être supérieur à :max.',
    'string' => 'Le :attribute ne doit pas comporter plus de :max caractères.',
    ],
    'max_digits' => 'Le :attribute ne doit pas comporter plus de :max chiffres.',
    'mimes' => 'Le :attribute doit être un fichier de type : :values.',
    'mimetypes' => 'Le :attribute doit être un fichier de type : :values.',
    'min' => [
    'array' => 'Le :attribute doit contenir au moins :min éléments.',
    'file' => 'Le :attribute doit être au moins :min kilo-octets.',
    'numeric' => 'Le :attribute doit être au moins :min.',
    'string' => 'Le :attribute doit comporter au moins :min caractères.',
    ],
    'min_digits' => 'Le :attribute doit comporter au moins :min chiffres.',
    'multiple_of' => 'Le :attribute doit être un multiple de :value.',
    'not_in' => 'La valeur sélectionnée pour le champ :attribute est invalide.',
    'not_regex' => 'Le format du champ :attribute est invalide.',
    'numeric' => 'Le :attribute doit être un nombre.',
    'password' => [
        'letters' => 'Le champ :attribute doit contenir au moins une lettre.',
        'mixed' => 'Le champ :attribute doit contenir au moins une majuscule et une minuscule.',
        'numbers' => 'Le champ :attribute doit contenir au moins un nombre.',
        'symbols' => 'Le champ :attribute doit contenir au moins un symbole.',
        'uncompromised' => 'Le champ :attribute donné est apparu dans une fuite de données. Veuillez choisir un autre champ :attribute.',
        ],
        'present' => 'Le champ :attribute doit être présent.',
        'prohibited' => 'Le champ :attribute est interdit.',
        'prohibited_if' => 'Le champ :attribute est interdit lorsque :other est :value.',
        'prohibited_unless' => 'Le champ :attribute est interdit à moins que :other ne soit dans :values.',
        'prohibits' => 'Le champ :attribute interdit la présence de :other.',
        'regex' => 'Le format du champ :attribute est invalide.',
        'required' => 'Le champ :attribute est requis.',
        'required_array_keys' => 'Le champ :attribute doit contenir des entrées pour :values.',
        'required_if' => 'Le champ :attribute est requis lorsque :other est :value.',
        'required_if_accepted' => 'Le champ :attribute est requis lorsque :other est accepté.',
        'required_unless' => 'Le champ :attribute est requis à moins que :other ne soit dans :values.',
        'required_with' => 'Le champ :attribute est requis lorsque :values est présent.',
        'required_with_all' => 'Le champ :attribute est requis lorsque :values sont présents.',
        'required_without' => 'Le champ :attribute est requis lorsque :values n\'est pas présent.',
        'required_without_all' => 'Le champ :attribute est requis lorsque aucun de :values n\'est présent.',
        'same' => 'Le champ :attribute et :other doivent correspondre.',
        'size' => [
        'array' => 'Le champ :attribute doit contenir :size éléments.',
        'file' => 'Le champ :attribute doit être de :size kilo-octets.',
        'numeric' => 'Le champ :attribute doit être :size.',
        'string' => 'Le champ :attribute doit être de :size caractères.',
        ],
        'starts_with' => 'Le champ :attribute doit commencer par l\'un des éléments suivants: :values.',
        'string' => 'Le champ :attribute doit être une chaîne de caractères.',
        'timezone' => 'Le champ :attribute doit être une zone horaire valide.',
        'unique' => 'L\'attribut :attribute a déjà été pris.',
        'uploaded' => 'Le téléchargement de l\'attribut :attribute a échoué.',
        'uppercase' => 'L\'attribut :attribute doit être en majuscules.',
        'url' => 'L\'attribut :attribute doit être une URL valide.',
        'ulid' => 'L\'attribut :attribute doit être un ULID valide.',
        'uuid' => 'L\'attribut :attribute doit être un UUID valide.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
