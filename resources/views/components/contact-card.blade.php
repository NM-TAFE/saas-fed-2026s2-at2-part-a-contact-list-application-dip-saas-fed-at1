@props(['contact', 'showPhone' => true])

<!-- @dump($showPhone); -->

<div {{$attributes->merge(['class'=> 'contact-card'])}}>
    {{$slot}}
    <h2>{{ $contact['name'] }}</h2>
    <p>{{ $contact['email'] }}</p>


</div>
