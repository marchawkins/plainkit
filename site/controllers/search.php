<?php

return function ($site) {

  $query   = get('q');
  $results = $site->index()->listed()->search($query, 'title|text|tags');
  $results = $results->paginate(20);

  return [
    'query'      => $query,
    'results'    => $results,
    'pagination' => $results->pagination()
  ];

};

?>