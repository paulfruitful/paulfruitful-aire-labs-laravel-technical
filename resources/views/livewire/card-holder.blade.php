<div>
    <div  id="card-holder">
                
        @foreach ($data as $card)
        @livewire('card', ['text' => $card["text"], 'stars' => $card["stars"], 'image' => $card['image'], 'name' => $card['name'], 'role' => $card['role']], key($card['key']))


        @endforeach

</div>
</div>
