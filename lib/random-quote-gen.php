<?php
// List of random quotes.
$quotes = [
    [
        'quote' => 'Don\'t tell people your dreams, Show them!',
        'credits'=> 'Quotes & Things'
    ],
    [
        'quote' => 'A Goal without a plan is just a wish!',
        'credits'=> 'Inspiration Quotes'
    ],
    [
        'quote' => 'Every accomplishment starts with a decision to try!',
        'credits' => 'Random search on the web'
    ],
    [
        'quote' => 'Do something today that your future self will thank you for!',
        'credits' => 'Random search on the web'
    ],
    [
        'quote' => 'Your life does not get better by chance, it gets better by change',
        'credits' => 'Random search on the web'
    ]
];

// Pick ONE random quote from list of quotes
$rand_quote_key = array_rand($quotes, 1);

// get a quote from the random key and assign to a var that can be accessed later.
$random_quote = $quotes[$rand_quote_key];