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

    'accepted' => 'Le champ :attribute doit être accepté.',
    'active_url' => 'Le champ :attribute n\'est pas une URL valide.',
    'after' => 'Le champ :attribute doit être une date supérieure au :date.',
    'after_or_equal' => 'Le champ :attribute doit être une date supérieure ou égale à :date.',
    'alpha' => 'Le champ :attribute doit seulement contenir des lettres.',
    'alpha_dash' => 'Le champ :attribute doit seulement contenir des lettres, des chiffres et des tirets.',
    'alpha_num' => 'Le champ :attribute doit contenir uniquement des chiffres et des lettres.',
    'array' => 'Le champ :attribute doit être un tableau.',
    'before' => 'Le champ :attribue doit être une date inférieure au :date.',
    'before_or_equal' => 'Le champ :attribute doit être une date inférieure ou égale à :date.',
    'between' => [
        'numeric' => 'Le champ :attribute doit être entre :min et :max.',
        'file' => 'La taille du fichier de :attribute doit être comprise entre :min et :max kilo-octets.',
        'string' => 'Le champ :attribute doit contenir entre :min et :max caractères.',
        'array' => 'Le champ :attribute doit avoir entre :min et :max éléments.',
    ],
    'boolean' => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed' => 'La confirmation :attribute ne correspond pas.',
    'date' => 'Le champ :attribute n\'est pas une date valide',
    'date_format' => 'Le champ :attribute ne correspond pas au format :format.',
    'different' => 'Les champs :attribute et :other doivent être différents.',
    'digits' => 'Le champ :attribute doit avoir :digits chiffres.',
    'digits_between' => 'Le champ :attribute doit contenir entre :min et :max chiffres.',
    'dimensions' => 'Le champ :attribute a des dimensions d\'image invalides.',
    'distinct' => 'Le champ :attribute a une valeur en double.',
    'email' => 'Le champ :attribute doit être une adresse e-mail valide.',
    'exists' => 'Le champ :attribute sélectionné n\'est pas valide.',
    'file' => 'Le champ :attribute doit être un fichier.',
    'filled' => 'Le champ :attribute est requis.',
    'image' => 'Le champ :attribute doit être une image.',
    'in' => 'Le champ :attribute sélectionné n\'est pas valide.',
    'in_array' => 'Le champ :attribute n\'existe pas dans :other.',
    'integer' => 'Le champ :attribute doit être un entier.',
    'ip' => 'Le champ :attribute doit être une adresse IP valide.',
    'json' => 'Le champ :attribute doit être une chaîne JSON valide.',
    'max' => [
        'numeric' => 'Le champ ":attribute" ne peut pas être plus grand que :max.',
        'file' => 'Le champ ":attribute" ne peut pas être plus grand que :max kilo-octets.',
        'string' => 'Le champ :attribute ne peut pas être plus grand que :max caractères.',
        'array' => 'Le champ :attribute ne peut pas avoir plus de :max éléments.',
    ],
    'mimes' => 'Le champ :attribute doit être un fichier de type : :values.',
    'mimetypes' => 'Le champ :attribute doit être un fichier de type : :values.',
    'min' => [
        'numeric' => 'La champ :attribute doit être supérieure ou égale à :min.',
        'file' => 'Le champ :attribute doit être d\'au moins :min kilo-octets.',
        'string' => 'Le champ :attribute doit contenir au moins :min caractères.',
        'array' => 'Le champ :attribute doit avoir au moins :min éléments.',
    ],
    'not_in' => 'Le champ :attribute sélectionné n\'est pas valide.',
    'numeric' => 'Le champ :attribute doit être un nombre.',
    'present' => 'Le champ :attribute doit être présent.',
    'regex' => 'Le format du champ :attribute est invalide.',
    'required' => 'Le champ :attribute est obligatoire.',
    'required_if' => 'Le champ :attribute est requis lorsque :other est :value.',
    'required_unless' => 'Le champ :attribute est requis sauf si :other est dans :values.',
    'required_with' => 'Le champ :attribute est requis lorsque :values est présent.',
    'required_with_all' => 'Le champ :attribute est requis lorsque :values est présent.',
    'required_without' => 'Le champ :attribute est obligatoire quand :values n\'est pas présent.',
    'required_without_all' => 'Le champ :attribute est requis quand aucune des :values n\'est présente.',
    'same' => 'Les champs :attribute et :other doivent être identiques.',
    'size' => [
        'numeric' => 'Le champ :attribute doit être :size.',
        'file' => 'Le champ :attribute doit être de :size kilo-octets.',
        'string' => 'Le champ :attribute doit être de :size caractères.',
        'array' => 'Le champ :attribute doit contenir :size éléments.',
    ],
    'string' => 'Le champ :attribute doit être une chaîne de caractères.',
    'timezone' => 'Le champ :attribute doit être un fuseau horaire valide.',
    'unique' => 'Le champ :attribute a déjà été pris.',
    'uploaded' => 'Le fichier du champ :attribute n\'a pu être téléversé.',
    'url' => 'The :attribute format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

    // Internal validation logic for Panel
    'internal' => [
        'variable_value' => 'variable :env',
        'invalid_password' => 'Le mot de passe fourni n\'est pas valide pour ce compte.',
    ],
];
