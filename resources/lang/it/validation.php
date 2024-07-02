<?php 

return [
    'between' => [
        'numeric' => 'L\' :attribute deve essere compreso tra :min e :max.',
        'file' => 'L\' :attribute deve essere compreso tra :min e :max kilobyte.',
        'string' => 'L\' :attribute deve essere compreso tra :min e :max caratteri.',
        'array' => 'L\' :attribute deve avere tra :min e :max elementi.',
    ],
    'gt' => [
        'numeric' => ':attribute deve essere maggiore di :value.',
        'file' => ':attribute deve essere maggiore di :value kilobyte.',
        'string' => ':attribute deve essere maggiore di :value caratteri.',
        'array' => 'L\':attribute deve avere più di :value elementi.',
    ],
    'gte' => [
        'numeric' => ':attribute deve essere maggiore o uguale a :value.',
        'file' => ':attribute deve essere maggiore o uguale a :value kilobyte.',
        'string' => ':attribute deve essere maggiore o uguale a :value caratteri.',
        'array' => 'L\':attribute deve avere :value elementi o più.',
    ],
    'lt' => [
        'numeric' => ':attribute deve essere minore di :value.',
        'file' => ':attribute deve essere inferiore a :value kilobyte.',
        'string' => ':attribute deve contenere meno di :value caratteri.',
        'array' => 'L\':attribute deve avere meno di :value elementi.',
    ],
    'lte' => [
        'numeric' => ':attribute deve essere minore o uguale a :value.',
        'file' => ':attribute deve essere minore o uguale a :value kilobyte.',
        'string' => ':attribute deve essere minore o uguale a :value caratteri.',
        'array' => 'L\' :attribute non deve contenere più di :value elementi.',
    ],
    'max' => [
        'numeric' => 'L\' :attribute non può essere maggiore di :max.',
        'file' => 'L\' :attribute non può essere maggiore di :max kilobyte.',
        'string' => 'L\' :attribute non può essere maggiore di :max caratteri.',
        'array' => 'L\' :attribute non può contenere più di :max elementi.',
    ],
    'min' => [
        'numeric' => 'L\' :attribute deve essere almeno :min.',
        'file' => 'L\' :attribute deve essere almeno :min kilobyte.',
        'string' => 'L\' :attribute deve contenere almeno :min caratteri.',
        'array' => 'L\':attribute deve contenere almeno :min elementi.',
    ],
    'password' => 'La password non è corretta.',
    'size' => [
        'numeric' => 'L\' :attribute deve essere :size.',
        'file' => 'L\' :attribute deve essere :size kilobyte.',
        'string' => 'L\':attribute deve essere di :size caratteri.',
        'array' => 'L\' :attribute deve contenere elementi :size',
    ],
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'messaggio personalizzato',
        ],
    ],
    'attributes' => '',
    'captcha' => 'Codice captcha fornito non valido',
    'accepted' => 'L\':attribute deve essere accettato.',
    'active_url' => 'L\':attribute non è un URL valido.',
    'after' => ':attribute deve essere una data successiva a :date.',
    'after_or_equal' => ':attribute deve essere una data successiva o uguale a :date.',
    'alpha' => 'L\':attribute può contenere solo lettere.',
    'alpha_dash' => 'L\':attribute può contenere solo lettere, numeri, trattini e caratteri di sottolineatura.',
    'alpha_num' => 'L\':attribute può contenere solo lettere e numeri.',
    'array' => 'L\':attribute deve essere un array.',
    'before' => ':attribute deve essere una data precedente a :date.',
    'before_or_equal' => ':attribute deve essere una data precedente o uguale a :date.',
    'boolean' => 'Il campo :attribute deve essere vero o falso.',
    'confirmed' => 'La conferma :attribute non corrisponde.',
    'date' => 'L\':attribute non è una data valida.',
    'date_equals' => ':attribute deve essere una data uguale a :date.',
    'date_format' => 'L\' :attribute non corrisponde al formato :format.',
    'different' => ':attribute e :other devono essere diversi.',
    'digits' => 'L\' :attribute deve essere :digits cifre.',
    'digits_between' => 'L\' :attribute deve essere compreso tra :min e :max cifre.',
    'dimensions' => 'L\':attribute ha dimensioni dell\'immagine non valide.',
    'distinct' => 'Il campo :attribute ha un valore duplicato.',
    'email' => 'L\':attribute deve essere un indirizzo email valido.',
    'ends_with' => 'L\':attribute deve terminare con uno dei seguenti: :values.',
    'exists' => 'L\':attribute selezionato non è valido.',
    'file' => 'L\':attribute deve essere un file.',
    'filled' => 'Il campo :attribute deve avere un valore.',
    'image' => 'L\':attribute deve essere un\'immagine.',
    'in' => 'L\':attribute selezionato non è valido.',
    'in_array' => 'Il campo :attribute non esiste in :other.',
    'integer' => 'L\':attribute deve essere un numero intero.',
    'ip' => 'L\':attribute deve essere un indirizzo IP valido.',
    'ipv4' => 'L\':attribute deve essere un indirizzo IPv4 valido.',
    'ipv6' => 'L\':attribute deve essere un indirizzo IPv6 valido.',
    'json' => ':attribute deve essere una stringa JSON valida.',
    'mimes' => ':attribute deve essere un file di tipo: :values.',
    'mimetypes' => ':attribute deve essere un file di tipo: :values.',
    'not_in' => 'L\':attribute selezionato non è valido.',
    'not_regex' => 'Il formato :attribute non è valido.',
    'numeric' => 'L\':attribute deve essere un numero.',
    'present' => 'Il campo :attribute deve essere presente.',
    'regex' => 'Il formato :attribute non è valido.',
    'required' => 'Il campo :attribute è obbligatorio.',
    'required_if' => 'Il campo :attribute è obbligatorio quando :other è :value.',
    'required_unless' => 'Il campo :attribute è obbligatorio a meno che :other non sia in :values.',
    'required_with' => 'Il campo :attribute è obbligatorio quando :values ​​è presente.',
    'required_with_all' => 'Il campo :attribute è obbligatorio quando sono presenti :values',
    'required_without' => 'Il campo :attribute è obbligatorio quando :values ​​non è presente.',
    'required_without_all' => 'Il campo :attribute è obbligatorio quando nessuno di :values è presente.',
    'same' => ':attribute e :other devono corrispondere.',
    'starts_with' => 'L\':attribute deve iniziare con uno dei seguenti: :values.',
    'string' => 'L\':attribute deve essere una stringa.',
    'timezone' => 'L\':attribute deve essere una zona valida.',
    'unique' => 'L\':attribute è già stato preso.',
    'uploaded' => 'Impossibile caricare :attribute',
    'url' => 'Il formato :attribute non è valido.',
    'uuid' => 'L\':attribute deve essere un UUID valido.',
];