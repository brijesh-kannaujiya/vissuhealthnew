<?php 

return [
    'between' => [
        'numeric' => 'Το χαρακτηριστικό : πρέπει να είναι μεταξύ :attribute και :min',
        'file' => 'Το χαρακτηριστικό : πρέπει να είναι μεταξύ :attribute και :min kilobyte.',
        'string' => 'Το χαρακτηριστικό : πρέπει να είναι μεταξύ :attribute και :min χαρακτήρων.',
        'array' => 'Το χαρακτηριστικό : πρέπει να έχει μεταξύ :attribute και :min στοιχεία.',
    ],
    'confirmed' => 'Η επιβεβαίωση χαρακτηριστικού δεν ταιριάζει.',
    'gt' => [
        'numeric' => 'Το χαρακτηριστικό : πρέπει να είναι μεγαλύτερο από :attribute',
        'file' => 'Το χαρακτηριστικό : πρέπει να είναι μεγαλύτερο από :attribute kilobyte.',
        'string' => 'Το χαρακτηριστικό : πρέπει να είναι μεγαλύτερο από χαρακτήρες :attribute',
        'array' => 'Το χαρακτηριστικό : πρέπει να έχει περισσότερα από στοιχεία :attribute',
    ],
    'gte' => [
        'numeric' => 'Το χαρακτηριστικό : πρέπει να είναι μεγαλύτερο ή ίσο με το :attribute',
        'file' => 'Το χαρακτηριστικό : πρέπει να είναι μεγαλύτερο ή ίσο με :attribute kilobyte.',
        'string' => 'Το χαρακτηριστικό : πρέπει να είναι μεγαλύτερο ή ίσο με χαρακτήρες :attribute',
        'array' => 'Το χαρακτηριστικό : πρέπει να έχει στοιχεία :attribute ή περισσότερα.',
    ],
    'lt' => [
        'numeric' => 'Το χαρακτηριστικό : πρέπει να είναι μικρότερο από :attribute',
        'file' => 'Το χαρακτηριστικό : πρέπει να είναι μικρότερο από :attribute kilobyte.',
        'string' => 'Το χαρακτηριστικό : πρέπει να είναι μικρότερο από χαρακτήρες :attribute',
        'array' => 'Το χαρακτηριστικό : πρέπει να έχει λιγότερα από :attribute στοιχεία.',
    ],
    'lte' => [
        'numeric' => 'Το χαρακτηριστικό : πρέπει να είναι μικρότερο ή ίσο με :attribute',
        'file' => 'Το χαρακτηριστικό : πρέπει να είναι μικρότερο ή ίσο με :attribute kilobyte.',
        'string' => 'Το χαρακτηριστικό : πρέπει να είναι μικρότερο ή ίσο με χαρακτήρες :attribute',
        'array' => 'Το χαρακτηριστικό : δεν πρέπει να έχει περισσότερα από στοιχεία :attribute',
    ],
    'max' => [
        'numeric' => 'Το χαρακτηριστικό : δεν μπορεί να είναι μεγαλύτερο από :attribute',
        'file' => 'Το χαρακτηριστικό : δεν μπορεί να είναι μεγαλύτερο από :attribute kilobyte.',
        'string' => 'Το χαρακτηριστικό : δεν μπορεί να είναι μεγαλύτερο από :attribute χαρακτήρες.',
        'array' => 'Το χαρακτηριστικό : δεν μπορεί να έχει περισσότερα από :attribute στοιχεία.',
    ],
    'min' => [
        'numeric' => 'Το χαρακτηριστικό : πρέπει να είναι τουλάχιστον :attribute',
        'file' => 'Το χαρακτηριστικό : πρέπει να είναι τουλάχιστον :attribute kilobyte.',
        'string' => 'Το χαρακτηριστικό : πρέπει να είναι τουλάχιστον :attribute χαρακτήρες.',
        'array' => 'Το χαρακτηριστικό : πρέπει να έχει τουλάχιστον :attribute στοιχεία.',
    ],
    'password' => 'Ο κωδικός πρόσβασης είναι λανθασμένος.',
    'size' => [
        'numeric' => 'Το χαρακτηριστικό : πρέπει να είναι :attribute',
        'file' => 'Το χαρακτηριστικό : πρέπει να είναι :attribute kilobytes.',
        'string' => 'Το χαρακτηριστικό : πρέπει να είναι χαρακτήρες :attribute',
        'array' => 'Το χαρακτηριστικό : πρέπει να περιέχει στοιχεία :attribute',
    ],
    'uploaded' => 'Η μεταφόρτωση του χαρακτηριστικού απέτυχε.',
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'προσαρμοσμένο μήνυμα',
        ],
    ],
    'attributes' => '',
    'captcha' => 'Παρέχεται μη έγκυρος κωδικός captcha',
    'accepted' => 'Το χαρακτηριστικό : πρέπει να γίνει αποδεκτό.',
    'active_url' => 'Το χαρακτηριστικό : δεν είναι έγκυρο URL.',
    'after' => 'Το χαρακτηριστικό : πρέπει να είναι ημερομηνία μετά το :attribute',
    'after_or_equal' => 'Το χαρακτηριστικό : πρέπει να είναι ημερομηνία μετά ή ίση με :attribute',
    'alpha' => 'Το χαρακτηριστικό : μπορεί να περιέχει μόνο γράμματα.',
    'alpha_dash' => 'Το χαρακτηριστικό : μπορεί να περιέχει μόνο γράμματα, αριθμούς, παύλες και κάτω παύλες.',
    'alpha_num' => 'Το χαρακτηριστικό : μπορεί να περιέχει μόνο γράμματα και αριθμούς.',
    'array' => 'Το χαρακτηριστικό : πρέπει να είναι ένας πίνακας.',
    'before' => 'Το χαρακτηριστικό : πρέπει να είναι ημερομηνία πριν από το :attribute',
    'before_or_equal' => 'Το χαρακτηριστικό : πρέπει να είναι μια ημερομηνία πριν ή ίση με :attribute',
    'boolean' => 'Το πεδίο :attribute πρέπει να είναι true ή false.',
    'date' => 'Το χαρακτηριστικό : δεν είναι έγκυρη ημερομηνία.',
    'date_equals' => 'Το χαρακτηριστικό : πρέπει να είναι ημερομηνία ίση με :attribute',
    'date_format' => 'Το χαρακτηριστικό : δεν ταιριάζει με τη μορφή :attribute',
    'different' => 'Το :attribute και το :other πρέπει να είναι διαφορετικά.',
    'digits' => 'Το χαρακτηριστικό : πρέπει να είναι :attribute ψηφία.',
    'digits_between' => 'Το χαρακτηριστικό : πρέπει να είναι μεταξύ :attribute και :min ψηφία.',
    'dimensions' => 'Το χαρακτηριστικό : έχει μη έγκυρες διαστάσεις εικόνας.',
    'distinct' => 'Το πεδίο :attribute έχει διπλή τιμή.',
    'email' => 'Το χαρακτηριστικό : πρέπει να είναι μια έγκυρη διεύθυνση email.',
    'ends_with' => 'Το χαρακτηριστικό : πρέπει να τελειώνει με ένα από τα ακόλουθα: :attribute',
    'exists' => 'Το επιλεγμένο χαρακτηριστικό : δεν είναι έγκυρο.',
    'file' => 'Το χαρακτηριστικό : πρέπει να είναι αρχείο.',
    'filled' => 'Το πεδίο :attribute πρέπει να έχει τιμή.',
    'image' => 'Το χαρακτηριστικό : πρέπει να είναι εικόνα.',
    'in' => 'Το επιλεγμένο χαρακτηριστικό : δεν είναι έγκυρο.',
    'in_array' => 'Το πεδίο :attribute δεν υπάρχει στο :other.',
    'integer' => 'Το χαρακτηριστικό : πρέπει να είναι ακέραιος.',
    'ip' => 'Το χαρακτηριστικό : πρέπει να είναι έγκυρη διεύθυνση IP.',
    'ipv4' => 'Το χαρακτηριστικό : πρέπει να είναι έγκυρη διεύθυνση IPv4.',
    'ipv6' => 'Το χαρακτηριστικό : πρέπει να είναι έγκυρη διεύθυνση IPv6.',
    'json' => 'Το χαρακτηριστικό : πρέπει να είναι έγκυρη συμβολοσειρά JSON.',
    'mimes' => 'Το χαρακτηριστικό : πρέπει να είναι αρχείο τύπου: :attribute',
    'mimetypes' => 'Το χαρακτηριστικό : πρέπει να είναι αρχείο τύπου: :attribute',
    'not_in' => 'Το επιλεγμένο χαρακτηριστικό : δεν είναι έγκυρο.',
    'not_regex' => 'Η μορφή :attribute δεν είναι έγκυρη.',
    'numeric' => 'Το χαρακτηριστικό : πρέπει να είναι αριθμός.',
    'present' => 'Το πεδίο :attribute πρέπει να υπάρχει.',
    'regex' => 'Η μορφή :attribute δεν είναι έγκυρη.',
    'required' => 'Το πεδίο :attribute είναι υποχρεωτικό.',
    'required_if' => 'Το πεδίο :attribute απαιτείται όταν το :other είναι :value.',
    'required_unless' => 'Το πεδίο :attribute απαιτείται εκτός εάν το :other είναι στο :values.',
    'required_with' => 'Το πεδίο :attribute απαιτείται όταν υπάρχει το :values',
    'required_with_all' => 'Το πεδίο :attribute απαιτείται όταν υπάρχουν :values',
    'required_without' => 'Το πεδίο :attribute απαιτείται όταν δεν υπάρχει το :values',
    'required_without_all' => 'Το πεδίο :attribute απαιτείται όταν δεν υπάρχει καμία από τις τιμές :values',
    'same' => 'Το :attribute και το :other πρέπει να ταιριάζουν.',
    'starts_with' => 'Το χαρακτηριστικό : πρέπει να ξεκινά με ένα από τα ακόλουθα: :attribute',
    'string' => 'Το χαρακτηριστικό : πρέπει να είναι μια συμβολοσειρά.',
    'timezone' => 'Το χαρακτηριστικό : πρέπει να είναι έγκυρη ζώνη.',
    'unique' => 'Το χαρακτηριστικό : έχει ήδη ληφθεί.',
    'url' => 'Η μορφή :attribute δεν είναι έγκυρη.',
    'uuid' => 'Το χαρακτηριστικό : πρέπει να είναι έγκυρο UUID.',
];